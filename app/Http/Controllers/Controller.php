<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function homepage() {
        return view('home.homepage');

    }
}
