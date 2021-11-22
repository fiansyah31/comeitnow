<?php

namespace App\Controllers;
use App\Models\ProjectModel;
use Myth\Auth\Models\UserModel;
class User extends BaseController
{
	protected $usermodel;
    protected $projectmodel;
    public function __construct()
    {
		$this->usermodel = new UserModel();
        $this->projectmodel = new ProjectModel();
    }
    public function home(){
		$data = [
            'title' => 'Dashboard',
			'project' => $this->projectmodel->countAllResults()
        ];
        return view('dashboard/dashboard', $data);
    }
    public function setting(){
		$data = [
            'title' => 'Dashboard | Setting',
        ];
        return view('dashboard/dashboard-setting', $data);
    }
    public function profile(){
		$data = [
            'title' => 'Dashboard | Profile',

        ];
        return view('dashboard/dashboard-profile', $data);
    }
    public function product(){

		$data = [
            'title' => 'Dashboard | Product',
			'data' =>	$this->projectmodel->resultProject()->findAll()

        ];
        return view('dashboard/dashboard-product', $data);
    }
    public function createproduct(){
		$data = [
            'title' => 'Dashboard | Create project',
        ];
        return view('dashboard/create-product', $data);
    }
    public function change($slug){
		$data = [
			'title' => 'Dashboard | Change Project',
			'data' =>  $this->projectmodel->where(['slug' => $slug])->first()

        ];
        return view('dashboard/edit-product', $data);
    }

    public function save()
	{
		if (!$this->validate([
            'judul_project' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'link_project' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'picture_project' => [
				'rules' => 'uploaded[picture_project]|mime_in[picture_project,image/jpg,image/jpeg,image/gif,image/png]|max_size[picture_project,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		
		$dataBerkas = $this->request->getFile('picture_project');
		$fileName = $dataBerkas->getRandomName();
		
		$slug = url_title($this->request->getVar('judul_project'));
		$this->projectmodel->save([
            'link_project' =>  $this->request->getPost('link_project'),
            'judul_project' =>  $this->request->getPost('judul_project'),
			'slug' => $slug,
			'picture_project' => $fileName,
		]);
		$dataBerkas->move('image', $fileName);
		session()->setFlashdata('success', 'Project Berhasil diupload');
		return redirect()->to(base_url('user/product'));
	}

	function update($id_project) {
		
		$data = $this->projectmodel->getProject($this->request->getVar('slug'));
        if ($data->judul_project == $this->request->getVar('judul_project')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[project.judul_project]';
        }
		if ($data->link_project == $this->request->getVar('link_project')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[project.link_project]';
        }
		if (!$this->validate([
           
            'link_project' => [
				'rules' => $rule_judul,
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'judul_project' => [
				'rules' => $rule_judul,
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			
			
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
		$filesampul = $this->request->getFile('picture_project');
		
		if ($filesampul->getError() == 4) {
			$namasampul = $this->request->getVar('picture_lama');
        } else {
			$namasampul = $filesampul->getRandomName();
			
            //pindahkan gambar
            $filesampul->move('image', $namasampul);
			
            //hapus file lama
            unlink('image/' . $this->request->getVar('picture_lama'));
        }
		
		$slug = url_title($this->request->getVar('judul_project'));
		$this->projectmodel->save([
			'id_project' => $id_project,
            'link_project' =>  $this->request->getPost('link_project'),
            'judul_project' =>  $this->request->getPost('judul_project'),
			'slug' => $slug,
			'picture_project' => $namasampul,
		]);
		session()->setFlashdata('success', 'Project Berhasil di update');
		return redirect()->to(base_url('/dashboard-product'));
	}
	function delete($id_project) {
		
		$data = $this->projectmodel->find($id_project);
	//hapus gambar		
	unlink('image/' . $data->picture_project);

	$this->projectmodel->delete($id_project);

	return redirect()->to('/dashboard-product');
	}
}