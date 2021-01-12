<?php

namespace App\Http\Controllers;

use App\home_login;
use Illuminate\Http\Request;

class HomeLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home_login');
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
     * @param  \App\home_login  $home_login
     * @return \Illuminate\Http\Response
     */
    public function show(home_login $home_login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\home_login  $home_login
     * @return \Illuminate\Http\Response
     */
    public function edit(home_login $home_login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\home_login  $home_login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, home_login $home_login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\home_login  $home_login
     * @return \Illuminate\Http\Response
     */
    public function destroy(home_login $home_login)
    {
        //
    }
}
