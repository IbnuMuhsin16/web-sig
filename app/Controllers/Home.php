<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $userModel = new \App\Models\UserModel();
        $login = $this->request->getPost("login");
        if($login){
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");

            if($username==''or $password== ''){
                $err = "silahkan masukan username dan password";
            }
            if($err){
                session()->setFlashdata("error", $err);
                return redirect()->to('login');
            }
        }
        return view('login');
    }
}
