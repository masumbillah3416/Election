@extends('admin.includes.app')


@section('content')

 <div class="card shadow mb-4">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList ">Election Of {{ $center }}</span> </div>

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
                        <th> Image</th>

                        <th>Name</th>
                        <th>Campus</th>
                        <th>Votes</th>

                    </tr>
                </thead>
                <tfoot class="bg-abasas-dark">
                    <tr>

                        <th> #</th>
                        <th> Image</th>

                        <th>Name</th>
                        <th>Campus</th>
                        <th>Votes</th>

                    </tr>

                </tfoot>

                <tbody>

                    @php
                    $itr=1;
                    $id = $designation->id;
                    @endphp
                    @if (isset($candidates[$id]))
                        
                    @foreach ($candidates[$id] as $candidate)


                    <tr class="data-row">
                        <td class="iteration">{{$itr++}}</td>
                        <td class="word-break">{{ $candidate->image}}</td>
                        <td class="word-break">{{ $candidate->user->name }}</td>
                        <td class="word-break">{{ $candidate->center->name }}</td>
                        <td class="word-break">{{ $candidate->votes_count }}</td>


                  


                    </tr>
                    @endforeach
                    @endif

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