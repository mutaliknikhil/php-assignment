<?php

namespace App\Controllers;

class BuzzFizz extends BaseController
{
    public function index()
    {
        $num = $_GET['number'];

        if($num % 3==0 && $num % 5 == 0)
            $num = "BuzzFizz";
        else if($num % 3 == 0)
            $num = "Buzz";
        else if($num % 5 == 0)
            $num = "Fizz";
        else
            $num = "".$num;

        return redirect()->to('/')->with('result','Number is '.$num);
    }
}
?>