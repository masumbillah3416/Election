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


    <div class="container">



        <div class="card mb-4 shadow">

                
            
            <form action="{{route('candidates.store')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf

                <div class="card-header py-3 bg-abasas-dark">
                    <nav class="navbar navbar-dark ">
                        <a class="navbar-brand">Add Cadndidate</a>
                        <button type="submit" id="createPostSubmit" class="btn btn-success btn-lg d-none d-md-block">
                            Submit</button>

                    </nav>
                </div>
                <div class="card-body">

                    <div class="row">

                        <div class="col-12 col-md-8">

                            <select class="form-control form-control-lg selectpicker" id="candidateSelect" name="candidate_id" value="" required>
                                <option value="">Select Candidate</option>
                                @foreach ( $users  as $user )
                                
                                <option value={{ $user->id }} >{{ $user->name }} <span class="small">-- {{ $user->campus->name_short }}</span></option>

                                @endforeach
                                    
                            </select>
                            <div class="pt-4 mt-4  p-4 bg-light ">
                                <h2 id="name" >  </h2>
                                <b  id="email" > </b> <br>
                                <b id="phone" > </b> <br>
                                <b id="campus" ></b>
                              

                            </div>


                        </div>



                        <div class="col-12 col-md-4 bg-light p-2 p-4" >


                            <div class="form-group">
                            <select class="form-control form-control-lg mt-4 " value="" name="election_id" required>
                                <option>Select Election</option>
                                @foreach ( $elections  as $election )
                                
                                <option value={{ $election->id }} >{{ $election->name }}</option>

                                @endforeach
                            </select>
                            </div>



                           
                            <div class="form-group">

                            <select class="form-control form-control-lg mt-4 "  value="" name="designation_id" required>
                                <option>Select Designation</option>
                                @foreach ( $campusDesignation  as $designation )
                                
                                <option value={{ $designation->id }} >{{ $designation->name }}</option>

                                @endforeach

                            </select>       
                            </div>                      

                            {{-- <select class="form-control form-control-lg mt-4 "  value="" name="designation_id" required>
                                <option>Select Designation</option>
                                @foreach ( $centralDesignation  as $designation )
                                
                                <option value={{ $designation->id }} >{{ $designation->name }}</option>

                                @endforeach

                            </select> --}}



                            <label for="image">Upload image <span style="color: red"> * &nbsp;</span></label><i class="fa fa-info-circle"  title="Image Resulation: 300 X 300" aria-hidden="true"></i><br>
                            {{-- <input type="file" name="image" id="image" accept=" .jpg, .jpeg" required > --}}
                            
                            <input type="file" name="file" class="form-control" accept=" .jpg, .jpeg, .png" required>

{{--                           
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image</label>
                                    <input type="file" class="form-control-file " name="image"  required>
                                  </div> --}}

                        </div>





                    </div>

                </div>
            </form>
        </div>
    </div>





@endsection


@section('customJS')
<script>

var users = @json($users);
var elections = @json($elections);
console.log(users)
    $("#candidateSelect").on('change',function(){
        var user_id = $("#candidateSelect").val().trim();


       var user = users[user_id]

       $("#name").text(user.name)
        $("#email").text("Email : "+user.email)
        $("#phone").text("Phone : "+user.phone)
        $("#campus").text("Campus : "+elections[user.campus_id].name)
    });


</script>
@endsection