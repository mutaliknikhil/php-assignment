<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function buzzfizz()
    {
        return view('assignment_2');
    }

    public function palindrome()
    {
        return view('assignment_3');
    }

    
    public function home_page()
    {
        return view('home_page');
    }
    
}
?>