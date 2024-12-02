

@extends('master.master')

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
                    <button class="tab-button active">شخصي</button>
                    <button class="tab-button">فريق</button>
                </div>
                <div class="pricing-section">
                    {{-- @if(Auth::check())
                    <!-- إذا كان المستخدم مسجلاً، توجيهه إلى صفحة الدفع -->
                    <a href="{{ url('payment') }}" class="btn btn-primary enroll-btn">Try Personal Plan for free</a>
                @else
                    <!-- إذا كان المستخدم غير مسجل، توجيهه إلى صفحة التسجيل -->
                    <a href="{{ url('register') }}" class="btn btn-primary enroll-btn">Try Personal Plan for free</a>
                @endif --}}
                    <p class="price">${{ $courses->course_price }}</p>
                    <a href="" class="btn-1 btn-primary enroll-btn">جرّب الخطة الشخصية مجانًا</a>
                    <a href="{{ route('courses.playlist', $courses->id) }}">Go to Playlist</a>


                    <p class="price-details">تبدأ من €15.00 شهريًا بعد الفترة التجريبية</p>
                </div>
                <div class="subscription-info">
                    <p>احصل على هذه الدورة، بالإضافة إلى أكثر من 12,000 دورة عالية التقييم، مع الخطة الشخصية. <a href="#">اعرف المزيد</a></p>
                </div>
            </div>

            <!-- قسم المحتوى الأيسر -->
            <div class="col-lg-8 course-content">
                <h1 class="course-title">{{ $courses->course_name }}</h1>
                <p class="course-subtitle">{{ $courses->course_description }}</p>
                <div class="course-rating">
                    <span class="badge badge-success">الأكثر مبيعًا</span>
                    <span class="rating">4.7</span>
                    <span class="star-rating">★★★★☆</span>
                    <a href="#" class="ratings-count">(330,788 تقييم)</a>
                    <span class="students-count">1,414,171 طالب</span>
                </div>
                <p class="course-author">من إعداد {{ $courses->course_teacher }}</p>
                
                <!-- قسم "ما ستتعلمه" -->
                <!-- تفاصيل الدورة -->
                <div class="course-details">
                    <span class="course-meta-item">آخر تحديث 10/2024</span> · 
                    <span class="course-meta-item">اللغة الإنجليزية</span> · 
                    <span class="course-meta-item">14 لغة أخرى</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="learn-section">
    <div class="learn-content" style="direction: ltr; unicode-bidi: bidi-override;">
        <h3>ما الذي ستتعلمه</h3>
        <ul>
            <li>.Python لغة البرمجة ستتقن من خلال بناء 100 مشروع فريد خلال 100 يوم</li>
            <li>.Python بلغة البرمجة من احترافي بشكل البرمجة ستتمكن</li>
            <li>.المطورين لوظائف التقدم من للتقدم Python مشروع 100 من مجموعة إنشاء</li>
            <li>.الآلي التعلم والتعلم البيانات علم في Python استخدام</li>
            <li>.Python باستخدام سطح المكتب وتطبيقات المستخدم واجهات بناء</li>
            <li>.Python باستخدام الويب وتطوير التطبيقات والألعاب الأتمتة تعلم</li>
            <li>.وغيرها Pandas وFlask وSoup Beautiful وSelenium مثل مكتبات استخدام</li>
            <li>.Python باستخدام Snake و Pong و Blackjack مثل ألعاب بناء</li>
        </ul>
    </div>

    <div class="learn-content" style="direction: ltr; unicode-bidi: bidi-override;">
        <h3>ما الذي ستتعلمه</h3>
        <ul>
            <li>.Python لغة البرمجة ستتقن من خلال بناء 100 مشروع فريد خلال 100 يوم</li>
            <li>.Python بلغة البرمجة من احترافي بشكل البرمجة ستتمكن</li>
            <li>.المطورين لوظائف التقدم من للتقدم Python مشروع 100 من مجموعة إنشاء</li>
            <li>.الآلي التعلم والتعلم البيانات علم في Python استخدام</li>
            <li>.Python باستخدام سطح المكتب وتطبيقات المستخدم واجهات بناء</li>
            <li>.Python باستخدام الويب وتطوير التطبيقات والألعاب الأتمتة تعلم</li>
            <li>.وغيرها Pandas وFlask وSoup Beautiful وSelenium مثل مكتبات استخدام</li>
            <li>.Python باستخدام Snake و Pong و Blackjack مثل ألعاب بناء</li>
        </ul>
    </div>

    
    <div class="learn-content" style="direction: ltr; unicode-bidi: bidi-override;">
        <h3>ما الذي ستتعلمه</h3>
        <ul>
            <li>.Python لغة البرمجة ستتقن من خلال بناء 100 مشروع فريد خلال 100 يوم</li>
            <li>.Python بلغة البرمجة من احترافي بشكل البرمجة ستتمكن</li>
            <li>.المطورين لوظائف التقدم من للتقدم Python مشروع 100 من مجموعة إنشاء</li>
            <li>.الآلي التعلم والتعلم البيانات علم في Python استخدام</li>
            <li>.Python باستخدام سطح المكتب وتطبيقات المستخدم واجهات بناء</li>
            <li>.Python باستخدام الويب وتطوير التطبيقات والألعاب الأتمتة تعلم</li>
            <li>.وغيرها Pandas وFlask وSoup Beautiful وSelenium مثل مكتبات استخدام</li>
            <li>.Python باستخدام Snake و Pong و Blackjack مثل ألعاب بناء</li>
        </ul>
    </div>

    

    
    <section class="course-includes">
        <h3>تشمل هذه الدورة:</h3>
        <div class="includes-list">
            <div class="include-item">
                <p>52 ساعة من الفيديو حسب الطلب</p>
                <span>🎥</span>
            </div>
            <div class="include-item">
                <p>23 تمرين برمجي</p>
                <span>💻</span>
            </div>
            <div class="include-item">
                <p>واجبات</p>
                <span>📄</span>
            </div>
            <div class="include-item">
                <p>225 مقال</p>
                <span>📚</span>
            </div>
            <div class="include-item">
                <p>150 مورد قابل للتنزيل</p>
                <span>📂</span>
            </div>
            <div class="include-item">
                <p>الوصول عبر الجوال والتلفاز</p>
                <span>📱</span>
            </div>
            <div class="include-item">
                <p>شهادة إتمام</p>
                <span>🏆</span>
            </div>
        </div>
    
        <div class="companies-offer">
            <h4>أهم الشركات تقدم هذه الدورة لموظفيها</h4>
            <p>تم اختيار هذه الدورة لمجموعتنا من الدورات الأعلى تقييمًا التي تثق بها الشركات حول العالم. <a href="#">اعرف المزيد</a></p>
            <div class="companies-logos">
                <img src="{{ asset('images/nasdaq-logo.png') }}" alt="ناسداك">
                <img src="{{ asset('images/volkswagen-logo.png') }}" alt="فولكس فاجن">
                <img src="{{ asset('images/box-logo.png') }}" alt="بوكس">
                <img src="{{ asset('images/netapp-logo.png') }}" alt="نت آب">
                <img src="{{ asset('images/eventbrite-logo.png') }}" alt="إيفنتبرايت">
            </div>
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

    document.addEventListener('DOMContentLoaded', () => {
        const sidebar = document.getElementById('sidebar');
        const learnSection = document.querySelector('.learn-section');
        const margintop = 200;
        let learnSectionTop = learnSection.offsetTop;
        let learnSectionBottom = learnSectionTop + learnSection.offsetHeight;
        let currentState = 'relative-sidebar'; // Initialize the current state

        function handleScroll() {
            const scrollY = window.scrollY;
            const sidebarHeight = sidebar.getBoundingClientRect().height;
            const sidebarBottomPosition = scrollY + sidebarHeight;
            const stopPosition = learnSectionBottom - sidebarHeight;

            if (window.innerWidth > 991) {
                if (scrollY < learnSectionTop) {
                    changeSidebarState('relative-sidebar');
                    sidebar.style.top = '';
                } else if (scrollY >= learnSectionTop && sidebarBottomPosition < stopPosition) {
                    changeSidebarState('fixed-sidebar');
                    sidebar.style.top = '20px';
                } else if (sidebarBottomPosition >= stopPosition) {
                    changeSidebarState('stop-fixed');
                    sidebar.style.top = `${stopPosition + margintop - sidebarHeight}px`;
                }
            } else {
                changeSidebarState('relative-sidebar');
                sidebar.style.top = '';
            }
        }

        function changeSidebarState(newState) {
            // Check if the new state is different from the current state
            if (currentState !== newState) {
                // Update current state
                currentState = newState;

                // Remove all state classes
                sidebar.classList.remove('relative-sidebar', 'fixed-sidebar', 'stop-fixed', 'fade-animation');

                // Add the new state class
                sidebar.classList.add(newState);

                // Trigger animation only on state change
                sidebar.classList.add('fade-animation');
            }
        }

        // Listen for the animation end event to remove the fade-animation class
        sidebar.addEventListener('animationend', () => {
            sidebar.classList.remove('fade-animation');
        });

        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', () => {
            learnSectionTop = learnSection.offsetTop;
            learnSectionBottom = learnSectionTop + learnSection.offsetHeight;
            handleScroll();
        });
    });
</script>
@endsection
