<?php

namespace App\Controllers;
use App\Models\ProjectModel;
class Home extends BaseController
{
    protected $projectmodel;
    public function __construct()
    {
        $this->projectmodel = new ProjectModel();
    }
    public function index()
    {
        $data = [
            'title' => 'UI UX & web designer',
            'data' => $this->projectmodel->resultProject()->paginate(3)
        ];
        return view('home/home', $data);
    }
    public function portfolio()
    {
        $data = [
            'title' => 'Portfolio',
            'data' => $this->projectmodel->resultProject()->findAll()
        ];
        return view('home/portfolio', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register',
        ];
        return view('auth/register', $data);
    }
    public function tes() {
        return view('tes');
    }
    public function email() {
        $data = [
            'title' => 'Email',
        ];
        return view('home/sendemail', $data);
    }
    public function sendemail() {
        
        $emailclient =  $this->request->getPost('email');
        $nameclient =  $this->request->getPost('name');
        $subject =  $this->request->getPost('subject');
        $pesan =  $this->request->getPost('pesan');
        $email = \Config\Services::email();

        $config["protocol"] = "mail";
        $config["fromEmail"] = "Comeitnow - Alfian syahputra";

        //isi sesuai nama domain/mail server
        $config["SMTPHost"]  = "mail.comeitnow.com";

        //alamat email SMTP
        $config["SMTPUser"]  = "syahputraalfian223@gmail.com"; 

        //password email SMTP
        $config["SMTPPass"]  = "fianpastibisa1"; 

        $config["SMTPPort"]  = 465;
        $config["SMTPCrypto"] = "ssl";

        $email->initialize($config);

        $email->setFrom($emailclient, $nameclient);
        $email->setTo('admin@comeitnow.com');

        $email->setSubject($subject);
        $email->setMessage($pesan);

        $email->send();
		session()->setFlashdata('success', 'Successfully sent message');
        return redirect()->to(base_url('home/email'));
    }
}
