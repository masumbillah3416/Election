<?php

namespace App\Http\Controllers;

use App\campus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getUsers($campus)
    {
        if($campus== 'sec'){
            $campus_id=1;
        }
        elseif ($campus== 'mec'){
            $campus_id=2; 
        }
        elseif ($campus== 'fec'){
            $campus_id=3; 
        }
        elseif ($campus== 'bec'){
            $campus_id=4; 
        }
        else{
            abort(404);
        }

        $users= User::where('campus_id',$campus_id)->where('status',true)->get();
        $campus= campus::find($campus_id);

        return view('admin.user.index',compact('campus','users'));
        

        
    }
    public function voters(Request $request)
    {

        if(Auth::user()->isAdmin()){

        $campus_id = Auth::user()->campus_id;
        $users= User::where('campus_id',$campus_id)->where('role_id',1)->get();
        $campus= campus::find($campus_id);
        }

        else if(Auth::user()->isCommissioner()){
            
        $users= User::where('campus_id',$request->campus_id)->where('role_id',1)->get();
        $campus= campus::find($request->campus_id);
        }
        else{
            abort(404);
        }


        
        return view('admin.user.voters',compact('campus','users'));
    }

    
    public function varifyUser($id)
    {
        $user = User::find($id);
        $user->status = true;
        $user->save();
        return Redirect::back()->withSuccess(['User varified']);
    }


}
