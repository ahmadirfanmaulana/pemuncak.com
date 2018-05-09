<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ApiPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Post $posts, Request $requests)
    {
      $this->posts = $this->postss;
      $this->requests = $this->requestss;
    }
    public function index()
    {
        //
        return response($this->posts->with(['user'])->orderBy('id', 'desc')->get());
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
     * @param  \Illuminate\Http\Request  $this->requests
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $this->posts->create($this->requests->all());

        return response([ 'message' => 'Post Created Successfully !' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return response($this->posts->find($this->requests->all())->first());
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
     * @param  \Illuminate\Http\Request  $this->requests
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $this->requests, $id)
    {
        //
        $this->posts->find($this->requests->id)->update($this->requests->all());

        return response([ 'message' => 'Post Updated Successfully !' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        $this->posts->destroy($this->requests->id);

        return response([ 'message' => 'Post Deleted Successfully !' ]);
    }
}
