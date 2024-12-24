

@extends('master2.master2')

@section('content')
<div class="course-details-page">
    <div class="container bg-1" style="padding: 15% 5% 0% 5%">
        <div class="row" style="display: flex; justify-content: flex-end;">
            <!-- قسم الشريط الجانبي الأيمن -->
            <div class="course-sidebar col-lg-4" data-aos="fade-up" id="sidebar">
                <div class="course-preview">
                    <a href="{{ asset('storage/' . $courses->course_video) }}" class="preview-video-link">
                        <img src="{{ asset('storage/'. $courses->course_photo)}}" alt="معاينة الدورة" class="img-fluid rounded">
                        <span class="play-icon">▶</span>
                    </a>
                </div>
                
                <div class="tab-container">
                    {{-- <button class="tab-button active">شخصي</button>
                    <button class="tab-button">فريق</button> --}}
                </div>
                <div class="pricing-section">
                    {{-- @if(Auth::check())
                    <!-- إذا كان المستخدم مسجلاً، توجيهه إلى صفحة الدفع -->
                    <a href="{{ url('payment') }}" class="btn btn-primary enroll-btn">Try Personal Plan for free</a>
                @else
                    <!-- إذا كان المستخدم غير مسجل، توجيهه إلى صفحة التسجيل -->
                    <a href="{{ url('register') }}" class="btn btn-primary enroll-btn">Try Personal Plan for free</a>
                @endif --}}
                    {{-- <p class="price">{{ $courses->course_price }} DA</p>
                    <a href="{{ route('courses.playlist', $courses->id) }}" class="btn-1 btn-primary enroll-btn">جرّب الخطة الشخصية مجانًا</a>
 --}}
 <p class="price">{{ $courses->course_price }} DA</p>

@if(Auth::check())
    <!-- إذا كان المستخدم مسجلاً، توجيهه إلى صفحة الدفع -->
    <a href="{{ route('courses.playlist', $courses->id) }}" class="btn-1 btn-primary enroll-btn">جرّب الخطة الشخصية مجانًا</a>
@else
    <!-- إذا كان المستخدم غير مسجل، توجيهه إلى صفحة التسجيل -->
    <a href="{{ url('register') }}" class="btn-1 btn-primary enroll-btn">جرّب الخطة الشخصية مجانًا</a>
@endif


                    {{-- <p class="price-details">تبدأ من €15.00 شهريًا بعد الفترة التجريبية</p> --}}
                </div>
                {{-- <div class="subscription-info">
                    <p>احصل على هذه الدورة، بالإضافة إلى أكثر من 12,000 دورة عالية التقييم، مع الخطة الشخصية. <a href="#">اعرف المزيد</a></p>
                </div> --}}
            </div>

            <!-- قسم المحتوى الأيسر -->
            <div class="col-lg-8 course-content">
                <h1 class="course-title">{{ $courses->course_name }}</h1>
                <p class="course-subtitle">{{ $courses->course_description }}</p>
                <div class="course-rating">
                    <span class="badge badge-success">الأكثر مبيعًا</span>
                    <span class="rating">{{ $courses->rating }}</span>
                    {{-- <span class="star-rating">★★★★☆</span>
                    <a href="#" class="ratings-count">(330,788 تقييم)</a> --}}
                    <span class="students-count">{{ $courses->enrollment_count }}</span>
                </div>
                <p class="course-author">من إعداد {{ $courses->course_teacher }}</p>
                
                <!-- قسم "ما ستتعلمه" -->
                <!-- تفاصيل الدورة -->
                <div class="course-details">
                    {{-- <span class="course-meta-item">آخر تحديث 10/2024</span> ·  --}}
                    <span class="course-meta-item">{{ $courses->course_name }}</span> · 
                    {{-- <span class="course-meta-item">14 لغة أخرى</span> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<section class="learn-section">

    <div class="learn-content" style="direction: ltr; unicode-bidi: bidi-override;">
        <h3>ما الذي ستتعلمه</h3>
     
        @if($courses->course_details)
        <ul class="sa">
            @foreach(explode("\n", $courses->course_details) as $detail)
                <ol>{{ $detail }}</ol>
            @endforeach
        </ul>
    @endif
    
   
    </div>

    

    
    <section class="course-includes">
        <h3>تشمل هذه الدورة:</h3>
        <div class="includes-list">
            {{-- <div class="include-item">
                <p>52 ساعة من الفيديو حسب الطلب</p>
                <span>🎥</span>
            </div> --}}
            {{-- <div class="include-item">
                <p>23 تمرين برمجي</p>
                <span>💻</span>
            </div> --}}
            {{-- <div class="include-item">
                <p>واجبات</p>
                <span>📄</span>
            </div> --}}
            {{-- <div class="include-item">
                <p>225 مقال</p>
                <span>📚</span>
            </div> --}}
            {{-- <div class="include-item">
                <p>150 مورد قابل للتنزيل</p>
                <span>📂</span>
            </div> --}}
            <div class="include-item">
                <div class="include-item-dts">
                <p>الوصول عبر الجوال والتلفاز</p>
                <span>📱</span>
                </div>
            </div>
            <div class="include-item">
                <div class="include-item-dts">
                <p>شهادة إتمام</p>
                <span>🏆</span>
                </div>
            </div>
        </div>
    
        <div class="companies-offer">
            <h4>أهم الشركات تقدم هذه الدورة لموظفيها</h4>
            <p>تم اختيار هذه الدورة لمجموعتنا من الدورات الأعلى تقييمًا التي تثق بها الشركات حول العالم. <a href="#">اعرف المزيد</a></p>
            {{-- <div class="companies-logos">
                <img src="{{ asset('images/nasdaq-logo.png') }}" alt="ناسداك">
                <img src="{{ asset('images/volkswagen-logo.png') }}" alt="فولكس فاجن">
                <img src="{{ asset('images/box-logo.png') }}" alt="بوكس">
                <img src="{{ asset('images/netapp-logo.png') }}" alt="نت آب">
                <img src="{{ asset('images/eventbrite-logo.png') }}" alt="إيفنتبرايت">
            </div> --}}
        </div>
    </section>
    
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true
    });
</script>
@endsection
