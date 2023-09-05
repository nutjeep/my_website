@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
@endpush

@section('content')
  @livewire('components.navbar-secondary')

  <section class="section section-1" id="portfolios">
    <h2 class="mb-5"><span>My</span> Portfolios</h2>
    <div class="container">

      <div class="card p-3 iangillies">
        <div class="card-header">
          <img src="img/iangillies2.png" alt="portfolio-image">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3">Ian Gillies</h3>
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/alpinejs.png" class="me-2" alt="tech-stack">AlpineJS</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          <em class="mb-3">Ian Gillies is a language course institution located in Madiun, East Java, Indonesia. Which has many course programs with various languages. I developed this website using the Laravel Framework, Bootstrap, a little touch of AlpineJS and MySQL database. This website implements CRUD blog, learning program and admin can change the slider images. There is also a notification feature for testimonials sent.</em>
          <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#iangillies">Detail <i class="bi bi-eye-fill ms-1"></i></button>
          <a href="https://helloiangillies.com/" class="btn btn-outline-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>

      <div class="card p-3 iangillies">
        <div class="card-header">
          <img src="img/iangillies2.png" alt="portfolio-image">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3">Ian Gillies</h3>
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/alpinejs.png" class="me-2" alt="tech-stack">AlpineJS</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          <em class="mb-3">Ian Gillies is a language course institution located in Madiun, East Java, Indonesia. Which has many course programs with various languages. I developed this website using the Laravel Framework, Bootstrap, a little touch of AlpineJS and MySQL database. This website implements CRUD blog, learning program and admin can change the slider images. There is also a notification feature for testimonials sent.</em>
          <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#iangillies">Detail <i class="bi bi-eye-fill ms-1"></i></button>
          <a href="https://helloiangillies.com/" class="btn btn-outline-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>

      <div class="card p-3 iangillies">
        <div class="card-header">
          <img src="img/iangillies2.png" alt="portfolio-image">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3">Ian Gillies</h3>
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/alpinejs.png" class="me-2" alt="tech-stack">AlpineJS</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          <em class="mb-3">Ian Gillies is a language course institution located in Madiun, East Java, Indonesia. Which has many course programs with various languages. I developed this website using the Laravel Framework, Bootstrap, a little touch of AlpineJS and MySQL database. This website implements CRUD blog, learning program and admin can change the slider images. There is also a notification feature for testimonials sent.</em>
          <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#iangillies">Detail <i class="bi bi-eye-fill ms-1"></i></button>
          <a href="https://helloiangillies.com/" class="btn btn-outline-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
{{-- 
      <div class="card p-3 idhamperkasa">
        <div class="card-header">
          <img src="img/idhamperkasa.webp" alt="portfolio-image">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3">PT. Idham Sapta Perkasa</h3>
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/alpinejs.png" class="me-2" alt="tech-stack">AlpineJS</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          <p>PT. Idham Perkasa is a company that focuses on serving sealing systems. This website is intended as a company profile, which display the company description and company products & product categories. I developed this website using the Laravel Framework, Bootstrap, a little touch of AlpineJS and MySQL database. This website implements CRUD products, product categories, company description and database relations.</p>
          <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#idhamperkasa">Detail <i class="bi bi-eye-fill ms-1"></i></button>
          <a href="https://idhamperkasa.com/" class="btn btn-outline-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>

      <div class="card p-3 tuffiseals">
        <div class="card-header">
          <img src="img/tuffiseals.webp" alt="portfolio-image">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3">PT. Tuffiadi Semesta</h3>
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/alpinejs.png" class="me-2" alt="tech-stack">AlpineJS</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          <p>PT. Tuffiadi Semesta is a company engaged in the manufacture and distribution of seals, located in Surabaya, East Java. This website is intended as a company profile, which display the company description, company products and company services. I developed this website using the Laravel Framework, Bootstrap, a little touch of AlpineJS and MySQL database. This website implements CRUD product, company service, company contact, company description and database relations.</p>
          <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#tuffiseals">Detail <i class="bi bi-eye-fill ms-1"></i></button>
          <a href="https://tuffiseals.com" class="btn btn-outline-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>

      <div class="card p-3 kingtour">
        <div class="card-header">
          <img src="img/kingtour.webp" alt="portfolio-image">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3">King Tour Indonesia</h3>
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/jquery.png" class="me-2" alt="tech-stack">JQuery</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          <p>King Tour Indonesia is a travel agent with a wide variety of tourist destinations throughout Indonesia. This travel agent is located in Sidoarjo, East Java. I developed this website using the Laravel Framework, Bootstrap, JQuery and MySQL database. This website implements CRUD tour packages, CRUD FAQ, CRUD image slider, CRUD company clients, and partners and database relations.</p>
          <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kingtour">Detail <i class="bi bi-eye-fill ms-1"></i></button>
          <a href="https://kingtourindonesia.asia" class="btn btn-outline-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>

      <div class="card p-3 portfolio">
        <div class="card-header">
          <img src="img/yuni.webp" alt="portfolio-image">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3">Portfolio</h3>
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/php.png" class="me-2" alt="tech-stack">PHP</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/js.png" class="me-2" alt="tech-stack">Javascript</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          <p>This portfolio website belongs to one of the lecturers at Universitas Airlangga, Yuni Sari Amalia, S.S., M.A., Ph.D. She is the secretary of the Development and Planning Institute of Universitas Airlangga.  I developed this website using the PHP, Bootstrap, JQuery and MySQL database. This website implements CRUD for all content.</p>
          <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#portfolioYuni">Detail <i class="bi bi-eye-fill ms-1"></i></button>
          <a href="https://yunisariamalia.000webhostapp.com/" class="btn btn-outline-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>       
--}}

    </div>
  </section>

  <!-- Card Modals -->
  <div class="modal fade" id="iangillies" tabindex="-1" aria-labelledby="iangilliesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fs-5" id="iangilliesLabel">Ian Gillies</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/alpinejs.png" class="me-2" alt="tech-stack">AlpineJS</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          <em>Ian Gillies is a language course institution located in Madiun, East Java, Indonesia. Which has many course programs with various languages. I developed this website using the Laravel Framework, Bootstrap, a little touch of AlpineJS and MySQL database. This website implements CRUD blog, learning program and admin can change the slider images. There is also a notification feature for testimonials sent.</em>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn text-dark" data-bs-dismiss="modal">Close</button>
          <a href="https://helloiangillies.com/" class="btn btn-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="idhamperkasa" tabindex="-1" aria-labelledby="idhamperkasaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fs-5" id="idhamperkasaLabel">PT. Idham Sapta Perkasa</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/alpinejs.png" class="me-2" alt="tech-stack">AlpineJS</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          PT. Idham Perkasa is a company that focuses on serving sealing systems. I developed this website using the Laravel Framework, Bootstrap, a little touch of AlpineJS and MySQL database. This website implements CRUD products, product categories, company description and database relations.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn text-dark" data-bs-dismiss="modal">Close</button>
          <a href="https://idhamperkasa.com/" class="btn btn-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tuffiseals" tabindex="-1" aria-labelledby="tuffisealsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fs-5" id="tuffisealsLabel">PT. Tuffiadi Semesta</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/jquery.png" class="me-2" alt="tech-stack">JQuery</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          PT. Tuffiadi Semesta is a company engaged in the manufacture and distribution of seals, located in Surabaya, East Java. This website is intended as a company profile, which display the company description, company products and company services.I developed this website using the Laravel Framework, Bootstrap, a little touch of AlpineJS and MySQL database. This website implements CRUD product, company service, company contact, company description and database relations.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn text-dark" data-bs-dismiss="modal">Close</button>
          <a href="https://tuffiseals.com" class="btn btn-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="kingtour" tabindex="-1" aria-labelledby="kingtourLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fs-5" id="kingtourLabel">King Tour Indonesia</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/laravel.png" class="me-2" alt="tech-stack">Laravel</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/jquery.png" class="me-2" alt="tech-stack">JQuery</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          King Tour Indonesia is a travel agent with a wide variety of tourist destinations throughout Indonesia. This travel agent is located in Sidoarjo, East Java. I developed this website using the Laravel Framework, Bootstrap, JQuery and MySQL database. This website implements CRUD tour packages, CRUD FAQ, CRUD image slider, CRUD company clients, and partners and database relations.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn text-dark" data-bs-dismiss="modal">Close</button>
          <a href="https://kingtourindonesia.asia" class="btn btn-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="portfolioYuni" tabindex="-1" aria-labelledby="portfolioYuniLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fs-5" id="portfolioYuniLabel">Portfolio</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex mb-3 parent-tech-stack">
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/php.png" class="me-2" alt="tech-stack">PHP</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/js.png" class="me-2" alt="tech-stack">Javascript</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/bootstrap.png" class="me-2" alt="tech-stack">Bootstrap</span>
            <span class="tech-stack py-1 px-2"><img src="img/tech-stack/mysql.png" class="me-2" alt="tech-stack">MySQL</span>
          </div>
          This portfolio website belongs to one of the lecturers at Universitas Airlangga, Yuni Sari Amalia, S.S., M.A., Ph.D. She is the secretary of the Development and Planning Institute of Universitas Airlangga.  I developed this website using the PHP, Bootstrap, JQuery and MySQL database. This website implements CRUD for all content.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn text-dark" data-bs-dismiss="modal">Close</button>
          <a href="https://yunisariamalia.000webhostapp.com" class="btn btn-primary" target="_blank">Preview <i class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
    </div>
  </div>
@endsection