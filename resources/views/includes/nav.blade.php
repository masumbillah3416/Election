
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


<nav class="navbar   ">
	<span class="navbar-brand mb-0 h1 "> <a href="{{ route('home') }}" class="text-light"> <h1>Election 2020</h1></a></span>
	
<div>
	@guest
	<a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
	@else
	<a class="dropdown-item text-light	 border border-light" href="{{ route('logout') }}"
	onclick="event.preventDefault();
				  document.getElementById('logout-form').submit();">
	 {{ __('Logout') }}
 </a>
	@endguest
</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>

</div>