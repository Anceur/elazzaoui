@extends('master.master')

@section('content')
<div class="untree_co-hero overlay" style="background-image: url('images/img-school-3-min.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">طاقم المدرسة</h1>
                        <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                            <p>طاقم المدرسة لدينا يتكون من مجموعة متنوعة من المهنيين المتخصصين.</p>
                        </div>
                        <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">استكشاف الدورات</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($employes as $employe)
            <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="staff text-center">
                    <div class="mb-4">
                        @if($employe->employes_photo)
                            <img src="{{ asset('storage/'.$employe->employes_photo) }}" alt="Image" class="img-fluid">
                        @else
                            <img src="images/default-staff.jpg" alt="Image" class="img-fluid">
                        @endif
                    </div>
                    <div class="staff-body">
                        <h3 class="staff-name">{{ $employe->employes_name }}</h3>
                        <span class="d-block position mb-4">{{ $employe->employes_telephone }}</span>
                        <p class="mb-4">{{ $employe->employes_discription }}</p>
                        <div class="social">
                            <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
