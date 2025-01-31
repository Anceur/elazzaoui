@extends('master.master')  

@section('content')


<div class="untree_co-hero overlay" style="background-image: url('images/hero6.png'); background-position: 70%; "
  loading="lazy">


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
        <p>تأسست “العزاوي سكوول” في 01 نوفمبر 2018 لتكون بذلك أول مؤسسة تعليم اللغات الأجنبية بفرندة "تيارت"، حيث
          استلهمت رؤيتها
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
          <br>

          على مدار مسيرتنا، ساهمنا في تكوين المئات من طلبة اللغات وحققنا نجاحات متميزة، منها الحصول على المراتب الأولى
          في مسابقات السوروبان، مما يعكس التزامنا بتقديم تعليم عالي الجودة ونتائج ملموسة.


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


<div class="untree_co-hero overlay" style="background-image: url('images/hero2.png'); " loading="lazy">
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




<div class="untree_co-section bg-light" style="padding-top:60px ">
  <div class="container-slider">
    <div class="slider-container">
      <div class="slider-header">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">اختر برنامجك</h2>
        <p>اختر من بين برامجنا المتنوعة التي تلبي احتياجاتك التعليمية، سواء كانت دورات مكثفة أو عادية، مع اختبارات دورية
          ونهائية لقياس تقدمك وضمان تحقيق أهدافك اللغوية.</p>
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


            <p>الفئة العمرية من 7 إلى 10 سنة
              للغتين الإنجليزية والفرنسية على 4 مستويات:

              التحدث: تعلم التعبير عن الأفكار في محادثات بسيطة.
              الاستماع: فهم المحادثات والنصوص القصيرة.
              القراءة: قراءة نصوص وفهم المعاني.
              الكتابة: كتابة نصوص قصيرة مثل الرسائل البسيطة.

              <br>

              - المستوى A1.1: يشمل 48 ساعة دراسية.
              - المستوى A1.2: يشمل 48 ساعة دراسية.
              - المستوى A2.1: يشمل 48 ساعة دراسية.
              - المستوى A2.2: يشمل 48 ساعة دراسية.
              <br>
              الدورات تشمل حصتين أسبوعياً، كل حصة ساعتين.

            </p>
            <a href="https://wa.me/2130660979865" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>
          </div>
        </div>

        <div id="popup2" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imageone.png" alt="دورات اللغات الأجنبية للناشئين"> --}}
            <h3>دورات اللغات الأجنبية للناشئين</h3>
            {{-- <span class="price">2500 دج/شهر</span> --}}

            <p>الفئة العمرية من 11 إلى 15 سنة

              يتم تعليم اللغتين الإنجليزية والفرنسية على 4 مستويات:

              <br>

              التحدث: تعلم التعبير عن الأفكار بثقة في محادثات متنوعة.
              الاستماع: فهم النصوص والمحادثات البسيطة والمعقدة.
              القراءة: تحسين قدرة القراءة وفهم نصوص متنوعة.
              الكتابة: كتابة نصوص دقيقة مثل الرسائل والمقالات مع التركيز على القواعد.

              <br>

              - المستوى A1: يشمل 52 ساعة دراسية.
              - المستوى A2: يشمل 52 ساعة دراسية.
              - المستوى B1.1: يشمل 52 ساعة دراسية.
              - المستوى B1.2: يشمل 52 ساعة دراسية.
              <br>
              الدورات تشمل حصتين أسبوعياً، كل حصة ساعتين.
            </p>
            <a href="https://wa.me/2130660979865" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>
          </div>
        </div>

        <div id="popup3" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagefour.png" alt="دورات اللغات الأجنبية للكبار "> --}}
            <h3>دورات اللغات الأجنبية للكبار "برنامج عادي"</h3>
            {{-- <span class="price">3000 دج/شهر</span> --}}

            <p>الفئة العمرية 16 سنة و أكثر

              يتم تعليم اللغات الإنجليزية،الفرنسية، الألمانية، الإسبانية، التركية ،الروسية و الإطالية على 4 مستويات:
              <br>
              التحدث: التعبير عن الأفكار بثقة في محادثات متنوعة.
              الاستماع: فهم النصوص والمحادثات البسيطة والمعقدة.
              القراءة: تطوير قدرة قراءة وفهم نصوص متنوعة.
              الكتابة: كتابة نصوص دقيقة مثل الإيميلات والمقالات مع التركيز على القواعد.
              <br>
              - المستوى A1: يشمل 60 ساعة دراسية.
              - المستوى A2: يشمل 60 ساعة دراسية.
              - المستوى B1: يشمل 120 ساعة دراسية.
              - المستوى B2: يشمل 120 ساعة دراسية.
              <br>
              الدورات تشمل حصتين أسبوعياً، كل حصة ساعتين.
            </p>
            <a href="https://wa.me/2130660979865" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>
          </div>
        </div>

        <div id="popup4" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagethree.png" alt="دورات اللغات الأجنبية للكبار "> --}}
            <h3>دورات اللغات الأجنبية للكبار "برنامج مكثف"</h3>
            {{-- <span class="price">8200 دج/شهر</span> --}}

            <p>الفئة العمرية 16 سنة و أكثر

              يتم تعليم اللغتين الإنجليزية،الفرنسية على 4 مستويات:
              <br>
              التحدث: التعبير عن الأفكار بثقة في محادثات متنوعة.
              الاستماع: فهم النصوص والمحادثات البسيطة والمعقدة.
              القراءة: تطوير قدرة قراءة وفهم نصوص متنوعة.
              الكتابة: كتابة نصوص دقيقة مثل الإيميلات والمقالات مع التركيز على القواعد.
              <br>

              - المستوى A1: يشمل 60 ساعة دراسية.
              - المستوى A2: يشمل 60 ساعة دراسية.
              - المستوى B1: يشمل 120 ساعة دراسية.
              - المستوى B2: يشمل 120 ساعة دراسية.
              <br>
              الدورات تشمل 4 حصص أسبوعياً، كل حصة  3 ساعات.
            </p>
            <a href="https://wa.me/2130660979865" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>
          </div>
        </div>

        <div id="popup5" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagefive.png" alt="ورشات تحسين"> --}}
            <h3>ورشات تحسين الخط والكتابة</h3>
            {{-- <span class="price">2000 دج/شهر</span> --}}

            <p>الفئة العمرية من 7 إلى 10 سنة
              الثمن 2000دج/8حصص
              تهدف الورشة إلى تحسين جودة الكتابة اليدوية، وتعليم الأطفال الكتابة بخط واضح ومرتب، بالإضافة إلى تحسين
              مهارات الإملاء. كما تساهم في تعزيز تركيز الطلاب وقدرتهم على التعبير الكتابي بطريقة دقيقة وواضحة.
              الورشة قابلة للتجديد حسب احتياجات الطالب.

              <br>
              ورشة تحسين الخط، الكتابة، الإملاء والتعبير باللغة العربية. تتضمن 8 حصص شهريًا.
              <br>
              تتضمن هذه الدورة في البرامج العادية حصتين أسبوعياً ،كل حصة تستغرق ساعتين.
            </p>
            <a href="https://wa.me/2130660979865" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>
          </div>
        </div>



        <div id="popup6" class="popup">
          <div class="popup-content">
            <span class="close-btn">&times;</span>
            {{-- <img src="images/imagefive.png" alt="ورشات تحسين"> --}}
            <h3>دورات الحساب الذهني (سروبان)</h3>
            {{-- <span class="price">2500 دج/شهر</span> --}}

            <p>

              تهدف هذه الدورة إلى تحسين مهارات الحساب الذهني، مما يعزز دقة وسرعة العمليات الحسابية. كما تسهم في تنمية
              التركيز والذاكرة، بالإضافة إلى تقوية مهارات التفكير المنطقي وحل المشكلات. تساعد الدورة أيضًا في رفع الثقة
              بالنفس وتحقيق نتائج أكاديمية ممتازة. وفي نهاية كل مستوى، يحصل الطالب على شهادة إثبات مستوى بعد اجتيازه
              الاختبار النهائي.

              <br>
              تتضمن 6 مستويات، كل مستوى يتطلب 48 ساعة من التدريب.
              <br>

              تتضمن هذه الدورة في البرامج العادية حصتين أسبوعياً ،كل حصة تستغرق ساعتين.


            </p>
            <a href="https://wa.me/2130660979865" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>
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

            <p>

              الفئة العمرية جميع الفئات العمرية
              الثمن 900دج/ساعة

              <br>
              تتيح الحصص الفردية فرصة لتعلم اللغات (الإنجليزية، الفرنسية، الألمانية، الإسبانية، التركية ،الروسية و
              الإطالية) بشكل مخصص حسب احتياجاتك، مع التركيز على تطوير المهارات المطلوبة مثل المحادثة أو الكتابة. يتم
              تصميم كل برنامج ليتناسب مع مستواك و إحتياجك ، مما يضمن تقدمًا سريعًا وفعّالًا تحت إشراف مدربين متخصصين.
              هذه الدورات يمكن أن تقدم للأشخاص أو للمؤسسات.

            </p>
            <a href="https://wa.me/2130559180536" class="whatsapp-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> تواصل عبر الواتساب
            </a>
          </div>
        </div>

      </div>

      <div class="next-prev" style="display: flex; justify-content: center ;position: relative;
    text-align: center;
    padding-top: 10px;">

        <div class="slider-dots"></div>
      </div>

    </div>
  </div>




  <div class="untree_co-section" style="    padding-top: 120px;
    padding-bottom: 100px;">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5" style="text-align: right">
          <h1 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0"
            style="font-family: 'Almarai', serif;text-align: right;">رؤية
            العزاوي سكوول</h1>
          <p data-aos="fade-up" data-aos-delay="100"> الخيار الأول لتعلم اللغات في المنطقة، مستندين إلى شراكتنا بين
            المعرفة الأكاديمية والابتكار التقني. هدفنا هو توفير تجربة تعليمية ملهمة تُحفّز فضول المتعلمين وتفتح أمامهم
            آفاقًا جديدة للنجاح على المستويين الشخصي والمهني. كما أننا نطمح إلى التوسع المستقبلي عبر فتح فروع جديدة في
            المدن المجاورة وفي مختلف أنحاء الجزائر، لضمان وصول خدماتنا إلى أكبر عدد ممكن من المتعلمين. نواصل تعزيز
            مكتبتنا وتوسيعها لتوفير المزيد من الموارد الثقافية والمعرفية لطلبتنا. كما نحرص على تنفيذ برامج تعكس
            مسؤوليتنا الاجتماعية، مثل المبادرات البيئية، إضافة إلى تقديم دورات تعليمية متنوعة تهدف إلى تزويد طلابنا
            بمهارات تواكب تحديات المستقبل. </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-1"></div>

          <!-- Video Container -->
          <div class="video-wrap" id="videoContainer">
            <video id="videoPlayer" poster="images/img.png">
              <source src="images/elazzaoui.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>

            <!-- Play Button -->
            <span class="play-wrap" id="playButton">
              <span class="icon-play"></span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive-container-block bg">
    <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">واش قالوا علينا</h2>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="responsive-container-block content">
            <p class="text-blk quotes">“</p>
            <img class="image-block profile-image" src="images/ay.png">
            <p class="text-blk name">ر.أية</p>
            <p class="text-blk info">
              "بفضل مدرستكم وطاقمها اننا نلاحظ تقدما ملحوظا في الاقبال على تعلم اللغات الابناء فرندة مزيدا من التألق
              والتميز وشكرا لكم على مجهوداتكم سي علي ميسوم."
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="responsive-container-block content">
            <p class="text-blk quotes">“</p>
            <img class="image-block profile-image" src="images/baki.png">
            <p class="text-blk name">م. عبدالباقي</p>
            <p class="text-blk info">
              "مؤسسة عزاوي سكول استفاد أولادنا منها ونفتخر بها ونشكر كل الطاقم الإداري القائم عليها. كل الشكر والتقدير
              لكم."
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="responsive-container-block content">
            <p class="text-blk quotes">“</p>
            <img class="image-block profile-image" src="images/am.png">
            <p class="text-blk name">أ.امجد</p>
            <p class="text-blk info">
              "ولي ميعرفوهاش الناس أنكم بالإضافة للتعلم، كاين المعاملة لي يحظى بها التلميذ ولي تخلي عنده انطباع جميل
              تجاهكم ولي تحببه في الدراسة."
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const video = document.getElementById("videoPlayer");
    const playButton = document.getElementById("playButton");
    const videoContainer = document.getElementById("videoContainer");

    videoContainer.addEventListener("click", function () {
      if (video.paused) {
        video.play();
        playButton.classList.add("hidden");
      } else {
        video.pause();
        playButton.classList.remove("hidden");
      }
    });

    // Show play button when video ends
    video.addEventListener("ended", function () {
      playButton.classList.remove("hidden");
    });
  </script>
  <script>
    var swiper = new Swiper(`.mySwiper`, {
      slidesPerView: 3,
      spaceBetween: 5,
      pagination: {
        el: `.swiper-pagination`,
        clickable: true,
      },
      breakpoints: {

        300: {
          slidesPerView: 1
        },

        501: {
          slidesPerView: 1
        },

        769: {
          slidesPerView: 1.20,
          spaceBetween: 10
        },
        1025: {
          slidesPerView: 1.15,
          spaceBetween: 10
        },
      }
    });
  </script>


  @endsection