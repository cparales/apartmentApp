<nav class="navbar navbar-expand-lg navbar-light bg-primary" style = "position: fixed;top: 0;width:100%;z-index: 999;">
  <a class="navbar-brand" href="{{ route('home') }}">Apartment Market</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('listings') }}">Browse listings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('listingCreate') }}">Create item</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Log out</a>
      </li>
    </ul>
  </div>
</nav>