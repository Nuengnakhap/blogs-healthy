<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\post;
use App\Model\user\tag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::orderBy('id', 'desc')->paginate(5);
        //$posts = post::all();
        $tags = tag::all();
        return view('admin.articles', compact('posts', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = tag::all();
        return view('admin.new-article', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'tags'=>'required',
            'article'=>'required',
            'description'=>'required',
            'image'=>'required',
            'image_title'=>'required',
        ]);
        if ($request->status == "on") {
            $request->status = "1";
        }
        else {
            $request->status = "0";
        }
        if ($request->hasFile('image')) {
            $image =  Storage::disk('uploads')->put('image', $request->image);
        }
        if ($request->hasFile('image_title')) {
            $image_title =  Storage::disk('uploads')->put('image_title', $request->image_title);
        }
        $myArray = implode(' ', $request->tags);
        $post = new post;
        $post->title = $request->title;
        $post->article = $request->article;
        $post->status = $request->status;
        $post->description = $request->description;
        $post->tags = $myArray;
        $post->image = $image;
        $post->image_title = $image_title;
        $post->save();
        //$post->tags()->sync($request->tags);

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::where('id', $id)->first();
        $tags = tag::all();
        return view('admin.edit-article', compact('post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required',
            'tags'=>'required',
            'article'=>'required',
            'description'=>'required',
        ]);
        if ($request->status == "on") {
            $request->status = "1";
        }
        else {
            $request->status = "0";
        }
        $myArray = implode(' ', $request->tags);
        $post = post::find($id);
        $post->title = $request->title;
        $post->article = $request->article;
        $post->status = $request->status;
        $post->tags = $myArray;
        $post->description = $request->description;
        if ($request->hasFile('image')) {
            //$image = $request->image->store('uploads');
            $image =  Storage::disk('uploads')->put('image', $request->image);
            $post->image = $image;
        }
        if ($request->hasFile('image_title')) {
            $image_title =  Storage::disk('uploads')->put('image_title', $request->image_title);
            $post->image_title = $image_title;
        }
        $post->save();
        //$post->tags()->sync($request->tags);

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id', $id)->delete();
        return redirect()->back();
    }
}
