@extends('master.master')



@section('content')
<div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">يسجل </h1>
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

        <form method="POST" action="{{ route('register') }}" class="form-box" style="text-align: right;">
            @csrf

            <div class="mb-3">
                <x-label for="name" value="{{ __('اسم') }}" />
                <x-input id="name" class="form-control mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="اسم المستخدم" />
            </div>

            <div class="mb-3">
                <x-label for="email" value="{{ __('البريد الإلكتروني') }}" />
                <x-input id="email" class="form-control mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="البريد الإلكتروني"  />
            </div>

            <div class="mb-3">
                <x-label for="password" value="{{ __('كلمة المرور') }}" />
                <x-input id="password" class="form-control mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="********"/>
            </div>

            <div class="mb-3">
                <x-label for="password_confirmation" value="{{ __('تأكيد كلمة المرور') }}" />
                <x-input id="password_confirmation" class="form-control mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password"  placeholder="********"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="form-check mt-3">
                    <x-label for="terms">
                        <div class="d-flex align-items-start">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="d-flex flex-column align-items-center mt-4">
                <x-button class="btn btn-primary w-100">
                    {{ __('يسجل') }}
                </x-button>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-3" href="{{ route('login') }}">
                    {{ __('هل قمت بالتسجيل بالفعل؟') }}
                </a>
            </div>
        </form>
    </div>
  </div>
 </div>
</div>
@endsection