<?php

use App\campus;
use App\campusDesignation;
use App\candidate;
use App\centralDesignation;
use App\election;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','IndexController@index')->name('index')->middleware('auth');
Route::resource('votes','VoteController')->middleware('voter');
Route::get('/admin/elections/{campus}','ElectionController@elections')->name('elections')->middleware('commissioner');
Route::get('/admin/voters','UserController@voters')->name('voters')->middleware('adminCommissioner');

Route::get('/admin','AdminController@index')->name('admin')->middleware('adminCommissioner');


Route::get('/admin/varify-user/{id}','UserController@varifyUser')->name('varify-user')->middleware('admin');
Route::get('/admin/cancel-varification/{id}','UserController@cancelVarify')->name('cancel-varification')->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/elections','ElectionController@electionsView')->name('electionsView')->middleware('voter');


Route::get('electionstatus','ElectionController@statusUp'
)->name('electionStatus')->middleware('auth');

Route::resource('candidates','CandidateController');



Route::get('data-insert',function(){


    $campuses = campus::all();
    $campusDesignations = campusDesignation::all();
    // return compact('campuses','campusDesignations');
    
    $low=-21 ; 
    $high=5;

    foreach($campuses as $campus){
        $low += 25;
        $high +=25;
    
        
        foreach($campusDesignations as $campusDesignation){

            DB::table('candidates')->insert([
                [
                    'user_id'=> rand($low,$high),
                    'designation_id'=>$campusDesignation->id,
                    'election_id' => $campus->id,
                    'image' =>"https://www.w3schools.com/howto/img_avatar.png",
                ],
                [
                    'user_id'=> rand($low,$high),
                    'designation_id'=>$campusDesignation->id,
                    'election_id' => $campus->id,
                    'image' =>"https://www.w3schools.com/howto/img_avatar.png",
                ],
                [
                    'user_id'=> rand($low,$high),
                    'designation_id'=>$campusDesignation->id,
                    'election_id' => $campus->id,
                    'image' =>"https://www.w3schools.com/howto/img_avatar.png",
                ],
                [
                    'user_id'=> rand($low,$high),
                    'designation_id'=>$campusDesignation->id,
                    'election_id' => $campus->id,
                    'image' =>"https://www.w3schools.com/howto/img_avatar.png",
                ],  
             
    
            ]);

        }


    }


    
   $centralDesignations = centralDesignation::all();

   foreach($centralDesignations as $centralDesignation){
    DB::table('candidates')->insert([
        [
            'user_id'=> rand(6,$high),
            'designation_id'=>$centralDesignation->id,
            'election_id' => 5,
            'image' =>"https://www.w3schools.com/howto/img_avatar.png",
        ],
        [
            'user_id'=> rand(6,$high),
            'designation_id'=>$centralDesignation->id,
            'election_id' => 5,
            'image' =>"https://www.w3schools.com/howto/img_avatar.png",
        ],
        [
            'user_id'=> rand(6,$high),
            'designation_id'=>$centralDesignation->id,
            'election_id' => 5,
            'image' =>"https://www.w3schools.com/howto/img_avatar.png",
        ],
        [
            'user_id'=> rand(6,$high),
            'designation_id'=>$centralDesignation->id,
            'election_id' => 5,
            'image' =>"https://www.w3schools.com/howto/img_avatar.png",
        ],  
     

    ]);
    }
    return candidate::all();


});