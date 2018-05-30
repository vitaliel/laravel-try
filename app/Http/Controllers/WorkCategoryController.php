<?php

namespace App\Http\Controllers;

use App\WorkCategory;
use Illuminate\Http\Request;

class WorkCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
     * @param  \App\WorkCategory  $workCategory
     * @return \Illuminate\Http\Response
     */
    public function show(WorkCategory $workCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkCategory  $workCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkCategory $workCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkCategory  $workCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkCategory $workCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkCategory  $workCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkCategory $workCategory)
    {
        //
    }
}
