<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        return [
	        'id' => "1",
	        'name' => "sadas",
	        'email' => "2121",
	        'posts' => "212121",
	        'created_at' => "2121",
	        'updated_at' => "2121",
    	];
    }
}
