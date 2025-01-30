@extends('master.master')  
@section('content')

{{-- section1 --}}
<div class="untree_co-hero overlay" style="background-image: url('images/hero2.png');" loading="lazy">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center ">
          <div class="col-lg-6 text-center ">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100"
              style="font-family: 'Almarai', serif;">خدماتنا</h1>
            <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
              <p>العزاوي سكوول توفر لكم خدمات تعليمية متكاملة تلبي احتياجاتكم و إحتياجات أبنائكم مصممة بعناية لإثراء
                تجربتكم التعليمية.</p>
            </div>

            <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">استكشاف
                الدورات</a></p>

          </div>


        </div>

      </div>

    </div>
  </div>
</div>
{{-- end section1 --}}


{{-- section 2 --}}

<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

  <div class="unslate_co--section" id="services-section">
    <div class="container">

      <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span>خدماتنا</span></h2>
        <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
      </div>

      <div class="row gutter-v3">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
            <div class="wrap-icon mb-3 text-center">
              <img class="services-img" src="images/svg/translator.png" alt="Image" width="45"
                data-gif="images/svg/translator.gif">
            </div>
            <h3>دورات اللغات<br>الأجنبية</h3>
            <p>دورات لتعلم اللغات الأجنبية من المستوى المبتدئ حتى المتقدم، تشمل أيضًا ورشات للمستويات المتقدمة لتحسين
              الطلاقة في التواصل</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
            <div class="wrap-icon mb-3">
              <img class="services-img" src="images/svg/writing.png" alt="Icon" width="45"
                data-gif="images/svg/writing.gif">
            </div>
            <h3>ورشة تحسين<br>الخط</h3>
            <p>ورشة كتابة للأطفال (6-10 سنوات):
              8 حصص شهريًا (ساعتان لكل حصة) لتحسين الخط والإملاء والتعبير الكتابي.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
            <div class="wrap-icon mb-3">
              <img class="services-img" src="images/svg/abacus.png" alt="Image" class="img-fluid" width="45"
                data-gif="images/svg/abacus.gif">
            </div>
            <h3>دورات الحساب<br>الذهني</h3>
            <p>دورات لتعزيز القدرات الفكرية وتنمية الذاكرة والانتباه، موجهة للفئات العمرية الصغرى </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
            <div class="wrap-icon mb-3">
              <img class="services-img" src="images/svg/achieve.png" alt="Image" width="45"
                data-gif="images/svg/achieve.gif">
            </div>
            <h3>جلسات فردية<br>للأهداف الخاصة</h3>
            <p>جلسات مخصصة لتحسين المهارات اللغوية أو التحضير لاختبارات اللغات الأجنبية، تُركز على احتياجاتكم الخاصة
              لضمان أفضل النتائج </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
            <div class="wrap-icon mb-3">
              <img class="services-img" src="images/svg/book.png" alt="Image" width="45" data-gif="images/svg/book.gif">
            </div>
            <h3>مكتبة للقراءة <br> والمطالعة</h3>
            <p>مكتبة تحتوي على أكثر من 300 عنوان مختلف، متاحة للاستعارة من قبل الطلاب لدعم التعليم المستمر وتوسيع
              المعرفة </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
            <div class="wrap-icon mb-3">
              <img class="services-img" src="images/svg/school.png" alt="Image" width="45"
                data-gif="images/svg/school.gif">
            </div>
            <h3>الموارد التكنولوجية<br>المتقدمة</h3>
            <p>نوفر أدوات وموارد تكنولوجية حديثة لدعم العملية التعليمية، مما يساعد في تحسين تجربة التعلم وتطوير المهارات
              باستخدام أحدث التقنيات </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- end section2 --}}



  {{-- section3 --}}



  <!-- END .counter -->
  <div class="unslate_co--section" id="portfolio-section">
    <div class="container">


      <div class="relative">
        <div class="loader-portfolio-wrap">
          <div class="loader-portfolio dark"></div>
        </div>
      </div>
      <div id="portfolio-single-holder"></div>

      <div class="portfolio-wrapper">

        <div class="section-heading-wrap text-center mb-5">
          <h2 class="heading-h2 text-center divider">الصور</span></h2>
          <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
        </div>

        {{-- <div class="d-flex align-items-center mb-4">
          <div class="filter-wrap">
            <div class="filter ml-auto" id="filters">
              <a href="#" class="active" data-filter="*">All</a>
              <a href="#" data-filter=".web">Web</a>
              <a href="#" data-filter=".branding">Branding</a>
              <a href="#" data-filter=".illustration">Illustration</a>
              <a href="#" data-filter=".packaging">Packaging</a>
            </div>
          </div>

        </div> --}}



        <div id="posts" class="row gutter-isotope-item">

          <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

            <a href="images/phto4.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery">
              {{-- data-caption="Watch" --}}
              <div class="overlay">
                <span class="wrap-icon icon-photo2"></span>
                <div class="portfolio-item-content">
                  {{-- <h3>Modern Building</h3>
                  <p>branding, packaging</p> --}}
                </div>
              </div>
              <img src="images/phto4.jpg" class="lazyload  img-fluid" alt="Images" />
            </a>

          </div>

          <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

            <a href="images/phto5.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery">
              <div class="overlay">
                <span class="wrap-icon icon-photo2"></span>
                <div class="portfolio-item-content">
                  {{-- <h3>Watch</h3>
                  <p>web, packaging</p> --}}
                </div>
              </div>
              <img src="images/phto5.jpg" class="lazyload  img-fluid" alt="Images" />
            </a>

          </div>

          <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="images/phto6.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery">
              <div class="overlay">
                <span class="wrap-icon icon-photo2"></span>
                <div class="portfolio-item-content">
                  {{-- <h3>Shoe Rebranding</h3>
                  <p>illustration, packaging</p> --}}
                </div>
              </div>
              <img src="images/phto6.jpg" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>

          <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="images/phto1.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery">
              <div class="overlay">
                <span class="wrap-icon icon-photo2"></span>
                <div class="portfolio-item-content">
                  {{-- <h3>Reshape</h3>
                  <p>web, branding</p> --}}
                </div>
              </div>
              <img src="images/phto1.jpg" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>

          <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="images/phto2.jpg" class="portfolio-item item-portrait isotope-item gsap-reveal-img"
              data-fancybox="gallery">
              <div class="overlay">
                <span class="wrap-icon icon-photo2"></span>
                <div class="portfolio-item-content">
                  {{-- <h3>Modern Building</h3>
                  <p>branding, packaging</p> --}}
                </div>
              </div>
              <img src="images/phto2.jpg" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>
          {{--
          <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="portfolio-item isotope-item gsap-reveal-img"
              data-fancybox="gallery" data-caption="Showreel 2019">
              <div class="overlay">
                <span class="wrap-icon icon-play_circle_filled"></span>
                <div class="portfolio-item-content">
                  <h3>Showreel 2019</h3>
                  <p>web, branding</p>
                </div>
              </div>
              <img src="images/work_8_md.jpg" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div> --}}

          <div class="item web illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="images/phto3.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery">
              <div class="overlay">
                <span class="wrap-icon icon-photo2"></span>
                <div class="portfolio-item-content">
                  {{-- <h3>Render Packaging</h3>
                  <p>web, illustration</p> --}}
                </div>
              </div>
              <img src="images/phto3.jpg" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>

        </div>

      </div>


    </div>
  </div>

  {{-- end section3 --}}







  <script src="{{ asset('js/scripts-dist.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>

</body>

@endsection