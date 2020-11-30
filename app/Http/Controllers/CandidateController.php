<?php

namespace App\Http\Controllers;

use App\campusDesignation;
use App\candidate;
use App\centralDesignation;
use App\election;
use App\User;
use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::where("role_id",1)->where('status',1)->get();
        $campusDesignation =  campusDesignation::all();
        $centralDesignation = centralDesignation::all();
        $elections = election::all();
        return view('admin.candidate.create', compact('users', 'campusDesignation','centralDesignation','elections' ));
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
        // return $request;


        Image::configure(array('driver' => 'imagick'));

        
       
            $existCandidate = candidate::where('designation_id',$request->designation_id)->where('election_id',$request->election_id)->where('user_id',$request->user_id)->first();
       
            if(  isset($existCandidate->designation_id)){
                return "You Already Add this Candidate";
            }
            else{
                $candidate = new candidate;
                $candidate -> user_id = $request->candidate_id;
                $candidate -> designation_id = $request->designation_id;
                $candidate -> election_id = $request->election_id;

                        
                 
                 $fileName = time();
               $picture = Image::make($request->image)->fit(500, 400);
              $picture->save('images/'.$fileName);

                $candidate -> image = 'image/'.$fileName;
                $candidate->save();
            }


        
        

           

   }

    /**
     * Display the specified resource.
     *
     * @param  \App\candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(candidate $candidate)
    {
        //
    }
}
