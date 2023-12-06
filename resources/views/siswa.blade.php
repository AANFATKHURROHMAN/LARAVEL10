@extends('layouts.main')
@section('content')
<!-- Navbar Start -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a
        href="index.html"
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
      >
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>AOUTOMOTIF</h2>
      </a>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav  p-4 p-lg-0">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../guru">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../siswa">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../blog">Garage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../user">User</a>
        </li>
        </li>
      </ul>
      </div>
    </nav>
    <!-- Navbar End --> 
<div class="container mt-3">
    <h2>Data Siswa XII RPL A</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ABSEN</th>
      <th scope="col">NAMA</th>
      <th scope="col">NISN</th>
      <th scope="col">ALAMAT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">18</th>
      <td>Atma Wijaya Kusuma</td>
      <td>0065670026</td>
      <td>Dongko</td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Arya Endsha Wira Setia</td>
      <td>0066870052</td>
      <td>Karangan</td>
    </tr>
    <tr>
      <th scope="row">06</th>
      <td>Aditya Dwi Purnomo</td>
      <td>0088178022</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Arkan Arya Reza M</td>
      <td>0066870052</td>
      <td>Suruh</td>
    </tr>
    <tr>
      <th scope="row">27</th>
      <td>Diaz Ibanez Kaka Aulia Hadi</td>
      <td>0064920982</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Alfinan Rangga Satriya</td>
      <td>0062542906</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Apriza Wahyu Setiawan</td>
      <td>0053101195</td>
      <td>Pogalan</td>
    </tr>
    <tr>
      <th scope="row">28</th>
      <td>Dimas Sunar Khalid</td>
      <td>0063837679</td>
      <td>Munjungan</td>
    </tr>
    <tr>
      <th scope="row">36</th>
      <td>Erico Kuriawan</td>
      <td>0054332385</td>
      <td>Bendungan</td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>Bagas Dwi Cahyo</td>
      <td>0066034687</td>
      <td>Pule</td>
    </tr>
  </tbody>
</table>
</div>
 <!-- Footer Start -->
 <div
      class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Address</h4>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>Trenggalek, INDONESIA
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+62 813-3050-8721
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>fatkhurrohmanaan@gmail.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Opening Hours</h4>
            <h6 class="text-light">Monday - Friday:</h6>
            <p class="mb-4">09.00 AM - 09.00 PM</p>
            <h6 class="text-light">Saturday - Sunday:</h6>
            <p class="mb-0">09.00 AM - 12.00 PM</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Services</h4>
            <a class="btn btn-link" href="">Diagnostic Test</a>
            <a class="btn btn-link" href="">Engine Servicing</a>
            <a class="btn btn-link" href="">Tires Replacement</a>
            <a class="btn btn-link" href="">Oil Changing</a>
            <a class="btn btn-link" href="">Vacuam Cleaning</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Newsletter</h4>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-0 w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                SignUp
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">AAN</a>, All
              Right Reserved.

              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By
              <a class="border-bottom" href=""
                >AAN AOUTOMOTIF</a
              >
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->
@endsection

</body>
</html>