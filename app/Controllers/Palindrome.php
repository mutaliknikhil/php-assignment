<?php

namespace App\Controllers;

class Palindrome extends BaseController
{
    public function index()
    {
        
        $str = $_GET['str'];
        $str_temp = strrev($str);
        if($str_temp == $str)
            return redirect()->to('/')->with('result','String is Palindrome : '.$str);
        else
            return redirect()->to('/')->with('result','String is Not Palindrome : '.$str);
    }
}
?>