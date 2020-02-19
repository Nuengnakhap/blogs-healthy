<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\comment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
	public function index()
	{
		$post = post::where('status', 1)->latest()->get();
		$tags = tag::all();
        $name = 'Healthy Blog';
        $new_arr = [];
        $count = 0;
        for ($i = 0; $i < (ceil(count($post)/3)); $i++) {
            for ($j = 0; $j < 3; $j++) {
                $new_arr[$i][$j] = $post[$count];
                if ($count == count($post)-1) break;
                $count++;
            }
        }
        $posts = $new_arr;
    	return view('user.post', compact('posts', 'tags', 'name'));
	}
    public function post($id)
    {
        $post = post::where('title', $id)->first();
        $user = Auth::user();
        $comment = comment::where('post_id', $post->id)->get();

        if ($comment == null)
            return view('user.article', compact('post', 'comment', 'user'));
    	return view('user.article', compact('post', 'comment', 'user'));
    }
    public function tag(tag $tag)
    {
        $post = post::where('tags', 'LIKE', '%'.$tag->name.'%')->where('status', 1)->latest()->get();
        $tags = tag::all();
        $name = $tag->name;
        $term = Input::post('search');
        $new_arr = [];
        $count = 0;
        if (count($post) <= 3) {
            for ($i = 0; $i < 1; $i++) {
                for ($j = 0; $j < count($post); $j++) {
                    $new_arr[$i][$j] = $post[$count];
                    if ($count == count($post)-1) break;
                    $count++;
                }
            }
        }
        else {
            for ($i = 0; $i < (ceil(count($post)/3)); $i++) {
                for ($j = 0; $j < 3; $j++) {
                    $new_arr[$i][$j] = $post[$count];
                    if ($count == count($post)-1) break;
                    $count++;
                }
            }
        }
        $posts = $new_arr;
        return view('user.post', compact('posts', 'tags', 'name', 'term'));
    }
    public function search(Request $req)
    {
        if($req->search == "") {
            $post = post::where('status', 1)->latest()->get();
            $tags = tag::all();
            $name = 'Search';
            $new_arr = [];
            $count = 0;
            for ($i = 0; $i < (ceil(count($post)/3)); $i++) {
                for ($j = 0; $j < 3; $j++) {
                    $new_arr[$i][$j] = $post[$count];
                    if ($count == count($post)-1) break;
                    $count++;
                }
            }
            $posts = $new_arr;
            //$term = Input::post('search');
            return view('user.post', compact('posts', 'tags', 'name'));
        } else {
            $post = post::where('title', 'LIKE', '%'.$req->search.'%')->where('status', 1)->latest()->get();
            $tags = tag::all();
            $name = 'Search';
            $new_arr = [];
            $count = 0;
            for ($i = 0; $i < (ceil(count($post)/3)); $i++) {
                for ($j = 0; $j < 3; $j++) {
                    $new_arr[$i][$j] = $post[$count];
                    if ($count == count($post)-1) break;
                    $count++;
                }
            }
            $posts = $new_arr;
            //$term = Input::post('search');
            return view('user.post', compact('posts', 'tags', 'name'));
        }
    }
}
