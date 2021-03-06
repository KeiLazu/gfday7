<?php

namespace App\Http\Controllers;

use App\memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memodata = memo::all();
        // dd($memodata);
        return view('memo', compact('memodata'));
        
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
     * @param  \App\memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function show(memo $memo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function edit(memo $memo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, memo $memo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function destroy(memo $memo)
    {
        //
    }
}
