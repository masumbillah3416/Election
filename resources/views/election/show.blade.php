
@extends('includes.app')
@section('content')














@foreach ( $designations as  $designation)

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
                <a href="#" class="btn bg-abasas-dark  ">vote</a>
            </div>

        </div>
    </div>
</div>

    @endif   
@endforeach 

        </div>





    </section>

    @endforeach

    
@endsection