<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo mr-auto"><a href="index.html"><span>Com</span>pany</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
     <a href="index.html" class="logo mr-auto"><img src="{{ asset('assets/img/logo.jpg')}}" alt="" ></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('collection.2-2') }}">Collection</a></li>          
          <li class="drop-down"><a href="">Information</a>
            <ul>
              <li><a href="{{ route('catalogue') }}">Catalogue</a></li>
              </li>
            </ul>
          </li>

          <li><a href="{{ route('export') }}">Export</a></li>
          <li><a href="{{ route('aboutUs') }}">About Us</a></li>
          <li><a href="{{ route('contactUs') }}">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header>