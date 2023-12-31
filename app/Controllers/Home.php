<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function ecommerce(){
        return view('ecommerce');
    }

    public function crudproduct(){
        return view('admin/crudproduct');
    }
}
