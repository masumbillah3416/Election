@extends('admin.includes.app')


@section('content')


<div class="card shadow mb-4">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList"> Users of {{ $campus->name }}</span> </div>



        </nav>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-abasas-dark">

                    <tr>

                        <th> #</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>

                    </tr>
                </thead>
                <tfoot class="bg-abasas-dark">
                    <tr>

                        <th> #</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>

                    </tr>

                </tfoot>

                <tbody>

                    @php
                    $itr=1;
                    @endphp
                    @foreach ($users as $user)


                    <tr class="data-row">
                        <td class="iteration">{{$itr++}}</td>
                        <td class="word-break">{{ $user->name }}</td>
                        <td class="word-break">{{ $user->phone }}</td>
                        <td class="word-break">{{ $user->email }}</td>


                  


                    </tr>
                    @endforeach

                </tbody>


            </table>
        </div>
    </div>
</div>



@endsection