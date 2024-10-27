@extends('master.master')


@section('content')
<div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">تسجيل الدخول</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="untree_co-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
        <form method="POST" action="{{ route('login') }}" class="form-box" style="text-align: right">
            @csrf

            <div class="mb-3">
                <x-label for="email" value="{{ __('البريد الإلكتروني') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="text-align: right" placeholder="البريد الإلكتروني" />
            </div>

            <div class="mb-3">
                <x-label for="password" value="{{ __('كلمة المرور') }}" />
                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" style="text-align: right" placeholder="كلمة المرور" />
            </div>

            <div class="mb-3">
                <label class="control control--checkbox">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="caption">تذكرني</span>
                    <div class="control__indicator"></div>
                </label>
            </div>

            <div class="d-flex flex-column justify-content-end mt-4" style="text-align: center">
                <x-button class="btn btn-primary" style="text-align: center !important">
                    {{ __('تسجل') }}
                </x-button>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 me-3" href="{{ route('password.request') }}">
                        {{ __('نسيت كلمة السر؟') }}
                    </a>
                @endif
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
