  <!-- Main Navigation -->
<header>

<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="#">Download App <i class="fas fa-mobile-alt"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Tentang TokosTORE</a>
      </li>
    </ul>
    <a href="">Ikuti Kami Store</a>
  </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-white mt-5 fixed-top">
<div class="container">
  <a class="navbar-brand" href="#">TokoStore |</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('')}}">Produk</a>
      </li>
    </ul>
  </div>

     <form class="form-inline" action="{{url('home/filter')}}" method="post">
        @csrf
          <div class="form-group">
              <input placeholder="Cari Kategory Barang" type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
          </div>
          <button class="btn btn-outline-dark">Search</button>
        </form>
        
        <ul class="nav justify-content-end ml-4">
          <li class="nav-item">
            <a class="nav-link fas fa-cart-plus" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notifikasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bantuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}"">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar</a>
          </li>
        </ul>
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          @if(Auth::check())
          {{request()->user()->nama}}
          
          @else
          Silahkan Login
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <i class="fa fa-user"></i> Profile
          </a>
          <a href="{{url('setting')}}" class="dropdown-item">
            <i class="fa fa-cog"></i> Setting
          </a>
          <a href="{{url('logout')}}" class="dropdown-item">
            <i class="fa fa-sign-out"></i> Logout
          </a>
          <a href="{{url('daftar')}}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i> Daftar
          </a>
           
          <div class="dropdown-divider"></div>
        </div>
  </div>
</nav>

<!-- Navbar -->
<div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('public')}}/dist/img/coursel1.png" class="d-block w-100" alt="..." height="300px" width="400px">
    </div>
    <div class="carousel-item">
      <img src="{{url('public')}}/dist/img/coursel2.jpg" class="d-block w-100" alt="..." height="300px" width="400px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  

</header>

