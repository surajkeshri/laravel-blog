<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateBlogController extends Controller
{
    public function index()
    {
      return view('createBlog');   
    }

    public function dashboard()
    {
      echo session()->get('user_id');
    }
}
