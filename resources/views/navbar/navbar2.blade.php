<ul class="navbar-nav" style="background-color: #e3f2fd;">
        <div class="d-flex justify-content-evenly">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/order/{{Auth::user()->id}}">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/profile">Profile</a>
          @auth
              @if (Auth::user()->role_id == 2)
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/manage">Account maintenance</a>
                </li>
              @endif
          @endauth
        </li>
    </div>
</ul>
