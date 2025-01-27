@extends('master.master')  

@section('content')


<div class="untree_co-hero overlay" style="background-image: url('images/hero6.png');">


  <div class="container">
    <div class="row align-items-center justify-content-center">

      <div class="col-12">

        <div class="row justify-content-center ">

          <div class="col-lg-6 text-center ">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100"
              style="font-family: 'Almarai', serif;">...نجاحك هنا، و الآن</h1>

            <a data-fancybox data-aos="fade-up" data-aos-delay="0" class="caption mb-4 d-inline-block"
              style="font-family: 'Almarai', serif;">
              العزاوي سكوول مؤسسة تعليم اللغات، نقدم برامج مميزة متاحة للجميع وبأسعار مناسبة، و نسعى لتوفير الحل الأمثل
              لتطوير مهاراتكم بأسلوب مبتكر وفعال

            </a>


            <div class="button-container">
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="{{url('/contact')}}"
                  class="btn btn-secondary">اتصال بنا</a></p>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="{{url('/login')}}"
                  class="btn btn-secondary">التسجيل المسبق</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>

</div>
{{-- section 2 --}}

<div class="untree_co-section" style="    padding-bottom: 90px; padding-top: 50px;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
          تاريخ العزاوي سكول
        </h2>
        <p>تأسست “العزاوي سكوول” في 01 نوفمبر 2018 لتكون بذلك أول مؤسسة تعليم اللغات الأجنبية بفرندة، حيث استلهمت رؤيتها
          من جذور متأصلة في مجال التعليم وريادة الأعمال. تمثل المؤسسة امتدادًا لمسار مميز يربط بين شغف نقل المعرفة
          والخبرة العملية، مما ساهم في تحقيق تطور مستمر منذ بداياتها المتواضعة. بفضل هذا المزيج من القيم الراسخة والطموح
          المتجدد، أصبحت “العزاوي سكوول” اليوم نموذجًا يجمع بين الأصالة والابتكار في تقديم خدمات تعليمية متميزة</p>
      </div>
    </div>
  </div>
</div>

{{-- end sction2 --}}

{{-- section3 --}}

