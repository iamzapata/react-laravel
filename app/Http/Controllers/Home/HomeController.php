<?php

namespace ReactLaravel\Http\Controllers\Home;

use Illuminate\Http\Request;

use ReactLaravel\Http\Requests;
use ReactLaravel\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
    	return view("home");
    }
}
