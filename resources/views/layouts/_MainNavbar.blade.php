<nav class="teal accent-3" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="{{ url('/')}}" class="brand-logo">Amita</a>
    <ul class="right hide-on-med-and-down">
    @if(Auth::check())
      <li>
        <a class='dropdown-trigger' href='#' data-target='dropdown2'>For sell</a>
        <!-- Dropdown Structure -->
        <ul id='dropdown2' class='dropdown-content'>
          <li>
            <a href="{{ action('CommerceController@create') }}">ตั้งขายสินค้า</a>
          </li>
          <li>
            <a href="{{ action('CommerceController@index')}}">รายงานการขาย</a>
          </li>
        </ul>
      </li>
      <li><a href="{{ action('ProfileController@index')}}"> Store </a></li>
    @endif
      <li><a href="{{ action('ShopsController@index')}}"> Market </a></li>
      <li>
        <a class='dropdown-trigger' href='#' data-target='dropdown1'>{{ Auth::user()->name }}</a>

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          <li>
            <a href="{{ route('logout') }}" 
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
          <li>
            <a href="{{ url('/home')}}"> Formal Home </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>