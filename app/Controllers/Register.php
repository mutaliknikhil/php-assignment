<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{   
    public function index()
    {
        return view('register_page');
        // return "Register";
    }

    public function register()
    {
        $users = new UserModel();
        $file = $this->request->getFile('profile_img');
        $imgName = $file->getRandomName();
        if($file->isValid() && !$file->hasMoved())
        {  
            $file->move('uploads/', $imgName);
        }
        else{
            $imgName = NULL;
        }

        $email = $this->request->getPost('email');

        $res = $users->select('name')->where('email',$email)->first();
        
        if($res != NULL)
            return redirect()->to( base_url('register_user'))->with('status',$email.' Email Id is already registered with us');
        
        $data =[
            'email' => $this->request->getPost('email'),
            'name' => $this->request->getPost('name'),
            'password' => $this->request->getPost('password'),
            'profile_image' => $imgName,
        ];

        
        if($users->insert($data, false)!=false)
            return redirect()->to( base_url('login'))->with('status','Hii registration successfull, please login with your credentials');

    }

}
?>