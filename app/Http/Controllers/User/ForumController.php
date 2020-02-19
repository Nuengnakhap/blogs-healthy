<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\forum;
use App\Model\user\User;
use App\Model\user\comment_forum;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $posts = forum::orderBy('id', 'desc')->paginate(10);
        $user = Auth::user();
        return view('user.forum-show', compact('posts', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('user.forum-create', compact('user'));
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
            'article'=>'required',
            'posted_by'=>'required',
        ]);
        $post = new forum;
        $post->title = $request->title;
        $post->article = $request->article;
        $post->posted_by = $request->posted_by;
        $post->save();

        return redirect(route('forum.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = forum::where('title', $id)->first();
        $user = Auth::user();
        $comment = comment_forum::where('forum_id', $post->id)->get();
        if ($comment == null)
            return view('user.forum-view', compact('post', 'comment', 'user'));
        return view('user.forum-view', compact('post', 'comment', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = forum::where('id', $id)->first();
        $user = Auth::user();
        if ($post->posted_by != $user->name) {
            return abort(404);
        }
        return view('user.forum-edit', compact('post', 'user'));
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
            'article'=>'required',
            'posted_by'=>'required',
        ]);
        $post = forum::find($id);
        $post->title = $request->title;
        $post->article = $request->article;
        $post->posted_by = $request->posted_by;
        $post->save();

        return redirect(route('forum.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $post = forum::where('id', $id)->first();
        $user = Auth::user();
        if ($post->posted_by != $user->name) {
            return abort(404);
        }
        forum::where('id', $id)->delete();
        return redirect()->back();
    }
}
