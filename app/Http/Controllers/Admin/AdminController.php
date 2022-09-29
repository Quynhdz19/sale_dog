<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public $title;
    public function index() {


        $title = 'Home';
        return view('admin.home', compact('title'));
    }
}
