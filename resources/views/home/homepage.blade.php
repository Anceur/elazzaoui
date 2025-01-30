@extends('master.master')  

@section('content')


<div class="untree_co-hero overlay" style="background-image: url('images/hero6.png'); background-position: 70%;">


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




<div class="untree_co-section bg-light" style="padding-bottom: 80px">
  <div class="container-slider">
    <div class="slider-container">
      <div class="slider-header">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">اختر برنامجك</h2>
        <p>ساهمنا في تكوين المئات من طلبة اللغات وحققنا نجاحات متميزة، منها الحصول على المراتب الأولى في مسابقات
          السوروبان، مما يعكس التزامنا بتقديم تعليم عالي الجودة ونتائج ملموسة.</p>
      </div>

      <div class="slider-wrapper">

        <div class="slider-track">



          <div class="slide">
            <img src="images/imagetwo.png" alt="دورات اللغات">
            <div class="slide-content">
              <div class="content-wrapper">
                <!-- Price & Rating (Left) -->
                <div class="price-rating">
                  <span class="price">2500 دج/شهر</span>
                  <div class="rating">★★★★★</div>
                </div>
                <!-- Title & Description (Right) -->
                <div class="text-wrapper">
                  <h3>دورات اللغات الأجنبية للصغار</h3>
                  <p>دورات لغوية للأطفال 7-10.

                  </p>
                </div>
              </div>
              <button class="btn-donate" data-popup="popup1">اقرأ المزيد</button>
            </div>
          </div>


          <!-- Slide 2 -->


          <div class="slide">
            <img src="images/imageone.png" alt="ورشات تحفيظ">

            <div class="slide-content">
              <div class="content-wrapper">
                <!-- Price & Rating (Left) -->
                <div class="price-rating">
                  <span class="price">2500 دج/شهر</span>
                  <div class="rating">★★★★★</div>
                </div>
                <!-- Title & Description (Right) -->
                <div class="text-wrapper">
                  <h3>دورات اللغات الأجنبية للناشئين</h3>
                  <p>دورات لغوية للمراهقين 11-15.</p>
                </div>
              </div>
              <button class="btn-donate" data-popup="popup2">اقرأ المزيد</button>
            </div>
          </div>


          <!-- Slide 3 -->



          <div class="slide">
            <img src="images/imagefour.png" alt="دورات الحساب">

            <div class="slide-content">
              <div class="content-wrapper">
                <!-- Price & Rating (Left) -->
                <div class="price-rating">
                  <span class="price">3000 دج/شهر</span>

                  <div class="rating">★★★★★</div>
                </div>
                <!-- Title & Description (Right) -->
                <div class="text-wrapper">
                  <h3>دورات اللغات الأجنبية للكبار(برنامج عادي)</h3>
                  <p>دورات لغوية للكبار 16+.</p>
                </div>
              </div>
              <button class="btn-donate" data-popup="popup3">اقرأ المزيد</button>
            </div>
          </div>


          <!-- Slide 4 -->


          <div class="slide">
            <img src="images/imagefour.png" alt="دورات الحساب">

            <div class="slide-content">
              <div class="content-wrapper">
                <!-- Price & Rating (Left) -->
                <div class="price-rating">
                  <span class="price">8200 دج/شهر</span>
                  <div class="rating">★★★★★</div>
                </div>
                <!-- Title & Description (Right) -->
                <div class="text-wrapper">
                  <h3>دورات اللغات الأجنبية للكبار(برنامج مكثف)</h3>
                  <p>دورات لغوية للكبار 16+.</p>
                </div>
              </div>
              <button class="btn-donate" data-popup="popup4">اقرأ المزيد</button>
            </div>
          </div>




          <div class="slide">
            <img src="images/imagefive.png" alt="دورات الحساب">

            <div class="slide-content">
              <div class="content-wrapper">
                <!-- Price & Rating (Left) -->
                <div class="price-rating">

                  {{-- <img src="images/imagefive.png" alt="ورشات تحسين"> --}}
                  {{-- <h3>ورشات تحسين الخط والكتابة</h3> --}}
                  <span class="price">2000 دج/شهر</span>
                  <div class="rating">★★★★★</div>
                </div>
                <!-- Title & Description (Right) -->
                <div class="text-wrapper">
                  <h3>ورشات تحسين الخط والكتابة</h3>
                  <p>ورشة تحسين الخط للأطفال 7-10 سنوات.</p>
                </div>
              </div>
              <button class="btn-donate" data-popup="popup5">اقرأ المزيد</button>
            </div>
          </div>



          <!-- Slide 5 -->

          <div class="slide">
            <img src="images/imagefive.png" alt="ورشات تحسين">

            <div class="slide-content">
              <div class="content-wrapper">
                <!-- Price & Rating (Left) -->
                <div class="price-rating">
                  <span class="price">2500 دج/شهر</span>
                  <div class="rating">★★★★★</div>
                </div>
                <!-- Title & Description (Right) -->
                <div class="text-wrapper">
                  <h3>دورات الحساب الذهني</h3>

                  <p>دورة حساب ذهني للأطفال 7-14 سنة.</p>
                </div>
              </div>
              <button class="btn-donate" data-popup="popup6">اقرأ المزيد</button>
            </div>
          </div>


          <!-- Slide 6 -->


          <div class="slide">
            <img src="images/imagefive.png" alt="ورشات تحسين">

            <div class="slide-content">
              <div class="content-wrapper">
                <!-- Price & Rating (Left) -->
                <div class="price-rating">
                  <span class="price">

                    900دج/ساعة

                  </span>
                  <div class="rating">★★★★★</div>
                </div>
                <!-- Title & Description (Right) -->
                <div class="text-wrapper">
                  <h3>الحصص الفردية One To One</h3>

                  <p>دروس لغات فردية لجميع الفئات.</p>
                </div>
              </div>
              <button class="btn-donate" data-popup="popup7">اقرأ المزيد</button>
            </div>
          </div>


        </div>

        <!-- Popups -->
        <div id="popup1" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagetwo.png" alt="دورات اللغات الأجنبية للصغار"> --}}
            <h3>دورات اللغات الأجنبية للصغار </h3>
            <a href="https://wa.me/2130559180536" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>


            <p>الفئة العمرية من 7 إلى 10 سنة
              للغتين الإنجليزية والفرنسية على 4 مستويات:

              يركز الطلاب خلال هذه الدورات على تطوير المهارات الأربعة الأساسية: التحدث، الاستماع، القراءة، والكتابة
              بالإضافة إلى إتقان القواعد (Grammar)، لضمان تعليم متكامل ومهني يلبي احتياجات جميع المتعلمين.
              التحدث، يتعلمون التعبير عن أفكارهم بثقة في محادثات متنوعة.
              مهارة الاستماع، فيتدربون على فهم النصوص والمحادثات البسيطة و المعقدة بدقة.
              القراءة، يطورون قدرتهم على قراءة وفهم نصوص متنوعة، بدءًا من المواضيع البسيطة وصولاً إلى النصوص الأكثر
              تعقيدًا.
              الكتابة، يكتسبون مهارات تكوين نصوص مترابطة ودقيقة، مثل الإيمايلات المقالات والتقارير، مع التركيز على
              القواعد اللغوية المتقدمة.

              - المستوى A1.1: يشمل 48 ساعة دراسية.
              - المستوى A1.2: يشمل 48 ساعة دراسية.
              - المستوى A2.1: يشمل 48 ساعة دراسية.
              - المستوى A2.2: يشمل 48 ساعة دراسية.
            </p>
          </div>
        </div>

        <div id="popup2" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imageone.png" alt="دورات اللغات الأجنبية للناشئين"> --}}
            <h3>دورات اللغات الأجنبية للناشئين</h3>
            {{-- <span class="price">2500 دج/شهر</span> --}}
            <a href="https://wa.me/2130559180536" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>

            <p>الفئة العمرية من 11 إلى 15 سنة

              يتم تعليم اللغتين الإنجليزية والفرنسية على 4 مستويات:

              يركز الطلاب خلال هذه الدورات على تطوير المهارات الأربعة الأساسية: التحدث، الاستماع، القراءة، والكتابة
              بالإضافة إلى إتقان القواعد (Grammar)، لضمان تعليم متكامل ومهني يلبي احتياجات جميع المتعلمين.
              التحدث، يتعلمون التعبير عن أفكارهم بثقة في محادثات متنوعة.
              مهارة الاستماع، فيتدربون على فهم النصوص والمحادثات البسيطة و المعقدة بدقة.
              القراءة، يطورون قدرتهم على قراءة وفهم نصوص متنوعة، بدءًا من المواضيع البسيطة وصولاً إلى النصوص الأكثر
              تعقيدًا.
              الكتابة، يكتسبون مهارات تكوين نصوص مترابطة ودقيقة، مثل الإيمايلات المقالات والتقارير، مع التركيز على
              القواعد اللغوية المتقدمة.

              تتضمن دورات تعلم اللغات في البرامج العادية حصتين أسبوعياً ،كل حصة تستغرق ساعتين.

              - المستوى A1: يشمل 52 ساعة دراسية.
              - المستوى A2: يشمل 52 ساعة دراسية.
              - المستوى B1.1: يشمل 52 ساعة دراسية.
              - المستوى B1.2: يشمل 52 ساعة دراسية.
            </p>
          </div>
        </div>

        <div id="popup3" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagefour.png" alt="دورات اللغات الأجنبية للكبار "> --}}
            <h3>دورات اللغات الأجنبية للكبار "برنامج عادي"</h3>
            {{-- <span class="price">3000 دج/شهر</span> --}}
            <a href="https://wa.me/2130559180536" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>

            <p>الفئة العمرية 16 سنة و أكثر

              يتم تعليم اللغات الإنجليزية،الفرنسية، الألمانية، الإسبانية، التركية ،الروسية و الإطالية على 4 مستويات:

              يركز الطلاب خلال هذه الدورات على تطوير المهارات الأربعة الأساسية: التحدث، الاستماع، القراءة، والكتابة
              بالإضافة إلى إتقان القواعد (Grammar)، لضمان تعليم متكامل ومهني يلبي احتياجات جميع المتعلمين.
              التحدث، يتعلمون التعبير عن أفكارهم بثقة في محادثات متنوعة.
              مهارة الاستماع، فيتدربون على فهم النصوص والمحادثات البسيطة و المعقدة بدقة.
              القراءة، يطورون قدرتهم على قراءة وفهم نصوص متنوعة، بدءًا من المواضيع البسيطة وصولاً إلى النصوص الأكثر
              تعقيدًا.
              الكتابة، يكتسبون مهارات تكوين نصوص مترابطة ودقيقة، مثل الإيمايلات المقالات والتقارير، مع التركيز على
              القواعد اللغوية المتقدمة.

              تتضمن دورات تعلم اللغات في البرامج العادية حصتين أسبوعياً ،كل حصة تستغرق ساعتين.

              - المستوى A1: يشمل 60 ساعة دراسية.
              - المستوى A2: يشمل 60 ساعة دراسية.
              - المستوى B1: يشمل 120 ساعة دراسية.
              - المستوى B2: يشمل 120 ساعة دراسية.
            </p>
          </div>
        </div>

        <div id="popup4" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagethree.png" alt="دورات اللغات الأجنبية للكبار "> --}}
            <h3>دورات اللغات الأجنبية للكبار "برنامج مكثف"</h3>
            {{-- <span class="price">8200 دج/شهر</span> --}}
            <a href="https://wa.me/2130559180536" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>

            <p>الفئة العمرية 16 سنة و أكثر

              يتم تعليم اللغتين الإنجليزية،الفرنسية على 4 مستويات:

              يركز الطلاب خلال هذه الدورات على تطوير المهارات الأربعة الأساسية: التحدث، الاستماع، القراءة، والكتابة
              بالإضافة إلى إتقان القواعد (Grammar)، لضمان تعليم متكامل ومهني يلبي احتياجات جميع المتعلمين.
              التحدث، يتعلمون التعبير عن أفكارهم بثقة في محادثات متنوعة.
              مهارة الاستماع، فيتدربون على فهم النصوص والمحادثات البسيطة و المعقدة بدقة.
              القراءة، يطورون قدرتهم على قراءة وفهم نصوص متنوعة، بدءًا من المواضيع البسيطة وصولاً إلى النصوص الأكثر
              تعقيدًا.
              الكتابة، يكتسبون مهارات تكوين نصوص مترابطة ودقيقة، مثل الإيمايلات المقالات والتقارير، مع التركيز على
              القواعد اللغوية المتقدمة.

              تتضمن دورات تعلم اللغات في البرامج المكثفة أربع حصص أسبوعياً، كل حصة تستغرق ثلاث ساعات.

              - المستوى A1: يشمل 60 ساعة دراسية.
              - المستوى A2: يشمل 60 ساعة دراسية.
              - المستوى B1: يشمل 120 ساعة دراسية.
              - المستوى B2: يشمل 120 ساعة دراسية.
            </p>
          </div>
        </div>

        <div id="popup5" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagefive.png" alt="ورشات تحسين"> --}}
            <h3>ورشات تحسين الخط والكتابة</h3>
            {{-- <span class="price">2000 دج/شهر</span> --}}
            <a href="https://wa.me/2130559180536" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>

            <p>الفئة العمرية من 7 إلى 10 سنة
              الثمن 2000دج/8حصص
              ورشة تحسين الخط، الكتابة، الإملاء والتعبير باللغة العربية. تتضمن 8 حصص شهريًا، كل حصة تستغرق ساعتين. تهدف
              الورشة إلى تحسين جودة الكتابة اليدوية، وتعليم الأطفال الكتابة بخط واضح ومرتب، بالإضافة إلى تحسين مهارات
              الإملاء. كما تساهم في تعزيز تركيز الطلاب وقدرتهم على التعبير الكتابي بطريقة دقيقة وواضحة.
              الورشة قابلة للتجديد حسب احتياجات الطالب.
            </p>
          </div>
        </div>



        <div id="popup6" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagefive.png" alt="ورشات تحسين"> --}}
            <h3>دورات الحساب الذهني (سروبان)</h3>
            {{-- <span class="price">2500 دج/شهر</span> --}}
            <a href="https://wa.me/2130559180536" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>

            <p>

              الفئة العمرية من 7 إلى 14 سنة
              تتضمن 6 مستويات، كل مستوى يتطلب 48 ساعة من التدريب. تهدف هذه الدورة إلى تحسين مهارات الحساب الذهني، مما
              يعزز دقة وسرعة العمليات الحسابية. كما تسهم في تنمية التركيز والذاكرة، بالإضافة إلى تقوية مهارات التفكير
              المنطقي وحل المشكلات. تساعد الدورة أيضًا في رفع الثقة بالنفس وتحقيق نتائج أكاديمية ممتازة. وفي نهاية كل
              مستوى، يحصل الطالب على شهادة إثبات مستوى بعد اجتيازه الاختبار النهائي.




            </p>
          </div>
        </div>





        <div id="popup7" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagefive.png" alt="ورشات تحسين"> --}}
            <h3>الحصص الفردية One To One</h3>


            {{-- <span class="price">

              900دج/ساعة

            </span> --}}
            <a href="https://wa.me/2130559180536" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>

            <p>

              الفئة العمرية جميع الفئات العمرية
              الثمن 900دج/ساعة
              تتيح الحصص الفردية فرصة لتعلم اللغات (الإنجليزية، الفرنسية، الألمانية، الإسبانية، التركية ،الروسية و
              الإطالية) بشكل مخصص حسب احتياجاتك، مع التركيز على تطوير المهارات المطلوبة مثل المحادثة أو الكتابة. يتم
              تصميم كل برنامج ليتناسب مع مستواك و إحتياجك ، مما يضمن تقدمًا سريعًا وفعّالًا تحت إشراف مدربين متخصصين.
              هذه الدورات يمكن أن تقدم للأشخاص أو للمؤسسات





            </p>
          </div>
        </div>

      </div>

      <div class="next-prev" style="display: flex; justify-content: center ;position: relative;
    text-align: center;
    padding-top: 70px;
    gap:10px ;">
        <!-- Previous Button -->
        <button class="slider-button prev-button">
          <div class="button-top">
            <span class="material-icons">❮</span>
          </div>
          <div class="button-bottom"></div>
          <div class="button-base"></div>
        </button>


        <!-- Next Button -->
        <button class="slider-button next-button">
          <div class="button-top">
            <span class="material-icons">❯</span>
          </div>
          <div class="button-bottom"></div>
          <div class="button-base"></div>
        </button>
      </div>

      <div class="slider-dots"></div>
    </div>

  </div>
