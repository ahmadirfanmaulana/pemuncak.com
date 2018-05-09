<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Step;

class ApiStepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Step $steps, Request $requests)
    {
      $this->steps = $steps;
      $this->requests = $requests;
    }
    public function index()
    {
        //
        return response($this->steps->with(['destination'])->orderBy('level', 'desc')->get());
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
        //
        $this->steps->create($this->requests->all());

        return response([ 'message' => 'Step Created Successfully !' ]);
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
        return response($this->steps->find($this->requests->all())->first());
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
    public function update()
    {
        //
        // from model Step
        $this->steps
        // find where { id :  }
        ->find($this->requests->id)

        ->update($this->requests->all());

        return response([ 'message' => 'Step Updated Successfully !' ]);
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
        $this->steps->destroy($this->requests->id);

        return response([ 'message' => 'Step Deleted Successfully !' ]);
    }
}
