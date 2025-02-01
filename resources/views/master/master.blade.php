<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="shortcut icon" href="favicon.png">

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

  <title>مدرسة العزاوي</title>
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
    <div class="pb-2 top-bar mb-3">
      <div class="container" style="display: flex;justify-content:space-between;">
        {{--
        <div class="phone-icon-container" style="text-align: right;">
          <i class="fas fa-phone" id="phone-icon" style="color: #fff; cursor: pointer; font-size: 20px;"></i>
          <div class="phone-dropdown" id="phone-dropdown"
            style="display: none; background-color: #fff; border: 1px solid #ccc; position: absolute;">
            <p><a href="tel:+1234567890">+1 234 567 890</a></p>
            <p><a href="tel:+9876543210">+9 876 543 210</a></p>
            <p><a href="tel:+1122334455">+1 122 334 455</a></p>
          </div>
        </div> --}}

        <div class="date-container" style="text-align: left">
          <span style="right: 0; padding-right: 20px; color: #fff; font-size: 14px; font-weight: light;"
            id="current-date"></span>
        </div>

      </div>
    </div>

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
              <a href="{{ url('/news') }}">
                <span class="icon-subject"></span>
                إختبار المستوى اللغوي
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


            @guest
        <li>
          <a href="{{ url('/login') }}">
          <span class="icon-lock"></span>
          تسجيل الدخول
          </a>
        </li>


        <li>
          <a href="{{ url('/register') }}">
          <span class="icon-person"></span>
          يسجل
          </a>
        </li>
      @endguest
            <!-- Settings Dropdown -->
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
    <div class="site-section">
      <div class="container">


        <div class="row">

          <div class="col-md pr-md-5 mb-4 mb-md-0">
            <h3>معلومات عنا</h3>
            <p class="mb-4 text-align-right">نحن مدرسة خاصة تركز على تقديم تعليم متميز يجمع بين التميز الأكاديمي
              والابتكار. نقدم برامج متنوعة تشمل المواد الأساسية والدورات الخاصة.</p>
            <ul class="list-unstyled quick-info mb-4">
              <li><a href="tel:+21346307174" class="d-flex align-items-center">
                  <span class="icon mr-3 icon-phone"></span> +213 46 30 71 74</a></li>
              <li><a href="tel:+213660979856" class="d-flex align-items-center">
                  <span class="icon mr-3 icon-phone"></span> +213 660 979 856</a></li>
              {{-- <li><a href="tel:+213660979857" class="d-flex align-items-center">
                  <span class="icon mr-3 icon-phone"></span> +213 660 979 857</a></li> --}}
              <li><a href="tel:+213660979865" class="d-flex align-items-center">
                  <span class="icon mr-3 icon-phone"></span> +213 660 979 865</a></li>
              <li><a href="mailto:contact@elazzaoui-school.com" class="d-flex align-items-center">
                  <span class="icon mr-3 icon-envelope"></span> contact@elazzaoui-school.com</a></li>
            </ul>

            <form action="#" class="subscribe">
              <input type="text" class="form-control" placeholder="أدخل بريدك الإلكتروني">
              <input type="submit" class="btn btn-submit" value="إرسال">
            </form>
          </div>
          <div class="col-md mb-4 mb-md-0 text-center">
            <h3>مواقع التواصل الاجتماعي</h3>
            <ul class="list-unstyled social-posts">
              <li class="d-flex justify-content-center align-items-center">
                <div class="mr-2"><a href="https://www.tiktok.com/@el_azzaoui_school" target="_blank">تابعنا على تيك
                    توك</a>
                </div>
                <div>
                  <a href="https://www.tiktok.com/@el_azzaoui_school" target="_blank">
                    <i class="fab fa-tiktok" style="color: #000;"></i>
                  </a>
                </div>
              </li>


              <li class="d-flex justify-content-center align-items-center">
                <div class="mr-2"><a href="https://www.facebook.com/share/18mNrmTdyU/?mibextid=wwXIfr"
                    target="_blank">تابعنا على فيسبوك</a></div>
                <div><a href="https://www.facebook.com/share/18mNrmTdyU/?mibextid=wwXIfr" target="_blank"><span
                      class="icon icon-facebook text-primary"></span></a></div>
              </li>
              <li class="d-flex justify-content-center align-items-center">
                <div class="mr-2"><a href="https://www.instagram.com/el_azzaoui_school?igsh=ZTZtOXIwbGxxYnF5"
                    target="_blank">تابعنا على
                    إنستغرام</a>
                </div>
                <div><a href="https://www.instagram.com/el_azzaoui_school?igsh=ZTZtOXIwbGxxYnF5" target="_blank"><span
                      class="icon icon-instagram text-danger"></span></a></div>
              </li>
            </ul>
          </div>



          <div class="col-md-3 mb-4 mb-md-0">
            <h3>الموقع الجغرافي</h3>
            <img href="#"><img src="{{ asset('images/map.png') }}" alt="Image" class="img-fluid" loading="lazy"></img>
          </div>

          <div class="col-12">
            <div class="py-5 footer-menu-wrap d-md-flex align-items-center">
              <ul class="list-unstyled footer-menu mr-auto">
                <li><a href="#">الصفحة الرئيسية</a></li>
                <li><a href="#">إختبار المستوى اللغوي</a></li>
                <li><a href="#">الخدمات</a></li>
                <li><a href="#">اتصال بنا</a></li>
                <li><a href="#">تسجيل الدخول</a></li>
                <li><a href="#">يسجل</a></li>
              </ul>
              <div class="site-logo-wrap ml-auto">
                <a href="#" class="site-logo">
                  Elazzaoui
                </a>
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