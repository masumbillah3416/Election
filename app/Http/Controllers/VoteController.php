<?php

namespace App\Http\Controllers;

use App\candidate;
use App\designation;
use App\election;
use App\vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user()->id;
        $election_id = $request->election_id;
        if( $election_id == 5){
            $inValidVote = vote::where('designation_id',$request->designation_id)->where('election_id',5)->where('user_id',$user)->first();
       
            if(  isset($inValidVote->designation_id)){
                abort(404);
            }

            else{
                
                $vote= new vote;
                $vote->user_id= $user;
                $vote->election_id= $election_id;
                $vote->designation_id= $request->designation_id;
                $vote->candidate_id= $request->candidate_id;
                $vote->save();
                return back();
            }
 
        }
        else{
            $election_id = Auth::user()->campus->id;
            
            $inValidVote= vote::where('designation_id',$request->designation_id)->where('election_id',$election_id)->where('user_id',$user)->first();
            if(  isset($inValidVote->designation_id)){
                abort(404);
            }
            else{
                $vote= new vote;
                $vote->user_id= $user;
                $vote->election_id= $election_id;
                $vote->designation_id= $request->designation_id;
                $vote->candidate_id= $request->candidate_id;
                $vote->save();
                return back();

            }

        }
        abort(404);
        
        
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
}
