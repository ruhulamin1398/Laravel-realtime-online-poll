<?php

namespace App\Http\Controllers;

use App\poll;
use App\pollOption;
use App\vote;
use Illuminate\Http\Request;

class VoteController extends Controller
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
        $vote = new vote;
        $vote->poll_id = $request->poll_id;
        $vote->ip = request()->ip();
        $vote->save();

        $i=0;
        foreach($request->vote as $id){
            $i++;
            $option=  pollOption::find($id);
            $option ->count +=1;;
            $option->save();

        }
  $poll= poll::find($request->poll_id);
  $poll->total_votes += $i;
  $poll->save();

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(vote $vote)
    {
        //
    }

    public function ablToVote(poll $poll)
    {
        if ($poll->ip_duplicate == 1) {

            $able = vote::where('poll_id', $poll->id)
            ->where('ip', request()->ip()  );
            if ($able->count() != 0) {
                return 0;
            }
        }


        return 1;
    }
    public function result(poll $poll)
    {
     
        
      $options =  $poll->options;
      return compact('poll','options');
 
      
    }



}
