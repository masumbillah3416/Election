<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    

		<!-- Stylesheets -->
		<link rel="stylesheet" href="{{asset('abasas/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('abasas/css/plugins.css')}}">

    <style>
                  .bg-abasas-dark {

background-color: #2a3f5c !important;
color: #fff;

}
    </style>
</head>
<body>



    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-abasas-dark">{{ __('Login') }}</div>
    
                    <div class="card-body pb-4 mb-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}

                                    
                                        </label>
                                        <label class="form-check-label" for="remember">
                                          
                                            <a class="text-danger" href="{{ route('password.request') }}"> Reset Your Password</a>
                                    
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Login') }}
                                    </button>
                               
                            
    
                                    @if (Route::has('register'))
                                    
                                    <a href="{{ route('register') }}"><button type="button" class="btn bg-abasas-dark">
                                        {{ __('Register') }}
                                    </button></a>
                                @endif

                    
                                </div>
                            </div>
                        </form>
                        
                        <br>
                        <br>
                     
                    </div>
                </div>
            </div>
            <div class="col-8 small text-danger">

                Do you need any help ?  <a href="{{ asset("pdf/voter.pdf") }}" target="_blank"> View  tutorial</a>
            </div>
        </div>
        
    </div>
    
    
    <!-- JS Files -->
    <script src="{{asset('abasas/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('abasas/js/popper.min.js')}}"></script>
    <script src="{{asset('abasas/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('abasas/js/plugins.js')}}"></script>
    
</body>
</html>




