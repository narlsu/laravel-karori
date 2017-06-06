<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crate;
use Auth;

class CrateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate
        //$this->validate($request,[
        //    'title' => 'required|min:10|max:70',
        //    'content' => 'required|max:65535',
        //    'image' => 'required|image',
        //    'alt_text' =>'required',
        //    ]);

        $savedPost = $this->savePostData($request);

        // Redirect Post
        return redirect('/crate/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function savePostData($request){
        $newPost = $request->all();

        $newPost['users_id'] = \Auth::user()->id;
        $post = Crate::create($newPost);

        $post->weekly_crate          = $request->has('weekly_crate'); // if the request contains the checkbox value, it must have been checked (i.e. is true), otherwise, it wasn't
        $post->custom_crate          = $request->has('custom_crate');
        $post->custom_crate_text     = $request['custom_crate_text'];

        $post->save();
        return $post;
    }
}