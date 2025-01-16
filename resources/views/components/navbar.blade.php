<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container ">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        @auth
          <!-- Link CRUD hanya muncul jika sudah login -->
          <li class="nav-item">
            <a class="nav-link" class="ms-auto" href="{{ route('hewan.index') }}">Crud</a>
          </li>
        @else
          <!-- Link Login jika belum login -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Crud</a>
          </li>
      </ul>
      @endauth
  </div>
</div>
</nav>
