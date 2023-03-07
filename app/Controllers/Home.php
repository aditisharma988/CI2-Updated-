<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/frontpage');
    }
    public function welcomepage()
    {
        return view('welcome');
    }
}
