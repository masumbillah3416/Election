
@extends('includes.app')
@section('content')











<div class="container">
    <div class="row">


@foreach ( $designations as  $designation)

@php

$inValidVote = App\vote::where('designation_id',$designation->id)->where('election_id',$election->id)->where('user_id',Auth::user()->id)->first();
  
@endphp     
@if( ! isset($inValidVote->designation_id))

    <section class="col-12 col-md-6 pt-4">
        <nav class="navbar navbar-light bg-abasas-dark">
            <h4 class=" text-light">{{ $designation->name }}</h4>
        </nav>

        <div class="row ">


            @foreach ($election->candidates as $candidate)


            @if($designation->id == $candidate->designation_id )
            <div class="col-md-6 col-12 p-2 pl-4" >

              
                

             
                
                <div class="media">
                    <img class="mr-3" src="{{ asset('image/'.$candidate->image)}}" alt="Generic placeholder image"  width="80px" height="100px" >
                    <div class="media-body">
                      <div class="small font-weight-bold">{{ $candidate->user->name }}</div>
                     
                      @if($election->id ==5)
                      
                      <div class="small"> {{ $candidate->user->campus->name   }}</div>
            @endif

                      

                      <form action="{{ route('votes.store') }}" method="post">
                        @csrf
                        <input type="text" name="candidate_id" value="{{ $candidate->id }}"  hidden>
                        <input type="text" name="designation_id" value="{{ $designation->id }}"  hidden>
                        <input type="text" name="election_id" value="{{ $election->id }}"  hidden>
                        <input class="btn btn-sm border border-dark mt-1 bg-abasas-dark " type="button" id="voteBtn" data-item-designation="{{ $designation->id }}" value="Vote">
                    </form>


                    </div>
                  </div>
                  




                {{-- <div class="card"  >
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
                </div> --}}



            </div>



    @endif   
@endforeach 

        </div>



    </section>




@endif
    @endforeach

    
@endsection


</div>
</div>