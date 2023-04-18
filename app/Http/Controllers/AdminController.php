<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function lista(){
        $data['header_title'] = 'Admin lista';
        return view('admin.admin.lista', $data);
    }

    public function add(){
        $data['header_title'] = 'add novo Admin ';
        return view('admin.admin.add', $data);
    }
}
