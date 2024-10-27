@extends('master.master')

@section('content')
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('images/img-school-1-min.jpg') }}');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">الدورات</h1>
                        <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                            <p>اكتسب المهارات التي تحتاجها لتحقيق النجاح وتفوق في مجالك مع دوراتنا المتخصصة! احجز مكانك الآن واستثمر في مستقبلك</p>
                        </div>
                        <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">استكشاف الدورات</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
            <img src="{{ asset('images/img-school-4-min.jpg')}}" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->
    <div class="course-details">
        <h1>{{ $courses->course_name }}</h1>
        <p>{{ $courses->course_teacher }}</p>
        <p>Price: ${{ $courses->course_price }}</p>
    </div>
@endsection
