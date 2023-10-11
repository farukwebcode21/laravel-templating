 <!--header section start -->
 <div class="header_section">
     <div class="container-fluid">
         <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
             <div class="logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}"></a></div>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('/') }}">HOME</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('shop') }}">SHOP</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('vegetable') }}">VEGETABLES</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('contactus') }}">CONTACT US</a>
                     </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon"><a href="#"><img src="{{ asset('images/search-icon.png') }}"></a></div>
                 </form>
             </div>
         </nav>
     </div>
 </div>
 <!--header section end -->
