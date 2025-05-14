<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function helloworld(string $name)
    {
        // return "<h1>Hello World From Controller</h1>";
        return view("home", [$name]);
    }
}
