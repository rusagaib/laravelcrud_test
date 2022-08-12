 <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">laravelCrud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ ($title === "Customers") ? 'active' : '' }}" href="/customer">Customer</a>
      </div>
      <div class="navbar-nav ms-auto">
        @auth
        <a class="nav-link">Hello {{ auth()->user()->name }}</a>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn btn-link" style="border: none;">Logout</button> 
        </form>
        @else
        <a href="/login" class="btn btn-link">Login</a>
        @endauth
      </div>
    </div>
  </div>
</nav>


