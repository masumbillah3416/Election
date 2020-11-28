@extends('admin.includes.app')


@section('content')

 <div class="card shadow mb-4">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList ">Election Of {{ $center }}</span> </div>
           
          {{-- @if($election->status) 
          
          <a href="{{ route('electionStatus') }}?id={{ $election->id }}" class="text-light"><button  class="btn btn-danger" >Stop</button></a>
          @else
             
          <a href="{{ route('electionStatus') }}?id={{ $election->id }}" class="text-light"><button  class="btn btn-success" >Start</button></a>
        
            @endif --}}
        </nav>
    </div>
    @foreach ($designations as $designation)
    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList"> {{ $designation->name }}</span> </div>



        </nav>
    </div>
    <div class="card-body">
   
        <div class="table-responsive">
            <table class="table table-striped table-bordered DataTableTest" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-abasas-dark">

                    <tr>

                        <th> #</th>
                        <th> Name</th>

                        <th>Designation</th>
                        <th>Campus</th>
                        <th>Votes</th>

                    </tr>
                </thead>
                <tfoot class="bg-abasas-dark">
                    <tr>

                        <th> #</th>
                        <th> Name</th>

                        <th>Designation</th>
                        <th>Campus</th>
                        <th>Votes</th>

                    </tr>

                </tfoot>

                <tbody>

                    @php
                    $itr=1;
                    $id = $designation->id;
                    @endphp

        
  
             
                    {{-- @if (isset($candidates[$id])) --}}
                     
    @foreach ($candidates  as $ca)   
                    @foreach ($ca as $candidate)

                    @if($candidate->designation_id ==$designation->id )
                    <tr class="data-row">
                        <td class="iteration">{{$itr++}}</td>
                        {{-- <td class="word-break"><img src="{{ $candidate->image}}" alt="{{ $candidate->user->name }}" height="50px">  {{ $candidate->user->name }}</td> --}}
                        <td class="word-break"><img src="{{asset('img/khan.JPG')}}" alt="{{ $candidate->user->name }}" height="50px">  {{ $candidate->user->name }}</td>
                        <td class="word-break">{{ $designation->name }}</td>
                        <td class="word-break">{{ $candidate->user->campus->name }}</td>
                        <td class="word-break">{{ $candidate->votes_count }}</td>


                  


                    </tr>
                    @endif
                    @endforeach
                    {{-- @endif --}}
       
                    @endforeach   
                </tbody>


            </table>
        </div>
    </div>
    
    @endforeach
</div> 


<script>
    $(document).ready(function(){


        $('.DataTableTest').DataTable({   
                    dom: 'lBfrtip',
                    buttons: [
                        'copy', 'csv', 'excel' , 'pdf' , 'print'
                    ]
                });


    });
</script>


@endsection