@extends('master.master')
@section('content')    





{{-- section1 --}}
<div class="untree_co-hero overlay" style="background-image: url('images/hero3.png');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center ">
          <div class="col-lg-6 text-center ">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100"
              style="font-family: 'Almarai', serif;">إختبار المستوى اللغوي</h1>
            <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
              <p>نحن نحرص على تقديم تقييم دقيق لمستواك اللغوي لضمان توجيهك إلى الدورة المناسبة. لذلك، نوفر لك نوعين من
                اختبارات تحديد المستوى اللغوي، الأول هو اختبار عبر موقعنا الإلكتروني مجانًا، ويساعد في تحديد مستواك
                اللغوي الأساسي . أما الثاني فهو اختبار متقدم، يمكن إجراؤه في مقر مؤسستنا، ويقدم تقييمًا أكثر تفصيلًا
                ودقة لمهاراتك اللغوية.</p>
            </div>
            <div class="button-container">
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="{{url('/contact')}}"
                  class="btn btn-secondary">احجز موعدك الان!</a></p>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="{{url('/waiting')}}"
                  class="btn btn-secondary">اجتز الامتحان المجاني</a></p>
            </div>


          </div>


        </div>

      </div>

    </div> <!-- /.row -->
  </div> <!-- /.container -->

</div> <!-- /.untree_co-hero -->

{{-- end section1 --}}




{{-- section2 --}}


<div class="untree_co-section" style="    padding-bottom: 90px;     padding-top: 70px;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
          لماذا تجتاز اختبار تحديد المستوى اللغوي؟
        </h2>

      </div>
    </div>
    <div class="row">
      <!-- أيقونة التخرج -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature text-center">
          <span class="uil uil-graduation-cap"></span>

          <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
            معرفة مستواك الحالي بدقة
          </h2>


          <p>يساعدك الاختبار في تحديد مدى إلمامك باللغة، مما يتيح لك البدء من المستوى المناسب لتطوير مهاراتك بسرعة ودون
            إهدار للوقت. </p>
        </div>
      </div>
      <!-- أيقونة التمارين -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature text-center">
          <span class="uil uil-dumbbell"></span>

          <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
            وضع خطة تعليمية فعّالة
          </h2>
          <p>من خلال معرفة مستواك، يمكنك الانضمام إلى دورة تلبي احتياجاتك وتغطي نقاط ضعفك بشكل أفضل، مايضمن تطورًا
            مستمرًا ومُنسَّقًا. </p>
        </div>
      </div>
      <!-- أيقونة التقنيات المبتكرة -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature text-center">
          <span class="uil uil-lightbulb-alt"></span>
          <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
            تحقيق أهدافك بثقة

          </h2>

          <p>حديد المستوى يمكّنك من قياس تقدمك اللغوي مع مرور الوقت، ويساعدك على الوصول إلى أهدافك الأكاديمية أو المهنية
            بثبات ودقة.</p>
        </div>
      </div>
    </div>

  </div>
</div>
</div>

{{-- end section2 --}}


{{-- section 3 --}}

<div class="unslate_co--section" id="about-section">
  <div class="container">

    <div class="row mt-5 justify-content-between" style="text-align: right">
      <div class="col-lg-4 pr-lg-5">
        <h3 class="mb-4 heading-h3" data-aos="fade-right">نبذة عنّا<span></span></h3>
        <p class="mb-4" data-aos="fade-right">في العزاوي سكول، نعتمد الإطار الأوروبي المرجعي العام للغات (CEFR) لتصنيف
          المستويات اللغوية، مع التركيز على تطوير المهارات الأربعة الأساسية (الاستماع، التحدث، القراءة، الكتابة)،
          بالإضافة إلى إتقان القواعد (Grammar)، لضمان تعليم متكامل ومهني يلبي احتياجات جميع المتعلمين.</p>
        <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
          <li>A1 مستوى مبتدئ </li>
          <li>A2 مستوى المتوسط</li>
          <li> C1 المستوى المتقدم </li>
          <li> C2 مستوى الإتقان </li>


          <p data-aos="fade-up"><a href="#" class="btn btn-outline-pill btn-custom-light">فريق العمل</a></p>
      </div>
      <div class="col-lg-7 mb-5 mb-lg-0">
        <figure class="dotted-bg gsap-reveal-img ">
          <img src="images/phto.png" alt="Image" class="img-fluid">
        </figure>
      </div>
    </div>
  </div>
</div>


{{-- end section 3 --}}

{{--
<div class="untree_co-section bg-light">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="images/img-school-4-min.jpg" alt="صورة">
          </figure>
          <div class="media-h-body">
            <h2 class="mb-3"><a href="#">التعليم لقادة الغد</a></h2>
            <div class="meta"><span class="icon-calendar mr-2"></span><span>22 يونيو 2020</span> <span
                class="icon-person mr-2"></span>Untree.co</div>
            <p>بعيدًا، خلف جبال الكلمات، بعيدًا عن بلاد فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="images/img-school-3-min.jpg" alt="صورة">
          </figure>
          <div class="media-h-body">
            <h2 class="mb-3"><a href="#">سجّل أطفالك هذا الصيف واحصل على خصم 30%</a></h2>
            <div class="meta"><span class="icon-calendar mr-2"></span><span>22 يونيو 2020</span> <span
                class="icon-person mr-2"></span>Untree.co</div>
            <p>بعيدًا، خلف جبال الكلمات، بعيدًا عن بلاد فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="images/img-school-2-min.jpg" alt="صورة">
          </figure>
          <div class="media-h-body">
            <h2 class="mb-3"><a href="#">التعليم لقادة الغد</a></h2>
            <div class="meta"><span class="icon-calendar mr-2"></span><span>22 يونيو 2020</span> <span
                class="icon-person mr-2"></span>Untree.co</div>
            <p>بعيدًا، خلف جبال الكلمات، بعيدًا عن بلاد فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="images/img-school-1-min.jpg" alt="صورة">
          </figure>
          <div class="media-h-body">
            <h2 class="mb-3"><a href="#">سجّل أطفالك هذا الصيف واحصل على خصم 30%</a></h2>
            <div class="meta"><span class="icon-calendar mr-2"></span><span>22 يونيو 2020</span> <span
                class="icon-person mr-2"></span>Untree.co</div>
            <p>بعيدًا، خلف جبال الكلمات، بعيدًا عن بلاد فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="images/img-school-5-min.jpg" alt="صورة">
          </figure>
          <div class="media-h-body">
            <h2 class="mb-3"><a href="#">التعليم لقادة الغد</a></h2>
            <div class="meta"><span class="icon-calendar mr-2"></span><span>22 يونيو 2020</span> <span
                class="icon-person mr-2"></span>Untree.co</div>
            <p>بعيدًا، خلف جبال الكلمات، بعيدًا عن بلاد فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="images/img-school-6-min.jpg" alt="صورة">
          </figure>
          <div class="media-h-body">
            <h2 class="mb-3"><a href="#">سجّل أطفالك هذا الصيف واحصل على خصم 30%</a></h2>
            <div class="meta"><span class="icon-calendar mr-2"></span><span>22 يونيو 2020</span> <span
                class="icon-person mr-2"></span>Untree.co</div>
            <p>بعيدًا، خلف جبال الكلمات، بعيدًا عن بلاد فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div> --}}




@endsection