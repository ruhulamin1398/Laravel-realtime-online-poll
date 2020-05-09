<?php

namespace App\Http\Controllers;

use App\poll;
use App\pollOption;

use Illuminate\Http\Request;

class PollController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $poll = new poll;

        $poll->title = $request->title;

        if ($request->chacking == 1) {
            $poll->ip_duplicate = 1;
        } else {
            $poll->no_duplicate = 1;
        }
        if ($request->multiple == 'on') {
            $poll->multiple = 1;
        } else {
            $poll->multiple = 0;
        }
        $poll->save();
        




        $options = $request->options;
        array_pop($options);

        foreach($options as $option){
            $pollOption = new pollOption;
            $pollOption->poll_id= $poll->id;
            $pollOption->name= $option;
            $pollOption->save();
            
        }




        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function show(poll $poll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function edit(poll $poll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, poll $poll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function destroy(poll $poll)
    {
        //
    }
}
