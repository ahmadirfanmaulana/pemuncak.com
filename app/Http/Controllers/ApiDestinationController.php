<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
class ApiDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Destination $destinations, Request $requests)
    {
      $this->destinations = $destinations;
      $this->requests = $requests;
    }
    public function index()
    {
        //

        $destination = $this->destinations->with(['regional' , 'province'])
        ->get();

        return response($destination);

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
    public function store()
    {
        //
        $this->destinations->create($this->requests->all());
        return response(['message'=>'Packet Items Created Successfully !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $destination = $this->destinations->where($this->requests->data)->with(['regional' , 'province']);

        if ($this->requests->method == 'first') {
          $result = $destination->first();
        }
        else {
          $result = $destination->get();
        }

        return response($result);
    } 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
        $this->destinations->find($this->requests->id)->update($this->requests->all());
        return response(['message'=>'Destination Updated Successfully !']);
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
        $this->destinations->destroy($this->requests->id);

        return response(['message'=>'Destination Deleted Successfully !']);
    }

    public function count()
    {
      return response($this->destinations->count());
    }
}
