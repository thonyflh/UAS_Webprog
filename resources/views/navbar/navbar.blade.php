

    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
                <a class="navbar-brand" href="/">Amazing E-Grocery</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto ">
                      @auth
                      <form action="/logout" method="post">
                          @csrf
                          <button class="nav-link border-0" type="submit">Logout</button>
                      </form>
                      @else
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="/register">Register</a>
                      </li>
                      @endauth
                  </ul>
                </div>
        </div>
      </nav>

