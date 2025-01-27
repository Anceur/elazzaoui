@extends('master.master')

@section('content')
<div class="untree_co-hero inner-page overlay" style="background-image: url('images/hero2.png');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100"
                            style="font-family: 'Almarai', serif;">تسجيل</h1>
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

               

                      {{-- Name Field --}}
                    <div class="mb-3">
                        <x-label for="name" value="الاسم" />
                        <x-input id="name" class="form-control mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" placeholder="اسم المستخدم" />
                        @error('name')
                            <span class="text-danger" style="font-size: 0.9rem;">{{ 'حقل الاسم مطلوب.' }}</span>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div class="mb-3">
                        <x-label for="email" value="البريد الإلكتروني" />
                        <x-input id="email" class="form-control mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="البريد الإلكتروني" />
                        @error('email')
                            <span class="text-danger" style="font-size: 0.9rem;">{{ 'حقل البريد الإلكتروني مطلوب.' }}</span>
                        @enderror
                    </div>

                    {{-- Password Field --}}
                    <div class="mb-3">
                        <x-label for="password" value="كلمة المرور" />
                        <x-input id="password" class="form-control mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="********" />
                        @error('password')
                            <span class="text-danger"
                                style="font-size: 0.9rem;">{{ 'يجب أن يحتوي حقل كلمة المرور على 8 أحرف على الأقل.' }}</span>
                        @enderror
                    </div>

                    {{-- Password Confirmation Field --}}
                    <div class="mb-3">
                        <x-label for="password_confirmation" value="تأكيد كلمة المرور" />
                        <x-input id="password_confirmation" class="form-control mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="********" />
                        @error('password_confirmation')
                            <span class="text-danger" style="font-size: 0.9rem;">{{ 'يجب تأكيد كلمة المرور.' }}</span>
                        @enderror
                    </div>

                    {{-- Terms and Privacy Policy (if enabled) --}}
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="form-check mt-3">
                                            <x-label for="terms">
                                                <div class="d-flex align-items-start">
                                                    <x-checkbox name="terms" id="terms" required />
                                                    <div class="ms-2">
                                                        {!! __('أوافق على :terms_of_service و :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">شروط الخدمة</a>',
                            'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">سياسة الخصوصية</a>',
                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-label>
                                        </div>
                    @endif

                    {{-- Submit Button --}}
                    <div class="d-flex flex-column align-items-center mt-4">
                        <x-button class="btn btn-primary w-100">
                            تسجيل
                        </x-button>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-3"
                            href="{{ route('login') }}">
                            هل قمت بالتسجيل بالفعل؟
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection