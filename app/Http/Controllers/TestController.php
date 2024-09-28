<?php

namespace App\Http\Controllers;



class TestController extends Controller
{
    public function ahmed()
    {
        dd("Hello Ahmed from test controller");
    }


    public function printName($name = "DefaultName")
    {
        dd("hello $name from print name function ");
    }
}
