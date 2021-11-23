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
}
