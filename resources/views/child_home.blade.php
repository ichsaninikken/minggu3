@extends('home')

@section('title', 'home')

@section('header')
<div class="container">
  <div class="row">
    <div class="tm-top-header-inner">
            <div class="tm-logo-container">
                <img src="{{ asset('cafe/img/logo.png') }}" alt="Logo" class="tm-site-logo">
                <h1 class="tm-site-name tm-handwriting-font">Paradise Cafe</h1>
            </div>
            <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
                <ul>
                <li><a href="http://127.0.0.1:8000/home" class="active">Home</a></li>
                <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
                </ul>
            </nav>   
        </div>           
    </div>    
</div>
@endsection

@section('sidebar')
@parent
    <li class="has-subnav">
      <a href="#">
        <i class="fa fa-instagram"></i>
          <span class="nav-text">
              Social Media
          </span>
      </a>
    </li>
  </ul>
  <ul class="logout">
    <li>
      <a href="http://127.0.0.1:8000/home">
        <i class="fa fa-power-off fa-2x"></i>
        <span class="nav-text">
            Logout
        </span>
      </a>
    </li>  
  </ul>
</nav>
</div>  
@endsection

@section('content')
<div class="tm-lights-container">
  <img src="{{ asset('cafe/img/light.png') }}" alt="Light" class="light light-1">
  <img src="{{ asset('cafe/img/light.png') }}" alt="Light" class="light light-2">
  <img src="{{ asset('cafe/img/light.png') }}" alt="Light" class="light light-3">  
</div>        
<div class="row tm-welcome-content">
<h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{ asset('cafe/img/header-line.png') }}" 
    alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="{{ asset('cafe/img/header-line.png') }}" 
    alt="Line" class="tm-header-line"></h2>
<h2 class="gold-text tm-welcome-header-2">Paradise Cafe</h2>
<p class="gray-text tm-welcome-description">Paradise Cafe adalah salah satu cafe ternama dikota 
  <span class="gold-text">Malang</span> provinsi <span class="gold-text">Jawa Timur</span>. 
  Cafe ini menyediakan banyak minuman dan makanan yang sangat lezat. Selain Minuman dan Makanan, Paradise Cafe
  juga menyediakan aneka macam Ice Cream. Kue-kue yang tersedia di Paradise Cafe ini sangat unik dan lezat</p>
<a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>      
</div>
<img src="{{ asset('cafe/img/table-set.png') }}" alt="Table Set" class="tm-table-set img-responsive">             
</div>      
</section>
<div class="tm-main-section light-gray-bg">
<div class="container" id="main">
<section class="tm-section row">
<div class="col-lg-9 col-md-9 col-sm-8">
  <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
  <h2>Paradise Cafe</h2>
  <p class="tm-welcome-description">Minuman-minuman di Paradise Cafe ini sangat terkenal
    karena, semua kopi yang ada di Paradise Cafe ini sangat <span class="blue-text">Berkualitas</span> dan
    <span class="blue-text">Beranekaragam</span>. Kami selalu menyajikan kopi-kopi 
    kami dengan desain yang menarik juga, contohnya adalah capuccino latte, americano latte, macchiato dan cortado</p>
  <a href="#" class="tm-more-button margin-top-30">Read More</a> 
</div>
<div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
  <div class="inline-block shadow-img">
    <img src="{{ asset('cafe/img/1.jpg') }}" alt="Image" class="img-circle img-thumbnail">  
  </div>              
</div>            
</section>          
<section class="tm-section tm-section-margin-bottom-0 row">
<div class="col-lg-12 tm-section-header-container">
  <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('cafe/img/logo.png') }}" 
  alt="Logo" class="tm-site-logo"> Popular Items</h2>
  <div class="tm-hr-container"><hr class="tm-hr"></div>
</div>
<div class="col-lg-12 tm-popular-items-container">
  <div class="tm-popular-item">
    <img src="{{ asset('cafe/img/popular-1.jpg') }}" alt="Popular" class="tm-popular-item-img">
    <div class="tm-popular-item-description">
      <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">
        H</span>ot Chocolate</h3><hr class="tm-popular-item-hr">
      <p>Hot Chocolate adalah minuman panas yang dibuat dari cokelat atau kakao bubuk dan gula, dengan air atau susu hangat</p>
      <div class="order-now-container">
        <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
      </div>
    </div>              
  </div>
  <div class="tm-popular-item">
    <img src="{{ asset('cafe/img/popular-2.jpg') }}" alt="Popular" class="tm-popular-item-img">
    <div class="tm-popular-item-description">
      <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">
        R</span>ed Velvet Cake</h3><hr class="tm-popular-item-hr">
      <p>Red Velvet Cake adalah bolu lapis coklat berwarna merah, coklat kemerahan, atau kemerahan, 
        yang dilapisi dengan keju krim putih</p>
      <div class="order-now-container">
        <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
      </div>
    </div>              
  </div>
  <div class="tm-popular-item">
    <img src="{{ asset('cafe/img/popular-3.jpg') }}" alt="Popular" class="tm-popular-item-img">
    <div class="tm-popular-item-description">
      <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">
        I</span>ce Cream</h3><hr class="tm-popular-item-hr">
      <p>Ice Cream sebuah makanan beku dibuat dari produk susu seperti krim, digabungkan dengan perasa dan pemanis 
        buatan ataupun alami </p>
      <div class="order-now-container">
        <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
      </div>
    </div>              
  </div>
