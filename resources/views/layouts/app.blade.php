<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="M Najib 'Abdulloh - Abdi Solution" />
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="fullstack developer, backend engineer, website developer, jasa pembuatan website, jasa pembuatan website murah, surabaya, tulungagung"/>
    <meta name="description" content="Jasa pembuatan website dengan pengalaman mengerjakan berbagai jenis website untuk kebutuhan  bisnis / perusahaan Anda. Website yang responsive, seo friendly dan berorientasi kepada hasil akhir yang maksimal."/>
    <meta name="google-site-verification" content="sRhmLdQ7K5kHCD-f7VCIxFNEIKb2Aiep2oysbOQAGTI"/>
    <link rel="canonical" href="" />

    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="img/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;700&family=Ruluko&display=swap" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->

    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    @stack('styles')
    @livewireStyles
  </head>
  <body>
    
    {{-- {{ $slot }} --}}
    @yield('content')

    @livewire('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
    @livewireScripts
  </body>
</html>
