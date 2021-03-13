<?php

namespace App\Http\Controllers;

use App\campusDesignation;
use App\candidate;
use App\centralDesignation;
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
        $center = '';
        if ($campus == 'sec') {
            $election_id = 1;
            $center = 'Sylhet Engineering College';
        } elseif ($campus == 'mec') {
            $election_id = 2;
            $center = 'Mymensingh Engineering College';
        } elseif ($campus == 'fec') {
            $election_id = 3;
            $center = 'Faridpur Engineering College';
        } elseif ($campus == 'bec') {
            $election_id = 4;
            $center = 'Barishal Engineering College';
        } elseif ($campus == 'central') {
            $election_id = 5;
            $center = 'Central';
        } else {
            abort(404);
        }

        $election = election::find($election_id);
        $candidates = candidate::where('election_id', $election_id)->get();

        foreach ($candidates as $candidate) {
            $candidate->votes_count = $candidate->votes->count();
            // echo "<pre>";
            // print_r($candidate);
            // echo "</pre>";
        }
        

        $candidates = $candidates->sortByDesc('votes_count')->groupBy('desgnation_id');
        // return $candidates;
        if ($election_id == 5) {
            $designations = centralDesignation::all();
        } else {
            $designations = campusDesignation::all();
        }
 
        return view('admin.election.index', compact('candidates', 'designations', 'center','election'));
    }

    public function electionsView(Request $request)
    {
        $user = Auth::user();


        if ($request->id && $user->isVoter()) {
            if ($request->id == 5) {
                $election = election::find(5);
                $designations = centralDesignation::all();
            } else {
                $election = election::find($user->campus_id);

                $designations = campusDesignation::all();
            }
            return view('election.show', compact('election', 'designations'));
        } else {
            abort(404);
        }
    }



public function statusUp(Request $request){
                
        $election1 = election::find($request->id);

        // if($election1->status == 0){
        
        // $election1->status =1;

        //     $election1->save();
        // }
        // else{
            
        //     $election1->status=0;
        //     $election1->save();
        // }

        return redirect(back());
        }
    

}