</div>




<div class="untree_co-section" style="    padding-top: 60px;
    padding-bottom: 100px;">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5 mb-5" style="text-align: right">
        <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0"
          style="font-family: 'Almarai', serif;text-align: center;">رؤية
          العزاوي سكوول</h2>
        <p data-aos="fade-up" data-aos-delay="100">نسعى لأن نكون الخيار الأول لتعلم اللغات في المنطقة، مستندين إلى
          شراكتنا بين المعرفة الأكاديمية والابتكار التقني. هدفنا هو توفير تجربة تعليمية ملهمة تُحفّز فضول المتعلمين
          وتفتح أمامهم آفاقًا جديدة للنجاح على المستويين الشخصي والمهني.
          نعمل على توسيع مكتبتنا من 300 كتاب للإعارة إلى 900 كتاب لتعزيز الثقافة والمعرفة بين طلبتنا. كما نحرص على تطبيق
          برامج تعكس مسؤوليتنا الاجتماعية، مثل برنامج الفرز الانتقائي للنفايات للحفاظ على البيئة.
          نسعى أيضًا لتوسيع خيارات التعلم من خلال إضافة دورات جديدة مثل "الروبوتيك" و"الشطرنج"، لتزويد طلابنا بمهارات
          حيوية تواكب تحديات المستقبل، مع الاستمرار في تقديم خدمات تعليمية متجددة ومتميزة.

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
</div>


