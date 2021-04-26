<!--navbar-->
<nav class="fixed-top navbar navbar-expand-lg navbar-light shadow-sm" style="background-image: url('/app/img/circle-blues.png');">
    <div class="container">
        <div class="container-fluid">
        <button class="navbar-toggler btn btn-success bg-white py-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-icons">menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link text-white dev" aria-current="page" href="javascript:;">Belajar</a>
            <a class="nav-link text-white dev" href="javascript:;">Ngobar</a>
            <a class="nav-link text-white dev" href="javascript:;">Diskusi</a>
            </div>
            <div class="navbar-nav ms-auto me-5">
                <dev class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-white dev" type="submit">Search</button>
                </dev>
            </div>
            <div class="navbar-nav navkotak">
                <a class="nav-item nav-link text-white" data-bs-toggle="modal" data-bs-target="#LoginModal" href="javascript:;">Login</a>
                <a class="nav-item nav-link text-white" href="{{ route('app.register_v') }}">Register</a>
            </div>
        </div>
        </div>
    </div>
  </nav>
<!--akhir navbar-->