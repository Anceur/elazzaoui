@extends('master.master')
@section('content')



<div class="untree_co-hero overlay" style="background-image: url('images/hero4.png');" loading="lazy">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100"
                            style="font-family: 'Almarai', serif;">اتصل بنا</h1>
                        <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                            <p>إذا كان لديك أي استفسارات أو تعليقات، لا تتردد في الاتصال بنا! نحن هنا لمساعدتك وتلبية
                                احتياجاتك. يمكنك التواصل معنا عبر الهاتف أو البريد الإلكتروني، أو زيارة مكتبنا في
                                المدرسة خلال ساعات العمل. فريقنا الإداري متاح للإجابة على جميع أسئلتك وتقديم الدعم
                                اللازم. كما نرحب بملاحظاتك وآرائك، لأنها تساهم في تحسين تجربتك معنا. نحن نتطلع إلى سماعك
                                والتواصل معك!</p>
                        </div>

                        <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#"
                                class="btn btn-secondary">استكشاف الدورات</a></p>

                    </div>


                </div>

            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div> <!-- /.untree_co-hero -->

<div class="untree_co-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-4 mb-5 order-2 mb-lg-0">
                <div class="contact-info">
                    <div class="address mt-4">
                        <i class="icon-room"></i>
                        <h4 class="mb-2">الموقع:</h4>
                        <p>Rue Meskine Bachir, Frenda</p>
                    </div>

                    <div class="open-hours mt-4">
                        <i class="icon-clock-o"></i>
                        <h4 class="mb-2">ساعات العمل:</h4>
                        <p>الأحد-الجمعة: 11:00 صباحًا - 11:00 مساءً</p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        <h4 class="mb-2">البريد الإلكتروني:</h4>
                        <p>contact@elazzaoui-school.com</p>
                    </div>

                    <div class="phone mt-4">
                        <i class="icon-phone"></i>
                        <h4 class="mb-2">الاتصال:</h4>
                        <p>+213 773175202</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 mr-auto order-1">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input style="text-align: right" type="text" class="form-control" name="name"
                                placeholder="اسمك" required>
                        </div>
                        <div class="col-6 mb-3">
                            <input style="text-align: right" type="email" class="form-control" name="email"
                                placeholder="بريدك الإلكتروني" required>
                        </div>
                        <div class="col-12 mb-3">
                            <input style="text-align: right" type="text" class="form-control" name="subject"
                                placeholder="الموضوع" required>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea style="text-align: right" name="message" cols="30" rows="7" class="form-control"
                                placeholder="الرسالة" required></textarea>
                        </div>

                        <div class="col-12">
                            <button style="text-align: right" type="submit" class="btn btn-primary">إرسال
                                الرسالة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection