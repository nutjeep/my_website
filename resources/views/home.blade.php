@extends('layouts.app')

@section('content')
<div>
  <header>
    <nav>
      <div class="toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div class="nav-item">
        <div class="nav-link">
          <a class="text-decoration-none" href="#about">About</a>
        </div>
        <div class="nav-link">
          <a class="text-decoration-none" href="#tech">Tech</a>
        </div>
        <div class="nav-link">
          <a class="text-decoration-none" href="#portfolio">Portofolio</a>
        </div>
      </div>
    </nav>

    <div class="container hero">
      <div class="title" data-aos="fade-right">
        <div class="greeting">Hi! I Am</div>
        <h1>
          Muhammad Najib <br />
          'Abdulloh
        </h1>
        <p class="tagline">Fullstack Web Developer</p>
      </div>
      <div class="profile">
        <div class="box" style="--i: 0"></div>
        <div class="box" style="--i: 1"></div>
        <div class="box" style="--i: 2"></div>
        <div class="box" style="--i: 3"></div>
        <img src="img/profile.webp" alt="" />
      </div>
    </div>
  </header>
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" nofollow>
    <path
      fill="#e8e8e8"
      fill-opacity="1"
      d="M0,256L40,218.7C80,181,160,107,240,96C320,85,400,139,480,181.3C560,224,640,256,720,261.3C800,267,880,245,960,202.7C1040,160,1120,96,1200,74.7C1280,53,1360,75,1400,85.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
    ></path>
  </svg>

  <section class="section section-1" id="about">
    <div class="container">
      <h2 data-aos="fade-down">About</h2>
    </div>
    <div class="container content">
      <div class="raw">
        <div class="about" data-aos="zoom-in">
          <p>
            I am a fullstack developer with experience in completing various website projects for personal, business and corporate needs. As a professional, I also have work experience in several companies as a fullstack engineer and backend engineer.
          </p>
          <p>
            In developing website projects, I am committed to making the website Clean Code, User-Friendly, SOE Friendly, Responsive User Interface, and focusing on the Quality of the Final Product.
          </p>
          <p>
            Feel free to contact me if you would like to discuss a project, team collaboration, job or partnership. Contact me with media below.
          </p>
          <p><a href="pdf/CV & Portofolio Muhammad Najib Abdulloh.pdf" download>Download My CV</a></p>

          <div class="social-media mt-2 d-flex" data-aos="zoom-in-up">
            <a href="https://www.linkedin.com/in/mnajibabdulloh/" data-bs-toggle="tooltip" data-bs-title="Muhammad Najib Abdulloh">
              <i class="bi bi-linkedin text-primary"></i>
            </a>
            <a href="https://github.com/nutjeep"  data-bs-toggle="tooltip" data-bs-title="Nutjeep">
              <i class="bi bi-github text-black"></i>
            </a>
            <a href="mailto:anajibmuhammad@gmail.com" data-bs-toggle="tooltip" data-bs-title="anajibmuhammad@gmail.com">
              <i class="bi bi-envelope text-danger"></i>
            </a>
            <a href="https://www.instagram.com/abdulloh_najib/" data-bs-toggle="tooltip" data-bs-title="abdulloh_najib">
              <i class="bi bi-instagram text-warning"></i>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=6283850296250&text&type=phone_number&app_absent=0" data-bs-toggle="tooltip" data-bs-title="083850296250">
              <i class="bi bi-whatsapp text-success"></i>
            </a>
          </div>
        </div>
        <div class="image" data-aos="fade-left">
          <img src="{{ asset('img/website-creator.gif') }}" alt="Image" />
        </div>
      </div>
    </div>
  </section>

  <section class="section section-4" id="tech">
    <h2 data-aos="fade-down"><span>Tech</span> Stack</h2>
    <div class="container">
      <div class="row">
        <div class="offset-lg-2 offset-md-1 col-lg-8 col-md-10 col-sm-12">
          <div class="card p-1">
            <div class="card-body">
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/html.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">HTML</p>
              </div>
              {{-- <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/css.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">CSS</p>
              </div>
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/js.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">Javascript</p>
              </div>
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/php.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">PHP</p>
              </div>
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/jquery.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">JQuery</p>
              </div>
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/bootstrap.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">Bootstrap</p>
              </div>
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/alpinejs.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">AlpineJS</p>
              </div>
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/laravel.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">Laravel</p>
              </div>
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/livewire.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">Livewire</p>
              </div>
              <div class="tech text-center">
                <div class="icon mb-2 bg-white">
                  <img src="img/tech-stack/mysql.png" alt="tech icon">
                </div>
                <p class="fw-semibold fs-5 text-secondary">MySQL</p>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-2" id="portfolio">
    <h2 data-aos="fade-down">Recent <span>Project</span></h2>
    <div class="container swiper mySwiper" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header py-3">
              <img src="" alt="Latest Portfolio">
            </div>
            <div class="card-footer text-center">
              <div>Judul Portofolio</div>
              <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat eius sunt perferendis sit molestiae, tempore laborum officia esse soluta nostrum!</em>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4 text-center">
        <a href="{{ route('portfolio') }}" class="btn btn-primary">
          See more My Portfolio
        </a>
      </div>
    </div>
  </section>
</div>

  @push('scripts')
    <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
  @endpush
@endsection