<?php

namespace App\Http\Controllers;

use App\candidate;
use App\designation;
use App\election;
use Illuminate\Http\Request;
use Illuminate\Routing\SortedMiddleware;
use Illuminate\Support\Facades\Auth;

class ElectionController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\election  $election
     * @return \Illuminate\Http\Response
     */
    public function show(election $election)
    {
        return "hhah";
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\election  $election
     * @return \Illuminate\Http\Response
     */
    public function edit(election $election)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\election  $election
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, election $election)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\election  $election
     * @return \Illuminate\Http\Response
     */
    public function destroy(election $election)
    {
        //
    }



    public function elections($campus)
    {
        $center= '';
        if($campus== 'sec'){
            $election_id=1;
            $center = 'Sylhet Engineering College';

        }
        elseif ($campus== 'mec'){
            $election_id=2; 
            $center = 'Mymensingh Engineering College';

        }
        elseif ($campus== 'fec'){
            $election_id=3; 
            $center = 'Faridpur Engineering College';

        }
        elseif ($campus== 'bec'){
            $election_id=4; 
            $center = 'Barishal Engineering College';

        }
        elseif ($campus== 'central'){
            $election_id=5; 
            $center = 'Central';

        }
        else{
            abort(404);
        }

        $candidates= candidate:: where('election_id',$election_id)->get();
        
        foreach ($candidates as $candidate ) {
            $candidate->votes_count = $candidate->votes->count();
        }

        $candidates= $candidates->sortByDesc('votes_count')->groupBy('desgnation_id');

        $designations = designation::all();
        // isset($candidates[2])
        
        return view('admin.election.index',compact('candidates','designations','center'));
        
    }

    public function electionsView(Request $request){
        $user= Auth::user();
        
        if($request->id && $user->isVoter()){
           if($request->id==5){
               $election = election::find(5);
           }
           else{
            $election = election::find($user->campus_id);
           }
           return view('election.show',compact('election'));

        }
        else{
            abort(404);
        }
    }


}
