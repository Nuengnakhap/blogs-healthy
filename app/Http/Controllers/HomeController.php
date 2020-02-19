<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\user\post;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = post::where('status', 1)->get();
    	return view('user.home', compact('posts'));
    }
}