<div class="untree_co-section bg-light" style="padding-bottom: 100px ;height: 500px;">
  <div class=" container">
    <div class="row">
      <div class="col-lg-7 text-center mx-auto">

        <h3 class="line-bottom mb-4" style="font-family: 'Almarai', serif;">واش قالوا علينا</h3>
        <div class="owl-carousel wide-slider-testimonial">
          <div class="item">
            <blockquote class="block-testimonial">

              <p>

                بفضل مدرستكم وطاقمها اننا نلاحظ تقدما ملحوظا في الاقبال على تعلم اللغات الابناء فرندة مزيدا من التألق
                والتميزوشكرا لكم على مجهوداتكم سي علي ميسوم
              </p>
              <div class="author">
                <img src="images/ay.png" alt="Free template by TemplateUX">
                <h3>ر.أية

                </h3>
                {{-- <p class="position">CEO, Founder</p> --}}
              </div>
            </blockquote>
          </div>

          <div class="item">
            <blockquote class="block-testimonial">

              <p>
                مؤسسسة عزاوي سكول استفاد اولادنا منها ونفتخر بها و نشكر كل الطاقم الاداري القائم عليها . كل
                الشكر و التقدير لكم
              </p>
              <div class="author">
                <img src="images/baki.png" alt="Free template by TemplateUX">
                <h3>م. عبدالباقي
                </h3>
                {{-- <p class="position">Designer at Facebook</p> --}}
              </div>
            </blockquote>
          </div>

          <div class="item">
            <blockquote class="block-testimonial">

              <p>
                ولي ميعرفوهاش الناس انكم بالإضافة للتعلم كاين المعاملة لي يحظى بها التلميذ ولي تخلي عنده
                انطباع جميل تجاهكم ولي تحببه في الدراسة ليوم صباح ولدي قبل ميروح وبكل عفوية يستذكر معاملة المدير لهم عند
                الخروج من المؤسسة وحكهالي بكل عاطفة وكان سعيد المعاملة نتاعه معاهم لذلك نهنئكم سيدي المدير علي نجاحك في
                تربع في قلوب البراءة
              </p>
              <div class="author">
                <img src="images/am.png" alt="Free template by TemplateUX">
                <h3>أ.امجد</h3>
                {{-- <p class="position">Product Designer at Twitter</p> --}}
              </div>
            </blockquote>
          </div>


          <div class="item">
            <blockquote class="block-testimonial">

              <p>
                École au top ! Accueil chaleureux, équipe sympathique . Je recommande vivement !
              </p>
              <div class="author">
                <img src="images/bchra.png" alt="Free template by TemplateUX">
                <h3>
                  B.Bochra

                </h3>
                {{-- <p class="position">Designer at Facebook</p> --}}
              </div>
            </blockquote>
          </div>



        </div>

      </div>
    </div>
  </div>
</div>


@endsection