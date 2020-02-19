<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\tag;
use App\Model\user\post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TagController extends Controller
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
        $tags = tag::all();
        return view('admin.tags', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'tag' => 'required'
        ]);
        $myArray = explode(', ', $request->tag);
        foreach($myArray as $my_Array){
            $tag = new tag;
            $tag->name = $my_Array;
            $tag->slug = $my_Array;
            $tag->save();
        }

        return redirect(route('tags.index'));
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
        $tag = tag::where('id', $id)->first();
        return view('admin.tags', compact('tag'));
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
        $id = Input::get('tagEdit');
        $this->validate($request, [
            'tagEdit',
            'tagChange',
        ]);
        $tag = tag::where('name', $id)->get()->first();
        if ($tag == null) {
            $request->session()->flash('alert-danger', 'ไม่พบข้อมูล');
            return redirect()->back();
        }
        $tag->name = $request->tagChange;
        $tag->slug = $request->tagChange;
        $tag->save();

        $request->session()->flash('alert-success', 'แก้ไขเรียบร้อย');

        $post = post::where('tags', 'LIKE', '%'.$request->tagEdit.'%')->get();
        $newArray = array();
        foreach ($post as $val) {
            $myArray = explode(' ', $val->tags);
            foreach ($myArray as $vals) {
                if ($vals == $request->tagEdit) {
                    $newArray[] = $request->tagChange;
                } else {
                    $newArray[] = $vals;
                }
            }
            $myArray = implode(' ', $newArray);
            $newArray = array();
            $posts = post::find($val->id);
            $posts->tags = $myArray;
            $posts->save();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tag::where('id', $id)->delete();
        return redirect()->back();
    }
}
