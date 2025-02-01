@extends('master.master')
@section('content')    





{{-- section1 --}}
<div class="untree_co-hero overlay" style="background-image: url('images/hero3.png');" loading="lazy">
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


<div class="untree_co-section" style="padding-top: 70px;">
  <div class="container">
    <div class="row-card justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
          لماذا تجتاز اختبار تحديد المستوى اللغوي؟
        </h2>

      </div>
    </div>
    <div class="row-card" style="gap: 20px">
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
            تحقيق أهدافك بكل ثقة

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






<div class="services-section">
  <div class="container">




    <div class="e-card playing">
      <div class="image">
        <img src="images/cefr-logo.png" alt="Card Image"
          style="position: relative;background-color: #2a6bf6;z-index: 1;" loading="lazy" />
      </div>

      <div class="infotop">
        <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 1350.000000 1350.000000" height="250" width="250"
          xmlns="http://www.w3.org/2000/svg" version="1.0">
          <g stroke="none" fill="#00ff80" transform="translate(0.000000,1350.000000) scale(0.100000,-0.100000)">

          </g>
        </svg>
      </div>
    </div>




    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4" style="font-family: 'Almarai', serif;">
          على ماذا نعتمد في اختباراتنا
        </h2>
        <p>

          في العزاوي سكول، نعتمد الإطار الأوروبي المرجعي العام للغات (CEFR) لتصنيف
          المستويات اللغوية، مع التركيز على تطوير المهارات الأربعة الأساسية (الاستماع، التحدث، القراءة، الكتابة)،
          بالإضافة إلى إتقان القواعد (Grammar)، لضمان تعليم متكامل ومهني يلبي احتياجات جميع المتعلمين.



        </p>

      </div>
    </div>

    <div class="row-card">
      <!-- Card for A1 Level -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="level-circle">A1</div>
          <div class="infotopp-card">
            <h3>مبتدئ A1</h3>
            <p>بداية رحلتك اللغوية بتعلم التعابير الأساسية مثل التحيات، التعريف بالنفس، والتواصل في مواقف يومية
              بسيطة.</p>
          </div>
        </div>
      </div>

      <!-- Card for A2 Level -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="level-circle">A2</div>
          <div class="infotopp-card">
            <h3>ماقبل المتوسط A2</h3>
            <p>تطوير فهم العبارات والجمل المتعلقة بالحياة اليومية والعمل، مع القدرة على الحديث عن الروتين
              والاحتياجات الشخصية.</p>
          </div>
        </div>
      </div>

      <!-- Card for B1 Level -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="level-circle">B1</div>
          <div class="infotopp-card">
            <h3>متوسط B1</h3>
            <p>القدرة على التعامل مع مواقف معقدة نسبيًا، مثل الحديث عن تجاربك وأهدافك، كتابة رسائل رسمية، والمشاركة
              في نقاشات.</p>
          </div>
        </div>
      </div>

      <!-- Card for B1 Level -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="level-circle">B1</div>
          <div class="infotopp-card">
            <h3>مستوى مافوق المتوسط B1</h3>
            <p>


              تحقيق طلاقة في التحدث والنقاش حول مواضيع متنوعة، مع تحسين الدقة اللغوية باستخدام القواعد المعقدة مثل
              أسلوب الربط بين الجمل، المبني للمجهول، والصيغ الشرطية المتقدمة.

            </p>
          </div>
        </div>
      </div>

      <!-- Card for B1 Level -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="level-circle">C1</div>
          <div class="infotopp-card">
            <h3>المستوى المتقدم C1</h3>
            <p>

              استخدام اللغة بمرونة ودقة للتعبير عن أفكارك في المواضيع الأكاديمية والمهنية، مع فهم التفاصيل الدقيقة
              في النصوص المعقدة. في هذا المستوى، يتم تعلم تراكيب الجمل المعقدة، الاستخدام الرسمي للغة، والصيغ
              المتخصصة.

            </p>
          </div>
        </div>
      </div>

      <!-- Card for B1 Level -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="level-circle">C2</div>
          <div class="infotopp-card">
            <h3>مستوى الإتقان C2</h3>
            <P>
              إتقان شامل للغة والقواعد، مما يتيح التحدث والكتابة بطلاقة تعكس فهمًا عميقًا للغة، بما يشمل أدق
              التفاصيل والتعابير الضمنية.
            </P>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>







@endsection