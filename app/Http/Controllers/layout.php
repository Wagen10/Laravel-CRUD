<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layout extends Controller
{
    public function index()
    {
        return View('admin/main');
    }
    public function home(){
        return View('admin/table');
    }
    public function data(){
        return View('admin/data-tables');
    }
}
