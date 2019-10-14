<nav class="teal accent-3" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="{{ url('/')}}" class="brand-logo">Amita</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{ action('CommerceController@index')}}"> For sell </a></li>
      <li><a href="{{ action('ProfileController@index')}}"> Store </a></li>
      <li><a href="{{ action('ShopsController@index')}}"> Market </a></li>
      <li>
        <a href="#" style="display:inline"> UserName </a>
      </li>
    </ul>

    <ul id="nav-mobile" class="sidenav">
      <li><a href="{{ action('CommerceController@index')}}"> For sell </a></li>
      <li><a href="{{ action('ProfileController@index')}}"> Store </a></li>
      <li><a href="{{ action('ShopsController@index')}}"> Market </a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger light-green"><i class="material-icons">menu</i></a>
  </div>
</nav>