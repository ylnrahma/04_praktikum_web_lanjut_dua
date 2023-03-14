<?php

namespace App\Http\Controllers;

use App\Models\healing;
use App\Http\Requests\StorehealingRequest;
use App\Http\Requests\UpdatehealingRequest;

class HealingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorehealingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehealingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\healing  $healing
     * @return \Illuminate\Http\Response
     */
    public function show(healing $healing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\healing  $healing
     * @return \Illuminate\Http\Response
     */
    public function edit(healing $healing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehealingRequest  $request
     * @param  \App\Models\healing  $healing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehealingRequest $request, healing $healing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\healing  $healing
     * @return \Illuminate\Http\Response
     */
    public function destroy(healing $healing)
    {
        //
    }
}
