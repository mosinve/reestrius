<?php

namespace Reestrius\Http\Controllers;

use Reestrius\Object;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('objects.index');
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
     * @param  \Reestrius\Object  $object
     * @return \Illuminate\Http\Response
     */
    public function show(Object $object)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Reestrius\Object  $object
     * @return \Illuminate\Http\Response
     */
    public function edit(Object $object)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Reestrius\Object  $object
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Object $object)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Reestrius\Object  $object
     * @return \Illuminate\Http\Response
     */
    public function destroy(Object $object)
    {
        //
    }
}