<div class="services-section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
        <figure class="img-wrap-2">
          <img src="images/fan.png" alt="Image" class="img-fluid">
          <div class="dotted"></div>
        </figure>

      </div>
      <div class="col-lg-4 mb-5 mb-lg-0" style="text-align: right; padding-top: 70px;">

        <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom mb-4" style="font-family: 'Almarai', serif;"> مهمة العزاوي سكوول
          </h2>
        </div>

        <p data-aos="fade-up" data-aos-delay="100">
          في العزاوي سكوول نسعى لتزويد المتعلمين
          بتجربة استثنائية تمزج بين الجودة والابتكار. نلتزم بتقديم خدمات تعليمية تُلبي احتياجات جميع الفئات العمرية
          والمستويات، مع تركيز خاص على ربط التعليم بحياة المتعلمين اليومية وجعله فعالًا في تطوير مهاراتهم اللغوية




        </p>
        <br>
        <br>
        <br>

        {{-- <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
          {{-- <li>دراسة عن بعد</li>
          <li>اختبار لغة مجاني</li>
          <li>دورات عبر الانترنت</li> --}}
          {{-- <li> شهادات واعتمادات احترافية</li> --}}


          {{-- <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">إحصل عليه</a></p> --}}

      </div>

    </div>
  </div>
</div>
{{-- end section3 --}}


{{-- section4 --}}





<div class="untree_co-section" style="padding-bottom: 70px ; padding-top: 60px; ">
  <div class="container">
    <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
      قيم العزاوي سكوول
    </h2>

    <div class="row g-4">
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
            <h5 class="mb-3">الجودة والإبداع</h5>
            <p>نؤمن بأن التعليم الفعّال يجمع بين التميز الأكاديمي والأساليب الإبداعية.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
            <h5 class="mb-3">التطور المستمر</h5>
            <p>نلتزم بتحديث خدماتنا بما يواكب احتياجات المتعلمين والتحديات المستقبلية.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-home text-primary mb-4"></i>
            <h5 class="mb-3">الاستدامة والمسؤولية</h5>
            <p> نسعى لتقديم خدمات تعكس اهتمامنا بالمجتمع .</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
            <h5 class="mb-3">الشغف بالمعرفة</h5>
            <p>نعمل على خلق بيئة تعليمية محفزة تدعم الفضول وتغذي حب التعلم.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- end section4 --}}


{{-- section 5 --}}


<div class="untree_co-hero overlay" style="background-image: url('images/hero2.png'); ">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-7">
        <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0"
          style="font-size: 60px ; font-family: 'Almarai', serif;">لماذا تختارنا؟
        </h2>
        <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">


          العزاوي سكول ليست مجرد مؤسسة لتعليم اللغات، بل هي تجربة تعليمية موجهة خصيصًا لتلبية احتياجاتكم التعليمية بشكل
          متكامل.
          مؤسستنا عددًا كافيًا من الدروس المصممة بدقة لتلبية جميع الاحتياجات التعليمية، مع تقديم محتوى متميز في الشكل
          والمضمون لضمان تجربة تعليمية احترافية ومتكاملة. نطرح برامج مكثفة وأخرى عادية، مرفقة بامتحانات دورية ونهائية،
          تتيح للمشاركين الحصول على شهادة تثبت مستواهم.



        </p>



        <p><a href="{{url('/register')}}" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">سجل الآن</a>
        </p>
      </div>
    </div>
  </div>
</div> <!-- /.untree_co-section -->


{{-- end section 5 --}}



{{-- section 6 --}}


<div class="untree_co-section bg-light">
  <div class="container">
    <div class="slider-container">
      <div class="slider-header">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">اختر برنامجك</h2>
        <p>ساهمنا في تكوين المئات من طلبة اللغات وحققنا نجاحات متميزة، منها الحصول على المراتب الأولى في مسابقات
          السوروبان، مما يعكس التزامنا بتقديم تعليم عالي الجودة ونتائج ملموسة.</p>
      </div>

      <div class="slider-wrapper">
        <button class="slider-button prev-button">&gt;</button>
        <button class="slider-button next-button">&lt;</button>

        <div class="slider-track">
          <div class="slide">
            <img src="images/imagetwo.png" alt="دورات اللغات">
            <div class="slide-content">
              <h3>دورات اللغات</h3>
              <p>من المستوى الأساسي إلى التمكن، لجميع الفئات العمرية.</p>
            </div>
          </div>
          <div class="slide">
            <img src="images/imageone.png" alt="ورشات تحفيظ">
            <div class="slide-content">
              <h3>ورشات تحفيظ جدول الضرب</h3>
              <p>للأطفال بأسلوب ممتع وفعّال.</p>
            </div>
          </div>
          <div class="slide">
            <img src="images/imagefour.png" alt="دورات الحساب">
            <div class="slide-content">
              <h3>دورات الحساب الذهني</h3>
              <p>تقدم الدورة مواد مبسطة وفعالة.</p>
            </div>
          </div>
          <div class="slide">
            <img src="images/imagethree.png" alt="جلسات التحضير">
            <div class="slide-content">
              <h3>جلسات التحضير لاختبارات اللغة</h3>
              <p>TOEFL، IELTS، TCF</p>
            </div>
          </div>
          <div class="slide">
            <img src="https://via.placeholder.com/400x300" alt="ورشات تحسين">
            <div class="slide-content">
              <h3>ورشات تحسين الخط والكتابة</h3>
              <p>مخصصة للفئات العمرية الصغرى.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-dots"></div>
    </div>

  </div>
</div>
{{--
<div class="untree_co-section" style="    padding-bottom: 90px;     padding-top: 70px;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
          ما الذي يجعل تعلمك في مؤسسة العزاوي سكوول تجربة مميزة؟
        </h2>
        <p>مؤسستنا ليست مجرد مكان لتعلم اللغات,إنها تجربة تعليمية مصممة خصيصًا لتلبية احتياجاتك اللغوية.</p>
      </div>
    </div>
    <div class="row">
      <!-- أيقونة التخرج -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature text-center">
          <span class="uil uil-graduation-cap"></span>
          <p>نتميز بمناهج متكاملة تأخذ بعين الاعتبار الخلفيات الثقافية والاجتماعية الجزائرية،وأكثر فعالية في تطوير
            مهاراتك .</p>
        </div>
      </div>
      <!-- أيقونة التمارين -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature text-center">
          <span class="uil uil-dumbbell"></span>
          <p>دروسنا ممنهجة ومنظمة، وتحتوي على تمارين تفاعلية تعزز استيعابك وتطور قدراتك خطوة بخطوة.</p>
        </div>
      </div>
      <!-- أيقونة التقنيات المبتكرة -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature text-center">
          <span class="uil uil-lightbulb-alt"></span>
          <p>كما ندمج أحدث طرق التدريس والتقنيات المبتكرة لتقديم تجربة تعليمية ممتعة وملهمة، تناسب جميع الأعمار
            والمستويات.</p>
        </div>
      </div>
    </div>

  </div>
</div>
</div> --}}
{{-- end section 6 --}}




{{-- section 7 --}}








{{--
<div class="untree_co-section bg-light">
  <div class="container">
    <div class="slider-container">
      <div class="slider-header">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">التدريبية المناسبة لك</h2>
        <p>ساهمنا في تكوين المئات من طلبة اللغات وحققنا نجاحات متميزة، منها الحصول على المراتب الأولى في مسابقات
          السوروبان، مما يعكس التزامنا بتقديم تعليم عالي الجودة ونتائج ملموسة.</p>
      </div>

      <div class="slider-wrapper">
        <button class="slider-button prev-button">&gt;</button>
        <button class="slider-button next-button">&lt;</button>

        <div class="slider-track">
          <div class="slide">
            <img src="images/imagetwo.png" alt="دورات اللغات">
            <div class="slide-content">
              <h3>دورات اللغات</h3>
              <p>من المستوى الأساسي إلى التمكن، لجميع الفئات العمرية.</p>
            </div>
          </div>
          <div class="slide">
            <img src="images/imageone.png" alt="ورشات تحفيظ">
            <div class="slide-content">
              <h3>ورشات تحفيظ جدول الضرب</h3>
              <p>للأطفال بأسلوب ممتع وفعّال.</p>
            </div>
          </div>
          <div class="slide">
            <img src="images/imagefour.png" alt="دورات الحساب">
            <div class="slide-content">
              <h3>دورات الحساب الذهني</h3>
              <p>تقدم الدورة مواد مبسطة وفعالة.</p>
            </div>
          </div>
          <div class="slide">
            <img src="images/imagethree.png" alt="جلسات التحضير">
            <div class="slide-content">
              <h3>جلسات التحضير لاختبارات اللغة</h3>
              <p>TOEFL، IELTS، TCF</p>
            </div>
          </div>
          <div class="slide">
            <img src="https://via.placeholder.com/400x300" alt="ورشات تحسين">
            <div class="slide-content">
              <h3>ورشات تحسين الخط والكتابة</h3>
              <p>مخصصة للفئات العمرية الصغرى.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-dots"></div>
    </div>

  </div>
</div> --}}



{{-- end section 7 --}}













{{-- <div class="untree_co-section_ex">
  <div class="container">
    <div class="row justify-content-center mb-3">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">تصفح مميزات المدرسة</h2>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
        <a href="{{url('/waiting')}}" class="category d-flex align-items-start h-100">
          <div>
            <i class="uil uil-book-open"></i>

          </div>
          <div>
            <h3>دورات خاصة</h3>
            <span>7,291 دورات</span>

          </div>
        </a>
      </div>




      <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
        <a href="{{url('/waiting')}}" class="category d-flex align-items-start h-100">
          <div>
            <i class="uil uil-laptop"></i>

          </div>
          <div>
            <h3>دراسة عن بعد</h3>
            <span>7,291 برامج دراسة</span>

          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
        <a href="{{url('/waiting')}}" class="category d-flex align-items-start h-100">
          <div>
            <i class="uil uil-store"></i>

          </div>
          <div>
            <h3>متجر خاص بالمدرسة</h3>
            <span>7,291 كتب متوفرة</span>

          </div>
        </a>
      </div>

    </div>
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
      <div class="col-lg-8 text-center">
        <p>لدينا المزيد من الفئات هنا. <a href="{{url('/waiting')}}">تصفح الكل</a></p>
      </div>
    </div>
  </div>
</div>
--}}




{{--
<div class="untree_co-hero overlay" style="background-image: url('images/hero2.png');" s>
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-7">
        <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">مؤسستنا</h2>
        <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">نؤمن بأن التعليم هو المفتاح لتشكيل قادة
          الغد. في مؤسستنا، نقدم برامج تعليمية متقدمة تركز على تنمية المهارات القيادية والتفكير النقدي لدى الطلاب. نعمل
          على تحفيزهم على الابتكار وتطوير قدراتهم على حل المشكلات، مما يعدهم لمواجهة التحديات المستقبلية. من خلال تجارب
          تعليمية متنوعة ومناهج تفاعلية، نسعى إلى تعزيز القيم الأساسية مثل التعاون، والمسؤولية، والمبادرة. نحن نؤمن بأن
          قادة الغد هم أولئك الذين يتمتعون بالمعرفة والثقة لإحداث تأثير إيجابي في مجتمعاتهم</p>
        <p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">سجل الآن</a></p>
      </div>
    </div>
  </div>
</div> <!-- /.untree_co-section --> --}}

<div class="untree_co-section" style="    padding-top: 60px;
    padding-bottom: 100px;">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5 mb-5" style="text-align: right">
        <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0" style="font-family: 'Almarai', serif;">رؤية
          العزاوي سكوول</h2>
        <p data-aos="fade-up" data-aos-delay="100">نسعى لأن نكون الخيار الأول لتعلم اللغات في المنطقة، مستندين إلى
          شراكتنا بين المعرفة الأكاديمية والابتكار التقني. هدفنا هو توفير تجربة تعليمية ملهمة تُحفّز فضول المتعلمين
          وتفتح أمامهم آفاقًا جديدة للنجاح على المستويين الشخصي والمهني.
          نعمل على توسيع مكتبتنا من 300 كتاب للإعارة إلى 900 كتاب لتعزيز الثقافة والمعرفة بين طلبتنا. كما نحرص على تطبيق
          برامج تعكس مسؤوليتنا الاجتماعية، مثل برنامج الفرز الانتقائي للنفايات للحفاظ على البيئة.
          نسعى أيضًا لتوسيع خيارات التعلم من خلال إضافة دورات جديدة مثل "الروبوتيك" و"الشطرنج"، لتزويد طلابنا بمهارات
          حيوية تواكب تحديات المستقبل، مع الاستمرار في تقديم خدمات تعليمية متجددة ومتميزة.
          {{--
        <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
          <li>برامج تعليمية شاملة</li>
          <li>فريق تعليمي متميز</li>
          <li>بيئة تعليمية محفزة</li>
        </ul> --}}

        {{-- <div class="row count-numbers mb-5">
          <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
            <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span>
            <span class="caption-2">طلاب</span>
          </div>
          <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <span class="counter d-block"><span data-number="49">0</span><span></span></span>
            <span class="caption-2">المعلمون</span>
          </div>
          <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <span class="counter d-block"><span data-number="12">0</span><span></span></span>
            <span class="caption-2">الجوائز</span>
          </div>
        </div> --}}

        {{-- <p data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="btn btn-primary mr-1">قبول</a>
          <a href="#" class="btn btn-outline-primary">تعلم أكثر</a>
        </p> --}}
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-1"></div>
        <!-- Video Link -->
        <a href="images/elazzaoui.mp4" data-fancybox="video" class="video-wrap">
          <span class="play-wrap">
            <span class="icon-play"></span>
          </span>
          <img src="images/img.png" alt="Image" class="img-fluid rounded">
        </a>
      </div>
    </div>
  </div>
</div> <!-- /.untree_co-section -->

{{-- <div class="untree_co-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">اخبار المدرسة</h2>
        <p>نحن في مدرسة مدرسة العزاوي نحرص على إبقاء مجتمعنا المدرسي على اطلاع دائم بأحدث الأخبار والمستجدات. نقدم
          تقارير دورية عن الأنشطة والمناسبات التي تُقام داخل المدرسة، مثل مهرجانات العلوم، وفعاليات الثقافة والفنون،
          بالإضافة إلى النجاحات الأكاديمية التي يحققها طلابنا. كما نشارك أخبار الشراكات المجتمعية التي نطورها مع
          المؤسسات المحلية، مما يوفر لطلابنا فرصًا لاكتساب المهارات العملية والخبرات القيمة. يمكن للآباء والطلاب متابعة
          هذه الأخبار من خلال موقعنا الإلكتروني أو وسائل التواصل الاجتماعي، حيث نسعى دائمًا لتعزيز التواصل بين المدرسة
          وأولياء الأمور والمجتمع.
        </p>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="{{ asset('images/img-school-1-min.jpg') }}" alt="Image">
          </figure>
          <div class="media-h-body" style="text-align: right">
            <h2 class="mb-3"><a href="#">التعليم لقادة الغد</a></h2>
            <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span> <span
                class="icon-person mr-2"></span>Admin</div>
            <p>معًا نُعد قادة الغد بالمهارات والمعرفة التي يحتاجونها لصنع التغيير</p>
            <p><a href="#" style="text-align: right">تعلم أكثر</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="images/img-school-2-min.jpg" alt="Image">
          </figure>
          <div class="media-h-body" style="text-align: right">
            <h2 class="mb-3"><a href="#">سجل أطفالك هذا الصيف للحصول على خصم %30</a></h2>
            <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span> <span
                class="icon-person mr-2"></span>Admin</div>
            <p>سجل أطفالك هذا الصيف واحصل على خصم خاص لمستقبل مليء بالمرح والتعلم</p>
            <p><a href="#">تعلم أكثر</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /.untree_co-section -->
--}}

{{-- <div class="untree_co-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4">حقوق الاشتراك</h2>
        <p>تتيح حقوق الاشتراك في مدرستنا للطلاب وأولياء الأمور المشاركة الفعالة في الحياة المدرسية والمساهمة في تطوير
          البيئة التعليمية. تشمل هذه الحقوق حق الحصول على معلومات شاملة حول البرامج الدراسية والأنشطة الإضافية، بالإضافة
          إلى إمكانية المشاركة في الاجتماعات والمناسبات المدرسية. نحن نؤمن بأهمية التواصل المفتوح، لذا نوفر قنوات متعددة
          تتيح للطلاب وأولياء الأمور التعبير عن آرائهم ومقترحاتهم. كما يتمتع أولياء الأمور بحقوق المشاركة في اتخاذ
          القرارات المتعلقة بالتوجيهات التعليمية، مما يعزز من دورهم كمساهمين في نجاح أبنائهم وتطوير المدرسة بشكل عام.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
        <div class="pricing">
          <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-1.png" alt="Image" class="img-fluid"></div> -->
          <div class="pricing-body">

            <h3 class="pricing-plan-title">الباقة الأساسية</h3>
            <div class="price"><span class="fig">$50.99</span><span>/شهريًا</span></div>
            <p class="mb-4">بعيدًا جدًا، خلف جبال الكلمات، بعيدًا عن دول فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>

            <p><a href="#" class="btn btn-outline-primary">ابدأ الآن</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing">
          <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-2.png" alt="Image" class="img-fluid"></div> -->
          <div class="pricing-body">

            <h3 class="pricing-plan-title">باقة الأعمال</h3>
            <div class="price"><span class="fig">$99.99</span><span>/شهريًا</span></div>
            <p class="mb-4">بعيدًا جدًا، خلف جبال الكلمات، بعيدًا عن دول فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>

            <p><a href="#" class="btn btn-primary">ابدأ الآن</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing">
          <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-3.png" alt="Image" class="img-fluid"></div> -->
          <div class="pricing-body">

            <h3 class="pricing-plan-title">باقة مميزة</h3>
            <div class="price"><span class="fig">$199.99</span><span>/شهريًا</span></div>
            <p class="mb-4">بعيدًا جدًا، خلف جبال الكلمات، بعيدًا عن دول فوكاليا وكونسونانتيا، تعيش النصوص العمياء.</p>

            <p><a href="#" class="btn btn-outline-primary">ابدأ الآن</a></p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div> <!-- /.untree_co-section -->

--}}

{{-- <div class="untree_co-section">


  <div class="container">
    <div class="row">
      <div class="col-lg-5 mr-auto mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
        <img src="images/img-school-5-min.jpg" alt="image" class="img-fluid">
      </div>
      <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
        <h3 class="line-bottom mb-4" style="font-family: 'Almarai', serif;">لماذا تختارنا؟</h3>
        <p>اختيار مدرستنا يعني الانضمام إلى مجتمع تعليمي يركز على التميز والابتكار. نحن نقدم برامج تعليمية شاملة تتناسب
          مع احتياجات كل طالب</p>

        <div class="custom-accordion" id="accordion_1">
          <div class="accordion-item">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">معلمين وموظفين جيدين</button>
            </h2>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
              <div class="accordion-body">
                <div class="d-flex">
                  <div class="accordion-img mr-4">
                    <img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div>
                    <p>نحن نفخر بوجود فريق من المعلمين والموظفين ذوي الكفاءة العالية والشغف بالتعليم. يتمتع كل معلم
                      بخبرة واسعة في مجاله، مما يضمن تقديم تعليم متميز واحترافي للطلاب.</p>
                    <p>يعمل فريقنا بتعاون وثيق مع الطلاب وأولياء الأمور لتوفير الدعم والمساعدة اللازمة لتحقيق النجاح
                      الأكاديمي. نحن ملتزمون بتعزيز بيئة تعليمية إيجابية تشجع على التعلم والنمو الشخصي، مما يساهم في
                      تطوير جيل مبدع وناجح.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- .accordion-item -->

          <div class="accordion-item">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">نحن نقدم أحسن دورات</button>
            </h2>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
              <div class="accordion-body">
                <div class="d-flex">
                  <div class="accordion-img mr-4">
                    <img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div>
                    <p>نحن نقدم أفضل الدورات التدريبية التي تركز على تلبية احتياجات الطلاب وتطوير مهاراتهم في مجالات
                      متعددة. تشمل دوراتنا مجموعة متنوعة من المواضيع</p>
                    <p>نحن نحرص على تقديم محتوى تعليمي حديث وعملي، بالإضافة إلى بيئة تعليمية تشجع على التفاعل والمشاركة.
                      انضم إلينا واستفد من فرص التعلم التي تفتح أمامك آفاق جديدة</p>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- .accordion-item --> --}}
          {{-- <div class="accordion-item">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">Your Children are Safe</button>
            </h2>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
              <div class="accordion-body">
                <div class="d-flex">
                  <div class="accordion-img mr-4">
                    <img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div>
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline
                      of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road,
                      the Line Lane.</p>
                    <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>

              </div>
            </div>

          </div> <!-- .accordion-item --> --}}

          {{--
        </div>

      </div>
    </div>
  </div>
</div> <!-- /.untree_co-section --> --}}
{{--
<script>
  $(document).ready(function () {
    $('[data-fancybox="video"]').fancybox({
      buttons: ['close'],
      youtube: {
        controls: 0,
        showinfo: 0
      },
      vimeo: {
        color: 'f00'
      }
    });
  });
</script> --}}

@endsection