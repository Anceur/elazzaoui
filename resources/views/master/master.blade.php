<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

  <meta name="description" content=" العزاوي سكوول تعد من أولى منصات تعلم اللغات في الجزائر، متاحة للجميع، وتقدم الحل الأمثل لتعلم اللغات و بأسعار مناسبة. 
منصة واضحة ومنظَّمة مع تمارين تفاعلية تلبي احتياجاتك. 
بفضل مجموعة أساتذتنا المتميزين، سنكون شركاءك لتعلم اللغات.
 احجز دورتك الأولى الآن وانضم إلينا لتبدأ طريقك نحو إتقان اللغة." />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <meta charset="UTF-8">
  <meta name="author" content="ANCEUR Boumedienne Yassine ,BOUROKBA Mohamed Aimen , MAHTOUT Ali Missoum">
  <meta name="robots" content="">

  <!-- Preconnect to Google Fonts and other CDNs -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://unpkg.com">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="preconnect" href="https://unicons.iconscout.com">
  <link rel="preconnect" href="https://fonts.bunny.net">

  <!-- Preload essential fonts and CSS -->
  <link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
    as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap"
    as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" as="style">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Unicons CSS -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- Swiper CSS (Preload) -->
  <link rel="preload" href="https://unpkg.com/swiper/swiper-bundle.min.css" as="style">
  <link rel="preload" href="https://unpkg.com/swiper/swiper-bundle.min.js" as="script" defer>

  <!-- Manifest and local styles -->
  <link rel="manifest" href="{{ asset('manifest.json') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <link rel="stylesheet" href="{{ asset('css/playlist.css') }}">
  <link rel="stylesheet" href="{{ asset('css/videoplayer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
  <link rel="stylesheet" href="{{ asset('css/news.css') }}">


  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles

  <title>مؤسسة العزاوي</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <nav class="site-nav mb-5">


    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="{{ url('/') }}" class="logo menu-absolute m-0">
            <img rel="preload" src="{{ asset('images/logo1.png') }}" alt="Logo" id="img-logo" style="width: 90px;"
              loading="lazy">
          </a>


          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">

            <li>
              <a href="{{ url('/') }}">
                <span class="icon-home"></span>
                الصفحة الرئيسية
              </a>
            </li>



            <li>
              <a href="{{ url('/about') }}">
                <span class="icon-queue"></span>
                الخدمات
              </a>
            </li>


            <li>
              <a href="{{ url('/contact') }}">
                <span class="icon-contacts"></span>
                اتصال بنا
              </a>
            </li>
          </ul>


          <div class="float-right d-inline-block">
            <!-- Show the navigation menu if the user is logged in -->
            @auth
              @livewire('navigation-menu')
            @endauth
          </div>
          {{-- <a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">English , fr , arabic</a> --}}
          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
            data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>

  @yield('content')


  <footer class="footer-32892 pb-0">
    <div class="site-section text-align-right" style="direction: rtl;">
      <div class="container">
        <div class="row">
          <!-- About Section -->
          <div class="col-md pr-md-5 mb-4 mb-md-0">
            <h3 class="footer-heading text-center">معلومات عنا</h3>
            <ul class="list-unstyled quick-info mb-4">
              <li><a href="tel:+21346307174" class="d-flex align-items-center"><span
                    class="icon mr-3 icon-phone"></span> +213 46 30 71 74</a></li>
              <li><a href="tel:+213660979856" class="d-flex align-items-center"><span
                    class="icon mr-3 icon-phone"></span> +213 660 979 856</a></li>
              <li><a href="tel:+213660979865" class="d-flex align-items-center"><span
                    class="icon mr-3 icon-phone"></span> +213 660 979 865</a></li>
              <li><a href="mailto:contact@elazzaoui-school.com" class="d-flex align-items-center"><span
                    class="icon mr-3 icon-envelope"></span> contact@elazzaoui-school.com</a></li>
            </ul>
            <form action="#" class="subscribe">
              <input type="text" class="form-control" placeholder="أدخل بريدك الإلكتروني">
              <input type="submit" class="btn btn-submit" value="إرسال">
            </form>
          </div>

          <!-- Social Media Section -->
          <div class="col-md mb-4 mb-md-0 text-center">
            <h3 class="footer-heading">مواقع التواصل الاجتماعي</h3>
            <ul class="list-unstyled social-posts">
              <li class="d-flex justify-content-center align-items-center">
                <div class="social-icon-circle">
                  <a href="https://www.tiktok.com/@el_azzaoui_school" target="_blank"><i class="fab fa-tiktok"></i></a>
                </div>
                <div class="mr-2"><a href="https://www.tiktok.com/@el_azzaoui_school" target="_blank">تابعنا على تيك
                    توك</a></div>
              </li>
              <li class="d-flex justify-content-center align-items-center">
                <div class="social-icon-circle">
                  <a href="https://www.facebook.com/share/18mNrmTdyU/?mibextid=wwXIfr" target="_blank"><span
                      class="icon icon-facebook text-primary"></span></a>
                </div>
                <div><a href="https://www.facebook.com/share/18mNrmTdyU/?mibextid=wwXIfr" target="_blank">تابعنا على
                    فيسبوك</a></div>
              </li>
              <li class="d-flex justify-content-center align-items-center">
                <div class="social-icon-circle">
                  <a href="https://www.instagram.com/el_azzaoui_school" target="_blank"><span
                      class="icon icon-instagram text-danger"></span></a>
                </div>
                <div><a href="https://www.instagram.com/el_azzaoui_school" target="_blank">تابعنا على إنستغرام</a></div>
              </li>
            </ul>
          </div>


          <!-- Location Section -->
          <div class="col-md-3 mb-4 mb-md-0">
            <h3 class="footer-heading text-center">الموقع الجغرافي</h3>
            <img src="{{ asset('images/map.png') }}" alt="Location Map" class="img-fluid" loading="lazy">
          </div>

          <!-- Footer Menu Section -->
          <div class="col-12">
            <div class="py-5 footer-menu-wrap d-md-flex align-items-center justify-content-space-between">
              <ul class="list-unstyled footer-menu">
                <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
                <li><a href="{{ url('/about') }}">الخدمات</a></li>
                <li><a href="{{ url('/contact') }}">اتصال بنا</a></li>

              </ul>
              <div class="site-logo-wrap">
                <a href="#"><img src="./images/logo1.png" class="site-logo"></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
  <script src="{{ asset('js/popper.min.js') }}" defer></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery.fancybox.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery.sticky.js') }}" defer></script>
  <script src="{{ asset('js/aos.js') }}" defer></script>
  <script src="{{ asset('js/custom.js') }}" defer></script>
  <script src="{{ asset('js/main.js') }}" defer></script>
  <script src="{{ asset('js/scripts.js') }}" defer></script>
  <script src="{{ asset('js/scripts-dist.js') }}" defer></script>
  <script src="{{ asset('js/register.js') }}" defer></script>
  <script src="{{ asset('js/service.js') }}" defer></script>
  <script src="{{ asset('js/slider.js') }}" defer></script>
  <script src="{{ asset('js/logo-toggle.js') }}" defer></script>




  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('{{ asset('service-worker.js') }}')
          .then((registration) => {
            console.log('ServiceWorker registered with scope: ', registration.scope);
          })
          .catch((error) => {
            console.log('ServiceWorker registration failed: ', error);
          });
      });
    }
  </script>





</body>




<script>
  $(window).on('scroll', function () {
    var $logo = $("#img-logo"); // تأكد من أن الشعار يحتوي على هذا الـ ID

    if ($(window).scrollTop() > 0) {
      // عند التمرير لأسفل، تغيير الصورة إلى logo.png
      $logo.attr('src', '{{ asset('images/logo.png') }}');
    } else {
      // عند العودة إلى أعلى الصفحة، إعادة الصورة الأصلية
      $logo.attr('src', '{{ asset('images/logo1.png') }}');
    }
  });
</script>


</body>

</html>