</div>          
</section>
<section class="tm-section row">
<div class="col-lg-12 tm-section-header-container">
  <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('cafe/img/logo.png') }}" alt="Logo" 
  class="tm-site-logo"> Today's Special</h2>
  <div class="tm-hr-container"><hr class="tm-hr"></div>
</div>          
<div class="col-lg-12 tm-special-container margin-top-60">
  <div class="tm-special-container-left"> <!-- left -->
    <div class="tm-special-item">
      <div class="tm-special-img-container">
        <img src="{{ asset('cafe/img/special-1.jpg') }}" alt="Special" class="tm-special-img img-responsive">  
        <a href="#">
          <div class="tm-special-description">
            <h3 class="tm-special-title">Capuccino Latte</h3>
            <p>Perpaduan antara kopi dengan susu yang sangat nikmat</p>  
          </div>            
        </a>
      </div>
    </div>
  </div>
  <div class="tm-special-container-right"> <!-- right -->
    <div>
      <div class="tm-special-item">
        <div class="tm-special-img-container">
          <img src="{{ asset('cafe/img/special-2.jpg') }}" alt="Special" class="img-responsive">  
          <a href="#">
            <div class="tm-special-description">
              <h3 class="tm-special-title">Oreo Cheese Cake</h3>
              <p>Perpaduan antara kue dengan keju dan oreo</p>
            </div>
          </a>
        </div>
      </div>  
    </div>
    <div class="tm-special-container-lower">
      <div class="tm-special-item">
        <div class="tm-special-img-container">
          <img src="{{ asset('cafe/img/special-3.jpg') }}" alt="Special" class="img-responsive">  
          <a href="#">
            <div class="tm-special-description">
              <p>Lemon Tea</p>
            </div>
          </a>
        </div>
      </div>
      <div class="tm-special-item">
        <div class="tm-special-img-container">
          <img src="{{ asset('cafe/img/special-4.jpg') }}" alt="Special" class="img-responsive">  
          <a href="#">
            <div class="tm-special-description">
              <p>Strawberry Waffle</p>
            </div>
          </a>
        </div>
      </div>  
    </div>              
  </div>
</div>
</section>
<section class="tm-section">
<div class="row">
  <div class="col-lg-12 tm-section-header-container">
    <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('cafe/img/logo.png') }}" 
    alt="Logo" class="tm-site-logo"> Daily Menu</h2> 
    <div class="tm-hr-container"><hr class="tm-hr"></div> 
  </div>  
</div>          
<div class="row">
  <div class="tm-daily-menu-container margin-top-60">
    <div class="col-lg-4 col-md-4">
      <img src="{{ asset('cafe/img/menu-board.png') }}" alt="Menu board" class="tm-daily-menu-img">      
    </div>            
    <div class="col-lg-8 col-md-8">
      <p>Paradise Cafe menyediakan aneka ragam menu baik itu makan dan minuman. Kami juga 
        memberikan pelayanan secara maksimal agar para customer kami merasa puas. 
        Berikut adalah macam - macam menu yang tersedia di Paradise Cafe :</p>
      <ol class="margin-top-30">
        <li>Kopi (Cappuccino, Americano, Espresso, Macchiato dan Mocca Latte)</li> 
        <li>Ice cream(Strawberry, Chocolate, Cheese dan Vanilla)</li>
        <li>Waffle dengan berbagai ukuran</li> 
        <li>Cake(Red velvet, Chocolate, Rainbow Cake, Brownise Cake, dll)</li> 
        <li>Lemon tea</li> 
        <li>Jus buah segar(Avocado, Strawberry, Melon, Buah Naga, Apel, Pir, dll)</li> 
      </ol>
      <a href="#" class="tm-more-button margin-top-30">Read More</a>    
    </div>
</div>
@endsection

@section('footer')
<div class="container">
  <div class="row margin-bottom-60">
    <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
      <h3 class="tm-footer-div-title">Main Menu</h3>
      <ul>
        <li><a href="http://127.0.0.1:8000/home">Home</a></li>
        <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
        <li><a href="#">Directory</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Our Services</a></li>
      </ul>
    </nav>
    <div class="col-lg-5 col-md-5 tm-footer-div">
      <h3 class="tm-footer-div-title">About Us</h3>
      <p class="margin-top-15">Paradise Cafe adalah salah satu cafe ternama dikota Malang Provinsi Jawa Timur. 
        Cafe ini menyediakan banyak minuman dan makanan yang sangat lezat.</p>
      <p class="margin-top-15"> 
        Selain Minuman dan Makanan, Paradise Cafe juga menyediakan aneka macam Ice Cream. 
        Kue-kue yang tersedia di Paradise Cafe ini sangat unik dan lezat</p>
    </div>
    <div class="col-lg-4 col-md-4 tm-footer-div">
      <h3 class="tm-footer-div-title">Get Social</h3>
      <p>Untuk informasi lebih lanjut, customer dapat melihat beberapa sosial media yang ada.</p>
      <div class="tm-social-icons-container">
        <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
        <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
        <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
        <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
      </div>
    </div>
  </div>          
</div>  
</div>      
<div>
<div class="container">
  <div class="row tm-copyright">
    <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2021 Your Paradise Cafe</p>
  </div>  
</div>
@endsection
