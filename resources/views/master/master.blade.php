

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content=" العزاوي سكوول تعد من أولى منصات تعلم اللغات في الجزائر، متاحة للجميع، وتقدم الحل الأمثل لتعلم اللغات و بأسعار مناسبة. 
منصة واضحة ومنظَّمة مع تمارين تفاعلية تلبي احتياجاتك. 
بفضل مجموعة أساتذتنا المتميزين، سنكون شركاءك لتعلم اللغات.
 احجز دورتك الأولى الآن وانضم إلينا لتبدأ طريقك نحو إتقان اللغة." />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <meta charset="UTF-8">
  <meta name="author" content="ANCEUR Boumedienne Yassine ,BOUROKBA Mohamed Aimen , MAHTOUT Ali Missoum">
  <meta name="robots" content="">



  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <link rel="stylesheet" href="{{ asset('css/playlist.css') }}">
  <link rel="stylesheet" href="{{ asset('css/videoplayer.css') }}">




  
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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
      <div class="container">

          <div class="date-container" style="text-align: right">
            <span style="right: 0; padding-right: 20px; color: #fff; font-size: 14px; font-weight: light;" id="current-date"></span>
          </div>
          
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="{{url('/')}}" class="logo menu-absolute m-0">
            <img src="{{ asset('images/logo1.png') }}" alt="Logo" id="img-logo" style="width: 90px;">
          </a>

          
          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li ><a href="{{url('/')}}">الصفحة الرئسية</a></li>
            {{-- <li><a href="{{url('/courses')}}">الدورات</a></li>
            <li><a href="{{url('/staff')}}">طاقم العمل</a></li> --}}
            <li><a href="{{url('/news')}}">أخبار</a></li>
            <li><a href="{{url('/about')}}">خدمات</a></li>
            <li><a href="{{url('/contact')}}">اتصال بنا</a></li>
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
          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>

  @yield('content')

  <div class="site-footer">


    <div class="container">

      <div class="row">
        <div class="col-lg-3 footer">
          <div class="widget">
            <h3>معلومات عنا<span class="text-primary">.</span> </h3>
            <p>نحن مدرسة خاصة تركز على تقديم تعليم متميز يجمع بين التميز الأكاديمي والابتكار. نقدم برامج متنوعة تشمل المواد الأساسية والدورات الخاصة</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>يتصل</h3>
            <ul class="list-unstyled social">
              <li><a href="https://instagram.com/el_azzaoui_school"><span class="icon-instagram"></span></a></li>
              {{-- <li><a href="#"><span class="icon-twitter"></span></a></li> --}}
              <li><a href="https://www.facebook.com/@ElAzzaouiSchool"><span class="icon-facebook"></span></a></li>
              {{-- <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li> --}}
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-3 footer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3265.8386418414375!2d1.0507685847580706!3d35.060773080343516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1280db04ca1fa525%3A0x171b9c190a2724f5!2zRWwgQXp6YW91aSBTY2hvb2wg2KfZhNi52LLYp9mI2Yog2LPZg9mI2YQ!5e0!3m2!1sar!2sdz!4v1728510404163!5m2!1sar!2sdz" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div> <!-- /.col-lg-3 -->



        <div class="col-lg-3 contact">
          <div class="widget">
            <h3>اتصال</h3>
            <address>Rue Meskine Bachir, Frenda</address>
            <ul class="list-unstyled links mb-4">
              <li><a>+213773175202</a></li>
              <li><a href="mailto:contact@elazzaoui-school.com">contact@elazzaoui-school.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p class="copyright">Copyright &copy; ECOLE ELAZZAOUI</a> 
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->
  
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/scripts-dist.js') }}"></script>



    

  </body>


  <script>
    $(window).on('scroll', function() {
        var $logo = $("#img-logo"); // Ensure your logo has this ID

        if ($(window).scrollTop() > 0) {
            // When the user scrolls down, change the logo to logo.png
            $logo.attr('src', '{{ asset('images/logo.png') }}');
        } else if ($(window).scrollTop() === 0) {
            // When the user scrolls back up to the top, restore the original logo
            $logo.attr('src', '{{ asset('images/logo1.png') }}');
        }
    });
</script>

 
</body>
</html>