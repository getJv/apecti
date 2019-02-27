<?php

namespace App\Http\Controllers;

use App\Done;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dones.index');
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
     * @param  \App\Done  $done
     * @return \Illuminate\Http\Response
     */
    public function show(Done $done)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Done  $done
     * @return \Illuminate\Http\Response
     */
    public function edit(Done $done)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Done  $done
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Done $done)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Done  $done
     * @return \Illuminate\Http\Response
     */
    public function destroy(Done $done)
    {
        //
    }
}
