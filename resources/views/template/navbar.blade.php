<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Paper Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0 me-auto">
          <li class="nav-item">
            <a class="nav-link @if ($page_title == 'home') active text-dark @endif" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if ($page_title == 'papers') active text-dark @endif" href="/papers">Paper</a>
          </li>           
        
        </ul>
        
        <ul class="navbar-nav" align="right">
            <li class="nav-item">
              @auth
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person"></i> {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/users/{{ auth()->user()->username }}"><i class="bi bi-newspaper"></i> My Paper</a></li>
                  <li><a class="dropdown-item" href=""><i class="bi bi-paperclip"></i> Upload Paper</a></li>
                  <li><a class="dropdown-item" href="/logout" onclick="return confirm('Are you sure?')"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                </ul>
              </div>
              @else 
              <a class="nav-link " align="right" href="/login">Login</a>

              @endauth
            </li>
        </ul>


      </div>
    </div>
  </nav>


