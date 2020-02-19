<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\post;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	$post = post::where('status', 1)->latest()->get();
      $new_arr = [];
      for ($i = 0; $i < 9; $i++) {
        $new_arr[$i] = $post[$i];
      }
      $posts = $new_arr;
    	return view('user.home', compact('posts'));
    }
    public function info()
    {
      return view('user.info');
    }
}
