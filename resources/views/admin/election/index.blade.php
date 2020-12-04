@extends('admin.includes.app')


@section('content')



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
    <ul>
        @foreach (session('success') as $message)
        <li>{{  $message }}</li>
        @endforeach
    </ul>
    @else
    {{ session('success') }}
    @endif
</div>
@endif


 <div class="card shadow mb-4">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList ">Election Of {{ $center }}</span> </div>
           
          {{-- @if($election->status) 
          
          <a href="{{ route('electionStatus') }}?id={{ $election->id }}" class="text-light"><button  class="btn btn-danger" >Stop</button></a>
          @else
             
          <a href="{{ route('electionStatus') }}?id={{ $election->id }}" class="text-light"><button  class="btn btn-success" >Start</button></a>
        
            @endif --}}

           <a href=" {{ route('candidates.index') }}"><button class="btn-lg btn-success">Add</button> </a>  
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
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot class="bg-abasas-dark">
                    <tr>

                        <th> #</th>
                        <th> Name</th>

                        <th>Designation</th>
                        <th>Campus</th>
                        <th>Votes</th>
                        <th>Action</th>

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
                        <td class="word-break"><img src="{{ asset('public/image/'.$candidate->image)}}" alt="{{ $candidate->user->name }}" height="50px" width="50px">  {{ $candidate->user->name }}</td>
                        {{-- <td class="word-break"><img src="{{asset('img/khan.JPG')}}" alt="{{ $candidate->user->name }}" height="50px">  {{ $candidate->user->name }}</td> --}}
                        <td class="word-break">{{ $designation->name }}</td>
                        <td class="word-break">{{ $candidate->user->campus->name }}</td>
                        <td class="word-break">{{ $candidate->votes_count }}</td>

<td>
                  
                        <form method="POST" action="{{ route('candidates.destroy',  $candidate->id )}} " id="delete-form-{{ $candidate->id }}" style="display:none; ">
                            {{csrf_field() }}
                            {{ method_field("delete") }}
                        </form>




                        <button onclick="if(confirm('are you sure to delete this')){
        document.getElementById('delete-form-{{ $candidate->id }}').submit();
    }
    else{
        event.preventDefault();
    }
    " class="btn btn-danger btn-sm btn-raised">
                            <i class="fa fa-trash" aria-hidden="false">

                            </i>
                        </button>

</td>
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