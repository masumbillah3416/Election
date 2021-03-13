
<div
style="
  background-image: url('{{ asset('img/bg.png') }}'); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 100vh; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */

"
>


<nav class="navbar   justify-content-between navbar-expand-lg  ">



 <a href="{{ route('index') }}" class="text-light navbar-brand"> 
	
		
		{{ $election->name ??'Election 2020'  }}
	
</a></span>


	<div class="" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			@guest
			<a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
			@else
			<a class="dropdown-item text-light	 border border-light" href="{{ route('logout') }}"
			onclick="event.preventDefault();
						  document.getElementById('logout-form').submit();">
			 {{ __('Logout') }}
		 </a>
			@endguest
		  </li>
		
		</ul>
		
	  </div>



</nav>











<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>

</div>