<?php

namespace App\Http\Controllers;

use App\op_usr;
use Illuminate\Http\Request;

class OpUsrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('op_usr');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\op_usr  $op_usr
     * @return \Illuminate\Http\Response
     */
    public function show(op_usr $op_usr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\op_usr  $op_usr
     * @return \Illuminate\Http\Response
     */
    public function edit(op_usr $op_usr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\op_usr  $op_usr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, op_usr $op_usr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\op_usr  $op_usr
     * @return \Illuminate\Http\Response
     */
    public function destroy(op_usr $op_usr)
    {
        //
    }
}
