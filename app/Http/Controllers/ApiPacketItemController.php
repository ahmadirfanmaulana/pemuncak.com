<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PacketItem;

class ApiPacketItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(PacketItem $packetitems)
    {
      $this->packetitems = $packetitems;
    }
    public function index()
    {
        //
        return response($this->packetitems->orderBy('id', 'desc')->get());
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
        $create = $this->packetitems->create($request->all()) ? 'success' : 'error';

        if ($create == 'success') {
          $message = 'Packet Items Created Successfully !';
        }
        else {
          $message = 'Packet Items Created Not Success !';
        }

        // return
        return response([ 'status' => $create, 'message' => $message ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $find = $this->packetitems->where($request->data);
        if ($request->method == 'first') {
          $result = $find->first();
        }
        else {
          $result = $find->get();
        }

        return response($result);
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
    public function update(Request $request)
    {
        //
        $find = $this->packetitems->find($request->id);
        $update = $find->update($request->all()) ? 'success' : 'error';

        if ($update == 'success') {
          $message = 'Packet Items Updated Successfully !';
        }
        else {
          $message = 'Packet Items Updated Not Success !';
        }

        // return
        return response([ 'status' => $update, 'message' => $message ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $delete = $this->packetitems->destroy($request->id) ? 'success' : 'error';

        if ($delete == 'success') {
          $message = 'Packet Items Deleted Successfully !';
        }
        else {
          $message = 'Packet Items Deleted Not Success !';
        }

        // return
        return response([ 'status' => $delete, 'message' => $message ]);
    }

    public function count()
    {
      return response($this->packetitems->count());
    }
}
