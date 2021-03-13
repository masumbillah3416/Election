@extends('includes.app')



@section('content')

    {{--
    <section data-black-overlay="7">

        <img src="{{ asset('img/bg.png') }}" alt="election" width="100%">

    </section> --}}






@if($central->status==1)
    <section class="container pt-4 border border-dark rounded mt-4 mb-4">
        <nav class="navbar navbar-light bg-abasas-dark border p-3  rounded">
            <h4 class=" text-light">কেন্দ্রীয় নির্বাচন</h4>
        </nav>

        <div class="row p-4">




            <ul class="nav flex-column">
                <li class="nav-item"><br />
                    <p>করোনাকালে থেমে থাকবে না নির্বাচন। করোনা পরিস্থিতিতে ভোট গ্রহন হবে অনলাইনে।  এখানে যেমন প্রার্থীদের ক্ষেত্রে নিয়মাবলী রয়েছে,
                        তেমনই ভোটারদের ক্ষেত্রেও একাধিক নিয়ম ও শর্তাবলি রয়েছে।</p>
                    <br />
                    <p><em><strong>এক নজরে অনলাইন নির্বাচনের নিয়মাবলী -- </strong></em></p> 
                    <ul>
                        <li> ভোট দেওয়া শুরু করার জন্য "start"  বাটনে ক্লিক করুন </li>
                        <li> নির্দিষ্ট সময়ের মধ্যে ভোট প্রদান করুন </li>
                        <li> এক জন ভোটার প্রত্যেকটি পদে শুধুমাত্র একবার ই ভোট দিতে পারবে </li>
                        <li>কোন প্রার্থীকে ভোট দিতে হলে "Vote" বাটনে ক্লিক করুন </li>
                        <li> একবার "vote" বাটনে ক্লিক করলে ভোট পরিবর্তনের কোন সু্যোগ থাকবে না  </li>
                        
                    </ul>
                </li>
            </ul>


            <div style=" margin: 0 0  auto auto ;">
                <a href="{{ route('electionsView') }}?id=5" class="btn btn-success p-2 pl-4 pr-4 "> Start</a>
            </div>
        </div>





    </section>
    @endif





    @if($campus->status==1)

    <section class="container pt-4 border border-dark  rounded mt-4 mb-4">
        <nav class="navbar navbar-light bg-abasas-dark border p-3  rounded ">
            <h4 class=" text-light">  {{ $campus->name }} </h4>
        </nav>

        <div class="row p-4">




            <ul class="nav flex-column">
                <li class="nav-item"><br />
                    <p>করোনাকালে থেমে থাকবে না নির্বাচন। করোনা পরিস্থিতিতে ভোট গ্রহন হবে অনলাইনে।  এখানে যেমন প্রার্থীদের ক্ষেত্রে নিয়মাবলী রয়েছে,
                        তেমনই ভোটারদের ক্ষেত্রেও একাধিক নিয়ম ও শর্তাবলি রয়েছে।</p>
                    <br />
                    <p><em><strong>এক নজরে অনলাইন নির্বাচনের নিয়মাবলী -- </strong></em></p> 
                    <ul>
                        <li> ভোট দেওয়া শুরু করার জন্য "start"  বাটনে ক্লিক করুন </li>
                        <li> নির্দিষ্ট সময়ের মধ্যে ভোট প্রদান করুন </li>
                        <li> এক জন ভোটার প্রত্যেকটি পদে শুধুমাত্র একবার ই ভোট দিতে পারবে </li>
                        <li>কোন প্রার্থীকে ভোট দিতে হলে "Vote" বাটনে ক্লিক করুন </li>
                        <li> একবার "vote" বাটনে ক্লিক করলে ভোট পরিবর্তনের কোন সু্যোগ থাকবে না  </li>
                        
                    </ul>
                </li>
            </ul>


            <div style=" margin: 0 0  auto auto ;">
                <a href="{{ route('electionsView')}}?id={{ $campus->id }}" class="btn btn-success p-2 pl-4 pr-4 "> Start</a>
            </div>
        </div>





    </section>

@endif




    {{--
    <section class="container pt-4">
        <nav class="navbar navbar-light bg-abasas-dark">
            <h4 class=" text-light">President</h4>
        </nav>

        <div class="row p-4">



            <div class="col-md-3 col-sm-12 p-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/khan.JPG') }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up </p>
                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <a href="#" class="btn bg-abasas-dark  ">vote</a>
                        </div>

                    </div>
                </div>
            </div>




            <div class="col-md-3 col-sm-12 p-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/khan.JPG') }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up </p>
                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <a href="#" class="btn bg-abasas-dark  ">vote</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-12 p-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/khan.JPG') }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up </p>
                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <a href="#" class="btn bg-abasas-dark  ">vote</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-12 p-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/khan.JPG') }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up </p>
                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <a href="#" class="btn bg-abasas-dark  ">vote</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-12 p-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/khan.JPG') }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up </p>
                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <a href="#" class="btn bg-abasas-dark  ">vote</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-12 p-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/khan.JPG') }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up </p>
                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <a href="#" class="btn bg-abasas-dark  ">vote</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-12 p-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/khan.JPG') }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up </p>
                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <a href="#" class="btn bg-abasas-dark  ">vote</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-12 p-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/khan.JPG') }}" alt="Card image cap" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up </p>
                    </div>
                    <div class="card-footer ">
                        <div style=" margin: 0 auto;">
                            <a href="#" class="btn bg-abasas-dark  ">vote</a>
                        </div>

                    </div>
                </div>
            </div>






        </div>





    </section> --}}





   
@endsection
