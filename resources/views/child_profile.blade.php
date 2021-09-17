@extends('profile')

@section('title', 'profile')

@section('header')
<div class="tm-top-header">
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
              <li><a href="http://127.0.0.1:8000/home">Home</a></li>
              <li><a href="http://127.0.0.1:8000/profile" class="active" >Profile</a></li>
            </ul>
          </nav>   
        </div>           
      </div>    
    </div>
  </div>
  <section class="tm-welcome-section">
    <div class="container tm-position-relative">
      <div class="tm-lights-container">
        <img src="{{ asset('cafe/img/light.png') }}" alt="Light" class="light light-1">
        <img src="{{ asset('cafe/img/light.png') }}" alt="Light" class="light light-2">
        <img src="{{ asset('cafe/img/light.png') }}" alt="Light" class="light light-3">  
      </div>        
      <div class="row tm-welcome-content">
        <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{ asset('cafe/img/header-line.png') }}" 
            alt="Line" class="tm-header-line">&nbsp; Profile &nbsp;&nbsp;<img src="{{ asset('cafe/img/header-line.png') }}" 
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
<section class="tm-section row">
<div class="col-lg-12 tm-section-header-container margin-bottom-30">
    <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('cafe/img/logo.png') }}" 
    alt="Logo" class="tm-site-logo"> My Profile</h2>
    <div class="tm-hr-container"><hr class="tm-hr"></div>
</div>
<div>
    <div class="col-lg-3 col-md-3">
        <div class="tm-position-relative margin-bottom-30">              
        <nav class="tm-side-menu">
            <ul>
            <li><a href="#">Biodata</a></li>
            <li><a href="#">Pendidikan</a></li>
            <li><a href="#">Contact Dan Sosial Media</a></li>
            </ul>              
        </nav>    
        <img src="{{ asset('cafe/img/vertical-menu-bg.png') }}" alt="Menu bg" class="tm-side-menu-bg">
        </div>  
    </div>  
<div>         
<div class="tm-menu-product-content col-lg-9 col-md-9"> <!-- menu content -->
<div class="tm-product">
  <img src="{{ asset('cafe/img/menu-1.jpg') }}" alt="Product">
  <div class="tm-product-text">
  <h3 class="tm-product-title"><img src="{{ asset('cafe/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Biodata</h3>
  <p class="tm-product-description">
      <b>Nama :</b> Ichsani Nikken Rahmawati<p><p>
      <b>Alamat :</b> Dsn.Jangur Ds.Mekanderejo Kec.Kedungpring Kab.Lamongan Prov.Jawa Timur<p>
      <b>Agama :</b> Islam<p>
      <b>Tempat Lahir :</b> Lamongan<p> 
      <b>Tanggal Lahir :</b> 11, Februari 2002<p> 
      <b>Usia :</b> 19 Tahun<p> 
  <h3 class="tm-product-title"><img src="{{ asset('cafe/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Pendidikan</h3>
  <p class="tm-product-description">
      <b>Kampus :</b> Politeknik Negeri Malang<p><p>
      <b>Jurusan :</b> Teknologi Informasi<p>
      <b>Prodi :</b> D3 Manajemen Informatika<p>
      <b>Tahun Masuk :</b> 2020<p>
      <b>Kelas :</b> MI2E<p>
      <b>NIM :</b> 2031710011<p>
  <h3 class="tm-product-title"><img src="{{ asset('cafe/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Contact dan Sosial Media</h3>
  <p class="tm-product-description">
      <b>Email :</b> ichsaninikkenr@gmail.com<p><p>
      <b>Telepon :</b> 082264052082<p>
      <b>Instagram :</b> <a href=" https://www.instagram.com/ichsaniii_">@ichsaniii_</a><p>
      <b>LinkedIn :</b> <a href="https://www.linkedin.com/in/ichsani-nikken-rahmawati-bb15961b6">Ichsani Nikken Rahmawati</a><p>
      <b>Github :</b> <a href="https://github.com/ichsaninikken">ichsaninikken</a><p>     
  </div>
</div>
</div>
</div>          
</section>
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
