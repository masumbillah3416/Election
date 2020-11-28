<h1>
You are Deactived User . olease contact Campus Admin
</h1>

@guest
<a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
@else
<a class="dropdown-item text-light	 border border-light" href="{{ route('logout') }}"
onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
 {{ __('Logout') }}
</a>
@endguest