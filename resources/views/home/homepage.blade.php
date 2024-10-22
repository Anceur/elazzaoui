<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
@extends('master.master')  

@section('content')


  <div class="untree_co-hero overlay" style="background-image: url('images/hero-img-1-min.jpg');">


    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="col-12">

          <div class="row justify-content-center ">

            <div class="col-lg-6 text-center ">
              <a  data-fancybox data-aos="fade-up" data-aos-delay="0" class="caption mb-4 d-inline-block">مرحبا بكم في مدرسة العزاوي </a>

              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">اشترِك في منصتنا وغيّر مستقبلك نحو الأفضل</h1>

              <div class="button-container">
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="{{url('/contact')}}" class="btn btn-secondary">اتصال بنا</a></p>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="{{url('/login')}}" class="btn btn-secondary">التسجيل المسبق</a></p>
              </div>
            </div>

          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->


  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4" style="font-family: 'Amiri', serif;">تصفح مميزات المدرسة</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-atom"></i>
            </div>
            <div>
              <h3>خدمات</h3>
              <span>7,291 دورات</span>

            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-briefcase"></i>
            </div>
            <div>
              <h3>الدورات</h3>
              <span>7,291 دورات</span>

            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-books"></i>
            </div>
            <div>
              <h3>موارد الهيئة التعليمية </h3>
              <span>7,291 دورات</span>

            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-pen"></i>
            </div>
            <div>
              <h3>أدوات المشاركة والتفاعل</h3>
              <span>7,291 دورات</span>
            </div>
          </a>
        </div>


        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-puzzle-piece"></i>
            </div>
            <div>
              <h3>الابتكار والتطوير</h3>
              <span>7,291 دورات</span>

            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-chart-pie"></i>
            </div>
            <div>
              <h3>الأخبار والإعلانات</h3>
              <span>7,291 دورات</span>

            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-newspaper"></i>
            </div>
            <div>
              <h3>صحيفة المدرسة</h3>
              <span>7,291 دورات</span>

            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-circle-layer"></i>
            </div>
            <div>
              <h3>الأحداث</h3>
              <span>7,291 دورات</span>

            </div>
          </a>
        </div>
      
      </div>
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
        <div class="col-lg-8 text-center">
          <p>لدينا المزيد من الفئات هنا. <a href="#">تصفح الكل</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="services-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0" style="text-align: right;">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4" style=" font-family: 'Amiri', serif;" >كن مدرسًا</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">مدرستنا الخاصة تتميز بتقديم تعليم متميز في المواد الأجنبية والدورات المتخصصة، مما يتيح للطلاب فرصة اكتساب مهارات عالمية. نسعى من خلال مناهجنا المتطورة وبرامجنا الخاصة إلى تعزيز قدرات الطلاب في اللغات الأجنبية مثل الإنجليزية والفرنسية، إلى جانب توفير دورات متخصصة تلبي احتياجاتكم </p>

          <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>دورات عبر الانترنت</li>
            <li>دراسة عن بعد</li>
            <li>اضافة الى شهادات واعتمادات احترافية</li>
          </ul>

          <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">إحصل عليه</a></p>

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-2">
            <img src="images/teacher-min.jpg" alt="Image" class="img-fluid">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div>



  <div class="untree_co-section">
    <div class="container"> 
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4" style=" font-family: 'Amiri', serif;">لدينا أفضل تعليم</h2>
          <p>نحن نقدم أفضل تجربة تعليمية متميزة، حيث نحرص على توفير بيئة تعليمية محفزة ومشوقة تجمع بين الابتكار والجودة. بفضل فريقنا التعليمي المؤهل وبرامجنا الأكاديمية المتطورة،</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature">
            <span class="uil uil-graduation-cap"></span>
            <h3>دورات خاصة</h3>
            <p>تُعتبر الدورات الخاصة من أفضل الخيارات للتعلم والتطوير الذاتي، حيث توفر للمتدربين فرصة الحصول على تعليم مخصص يتناسب مع احتياجاتهم الفردية</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-laptop"></span>
            <h3>دراسة عن بعد</h3>
            <p>  تعتبر الدراسة عن بعد من الطرق الحديثة والمبتكرة للتعليم تعتمد هذه الطريقة على تقنيات التعليم الإلكتروني مما يسمح للطلاب بالوصول إلى المحاضرات والمواد الدراسية عبر الإنترنت</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-shopping-cart"></span>
            <h3>متجر خاص بالمدرسة</h3>
            <p>يمثل المتجر الخاص بالمدرسة لبيع الكتب عبر الإنترنت حلاً مثالياً للطلاب والمعلمين الذين يسعون للحصول على مصادر تعليمية بسهولة ويسر</p>
          </div>
        </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->


  <div class="untree_co-section bg-light">
    <div class="container"> 
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4" style=" font-family: 'Amiri', serif;">الدورة التدريبية المناسبة لك</h2>
          <p>اختيار الدورة التدريبية المناسبة لك هو خطوة حيوية نحو تحقيق أهدافك التعليمية والمهنية. نحن نقدم مجموعة متنوعة من الدورات التدريبية التي تتناسب مع اهتماماتك واحتياجاتك الفردية</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body" style="text-align: right;">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>دورة اللغة الفرنسية</h3>
              <p class="mb-4">تقدم الدورة مواد مبسطة ومناسبة لجميع المستويات، من المبتدئين إلى المتقدمين.              </p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">15000 DA</span></div>
                <div><a href="#">تعلم أكثر</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body " style="text-align: right;">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>دورة اللغة الانجليزية</h3>
              <p class="mb-4">تقدم الدورة مواد مبسطة ومناسبة لجميع المستويات، من المبتدئين إلى المتقدمين.              </p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">12000 DA</span></div>
                <div><a href="#">تعلم أكثر</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body" style="text-align: right;">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>دورة اللغة الاسبانية</h3>
              <p class="mb-4">تقدم الدورة مواد مبسطة ومناسبة لجميع المستويات، من المبتدئين إلى المتقدمين.        </p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">13000 DA</span></div>
                <div><a href="#">تعلم أكثر</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400" >
      <div class="col-lg-8 text-center" style="padding-top: 66px;">
        <p>لدينا المزيد من دورات هنا. <a href="#">تصفح الكل</a></p>
      </div>
    </div>
  </div>

  <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('images/img-school-1-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">التعليم لقادة الغد</h2>
          <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">نؤمن بأن التعليم هو المفتاح لتشكيل قادة الغد. في مؤسستنا، نقدم برامج تعليمية متقدمة تركز على تنمية المهارات القيادية والتفكير النقدي لدى الطلاب. نعمل على تحفيزهم على الابتكار وتطوير قدراتهم على حل المشكلات، مما يعدهم لمواجهة التحديات المستقبلية. من خلال تجارب تعليمية متنوعة ومناهج تفاعلية، نسعى إلى تعزيز القيم الأساسية مثل التعاون، والمسؤولية، والمبادرة. نحن نؤمن بأن قادة الغد هم أولئك الذين يتمتعون بالمعرفة والثقة لإحداث تأثير إيجابي في مجتمعاتهم</p>
          <p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">سجل الآن</a></p>
        </div>
      </div>
    </div>  
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5" style="text-align: right">
          <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0" style="font-family: 'Amiri', serif;">معلومات عنا</h2>
          <p data-aos="fade-up" data-aos-delay="100">نحن مدرسة خاصة تلتزم بتقديم تعليم عالي الجودة يتسم بالابتكار والشمولية. تأسست مدرستنا على رؤية واضحة تهدف إلى تطوير مهارات الطلاب الأكاديمية والاجتماعية، من خلال برامج تعليمية متكاملة تشمل المواد الأكاديمية الأساسية والدورات الخاصة في مجالات متعددة. فريقنا التعليمي يتكون من معلمين مؤهلين وذوي خبرة، يعملون بشغف على إلهام الطلاب وتحفيزهم على تحقيق أقصى إمكاناتهم. نحن نؤمن بأن كل طالب فريد من نوعه، لذلك نقدم بيئة تعليمية تتيح لهم اكتشاف مهاراتهم واهتماماتهم، مما يعزز ثقتهم بأنفسهم ويعدهم لمواجهة التحديات المستقبلية.
          </p>
          <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>برامج تعليمية شاملة</li>
            <li>فريق تعليمي متميز</li>
            <li>بيئة تعليمية محفزة</li>
          </ul>

          <div class="row count-numbers mb-5">
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
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="btn btn-primary mr-1">قبول</a>
            <a href="#" class="btn btn-outline-primary">تعلم أكثر</a>
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-1"></div>
          <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
            <span class="play-wrap"><span class="icon-play"></span></span>
            <img src="images/img-school-4-min.jpg" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4" style="font-family: 'Amiri', serif;">اخبار المدرسة</h2>
          <p>نحن في مدرسة مدرسة العزاوي نحرص على إبقاء مجتمعنا المدرسي على اطلاع دائم بأحدث الأخبار والمستجدات. نقدم تقارير دورية عن الأنشطة والمناسبات التي تُقام داخل المدرسة، مثل مهرجانات العلوم، وفعاليات الثقافة والفنون، بالإضافة إلى النجاحات الأكاديمية التي يحققها طلابنا. كما نشارك أخبار الشراكات المجتمعية التي نطورها مع المؤسسات المحلية، مما يوفر لطلابنا فرصًا لاكتساب المهارات العملية والخبرات القيمة. يمكن للآباء والطلاب متابعة هذه الأخبار من خلال موقعنا الإلكتروني أو وسائل التواصل الاجتماعي، حيث نسعى دائمًا لتعزيز التواصل بين المدرسة وأولياء الأمور والمجتمع.
          </p>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="images/img-school-1-min.jpg" alt="Image">
            </figure>
            <div class="media-h-body" style="text-align: right">
              <h2 class="mb-3"><a href="#" >التعليم لقادة الغد</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>معًا نُعد قادة الغد بالمهارات والمعرفة التي يحتاجونها لصنع التغيير</p>
              <p><a href="#" style="text-align: right">تعلم أكثر</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="200">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="images/img-school-2-min.jpg" alt="Image">
            </figure>
            <div class="media-h-body" style="text-align: right">
              <h2 class="mb-3"><a href="#" >سجل أطفالك هذا الصيف للحصول على خصم %30</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>سجل أطفالك هذا الصيف واحصل على خصم خاص لمستقبل مليء بالمرح والتعلم</p>
              <p><a href="#" >تعلم أكثر</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->


  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">حقوق الاشتراك</h2>
          <p>تتيح حقوق الاشتراك في مدرستنا للطلاب وأولياء الأمور المشاركة الفعالة في الحياة المدرسية والمساهمة في تطوير البيئة التعليمية. تشمل هذه الحقوق حق الحصول على معلومات شاملة حول البرامج الدراسية والأنشطة الإضافية، بالإضافة إلى إمكانية المشاركة في الاجتماعات والمناسبات المدرسية. نحن نؤمن بأهمية التواصل المفتوح، لذا نوفر قنوات متعددة تتيح للطلاب وأولياء الأمور التعبير عن آرائهم ومقترحاتهم. كما يتمتع أولياء الأمور بحقوق المشاركة في اتخاذ القرارات المتعلقة بالتوجيهات التعليمية، مما يعزز من دورهم كمساهمين في نجاح أبنائهم وتطوير المدرسة بشكل عام.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-1.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Starter</h3>
              <div class="price"><span class="fig">$50.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              
              <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-2.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Business</h3>
              <div class="price"><span class="fig">$99.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              
              <p><a href="#" class="btn btn-primary">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-3.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Premium</h3>
              <div class="price"><span class="fig">$199.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              
              <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->



  <div class="untree_co-section">


    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="0">
          <img src="images/img-school-5-min.jpg" alt="image" class="img-fluid">
        </div>
        <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="line-bottom mb-4" style=" font-family: 'Amiri', serif;">لماذا تختارنا؟</h3>
          <p>اختيار مدرستنا يعني الانضمام إلى مجتمع تعليمي يركز على التميز والابتكار. نحن نقدم برامج تعليمية شاملة تتناسب مع احتياجات كل طالب</p>

          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">معلمين وموظفين جيدين</button>
              </h2>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>نحن نفخر بوجود فريق من المعلمين والموظفين ذوي الكفاءة العالية والشغف بالتعليم. يتمتع كل معلم بخبرة واسعة في مجاله، مما يضمن تقديم تعليم متميز واحترافي للطلاب.</p>
                      <p>يعمل فريقنا بتعاون وثيق مع الطلاب وأولياء الأمور لتوفير الدعم والمساعدة اللازمة لتحقيق النجاح الأكاديمي. نحن ملتزمون بتعزيز بيئة تعليمية إيجابية تشجع على التعلم والنمو الشخصي، مما يساهم في تطوير جيل مبدع وناجح.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">نحن نقدم أحسن دورات</button>
              </h2>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>نحن نقدم أفضل الدورات التدريبية التي تركز على تلبية احتياجات الطلاب وتطوير مهاراتهم في مجالات متعددة. تشمل دوراتنا مجموعة متنوعة من المواضيع</p>
                      <p>نحن نحرص على تقديم محتوى تعليمي حديث وعملي، بالإضافة إلى بيئة تعليمية تشجع على التفاعل والمشاركة. انضم إلينا واستفد من فرص التعلم التي تفتح أمامك آفاق جديدة</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            {{-- <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Your Children are Safe</button>
              </h2>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                      <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- .accordion-item --> --}}

          </div>

        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->


  @endsection