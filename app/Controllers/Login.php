<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login_page');
    }

    public function login_user()
    {
        $session = session();
        $users = new UserModel();

        $email = $this->request->getGet('email');
        $password = $this->request->getGet('password');

        $data = $users->select('name')->where('email',$email)->where('password',$password)->first();
        
        if($data == NULL)
            return redirect()->to('login')->with('status_red','please check your login credentials!!!');
        else
            return redirect()->to('home_page')->with('name',''.$data['name']);


        

    }
}
?>