<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');

        // $name = config('app.undefined','welcome');

        // dump($name);
        // dd("hola munda :v");
    }
}
