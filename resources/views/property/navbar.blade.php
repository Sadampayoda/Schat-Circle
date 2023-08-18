<nav class="navbar navbar-expand-lg bg-body-tertiary p-3 fs-5 fixed-top " style="background:linear-gradient(to right , black , white)">
    <div class="container">
      <a class="navbar-brand text-light text-nav-shadow" href="#"><h3>Schat Circle</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-dark text-border text-center">
                <li class="nav-item">
                    @if ($page == 'Chatting')
                        <a class="nav-link text-light" aria-current="page" href="{{route('chatting')}}">Chatting</a>
                    @else
                        <a class="nav-link" aria-current="page" href="{{route('chatting')}}">Chatting</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($page == 'Update Aplikasi')
                        <a class="nav-link text-light"  href="{{route('updateApk')}}">Update</a>
                    @else
                        <a class="nav-link"  href="{{route('updateApk')}}">Update</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($page == 'Search')
                        <a class="nav-link text-light"  href="{{route('search')}}">Search</a>
                    @else
                        <a class="nav-link"  href="{{route('search')}}">Search</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($page == 'Profile')
                        <a class="nav-link text-light"  href="{{route('profile')}}">Profile</a>
                    @else
                        <a class="nav-link"  href="{{route('profile')}}">Profile</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>