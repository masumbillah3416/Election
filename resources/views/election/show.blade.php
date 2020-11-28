
@extends('includes.app')
@section('content')














@foreach ( $designations as  $designation)

@php

$inValidVote = App\vote::where('designation_id',$designation->id)->where('election_id',$election->id)->where('user_id',Auth::user()->id)->first();
  
@endphp     
@if( ! isset($inValidVote->designation_id))




    <section class="container pt-4">
        <nav class="navbar navbar-light bg-abasas-dark">
            <h4 class=" text-light">{{ $designation->name }}</h4>
        </nav>

        <div class="row p-4">

@foreach ($election->candidates as $candidate)
@if($designation->id == $candidate->designation_id )
            <div class="col-md-3 col-12 p-4 " >
                <div class="card"  >
                    <img class="card-img-top" src="{{ asset( $candidate->image) }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        
                <div class="card-title">{{ $candidate->user->name }}</div>
            @if($election->id ==5)
                        <p class="card-text small">{{ $candidate->user->campus->name   }}</p>
            @endif


                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <form action="{{ route('votes.store') }}" method="post">
                                @csrf
                                <input type="text" name="candidate_id" value="{{ $candidate->id }}"  hidden>
                                <input type="text" name="designation_id" value="{{ $designation->id }}"  hidden>
                                <input type="text" name="election_id" value="{{ $election->id }}"  hidden>
                                <input class="btn bg-abasas-dark" type="submit" value="Vote">
                            </form>
                        
                        </div>

                    </div>
                </div>
            </div>

    @endif   
@endforeach 

        </div>





    </section>
@endif
    @endforeach

    
@endsection