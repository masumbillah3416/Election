
@extends('admin.includes.app')

@section('content')


<table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User</th>
        <th scope="col">Candidate</th>
        <th scope="col">Time</th>
      </tr>
    </thead>
    <tbody>
 
        @php
            $i=1;
        @endphp
        @foreach ($votes as $vote )
            
        <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $vote->user->email }}</td>
        <td>{{ $vote->candidate->user->name }}</td>
       
        <td>{{ $vote->created_at->format("h : i : s") }}</td>
      </tr>
        @endforeach

      
    </tbody>
  </table>

  
@endsection