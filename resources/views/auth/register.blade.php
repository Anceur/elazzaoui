@extends('master.master')

<style>
    .error-message {
        color: red;
        font-size: 0.85rem;
        margin-top: 5px;
        display: block;
    }
</style>



@section('content')
<div class="untree_co-hero inner-page overlay" style="background-image: url('images/hero2.png');" loading="lazy">
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
                        <x-label for="name" value="الاسم واللقب" />
                        <x-input id="name" class="form-control mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" placeholder="اسم كامل" style="text-align: right" />
                        @error('name')
                            <span class="text-danger" style="font-size: 0.9rem;">{{ 'حقل الاسم مطلوب.' }}</span>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div class="mb-3">
                        <x-label for="email" value="البريد الإلكتروني" />
                        <x-input id="email" class="form-control mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="البريد الإلكتروني"
                            style="text-align: right" />
                        @error('email')
                            <span class="text-danger" style="font-size: 0.9rem;">{{ 'حقل البريد الإلكتروني مطلوب.' }}</span>
                        @enderror
                    </div>

                    {{-- Password Field --}}
                    <div class="mb-3">
                        <x-label for="password" value="كلمة المرور" />
                        <x-input id="password" class="form-control mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="********" style="text-align: right" />
                        @error('password')
                            <span class="text-danger"
                                style="font-size: 0.9rem;">{{ 'يجب أن يحتوي حقل كلمة المرور على 8 أحرف على الأقل.' }}</span>
                        @enderror
                    </div>

                    {{-- Password Confirmation Field --}}
                    <div class="mb-3">
                        <x-label for="password_confirmation" value="تأكيد كلمة المرور" />
                        <x-input id="password_confirmation" class="form-control mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="********"
                            style="text-align: right" />
                        @error('password_confirmation')
                            <span class="text-danger" style="font-size: 0.9rem;">{{ 'يجب تأكيد كلمة المرور.' }}</span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        {{-- Phone Number Field --}}
                        <x-label for="phone" value="رقم الهاتف" />
                        <x-input id="phone" class="form-control mt-1 w-full" type="text" name="phone" required
                            placeholder="رقم الهاتف" style="text-align: right" />
                        @error('phone')
                            <span class="text-danger" style="font-size: 0.9rem;">{{ 'حقل رقم الهاتف مطلوب.' }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        {{-- Age Selection --}}
                        <x-label for="age" value="الفئة العمرية" />
                        <select id="age" name="age" class="form-control mt-1 w-full" onchange="updateOptions()"
                            style="text-align: right">
                            <option value="">اختر الفئة العمرية</option>
                            <option value="صغير">صغير</option>
                            <option value="متوسط">متوسط</option>
                            <option value="كبير">كبير</option>
                        </select>
                        @error('age')
                            <span class="text-danger" style="font-size: 0.9rem;">{{ 'يرجى اختيار الفئة العمرية.' }}</span>
                        @enderror
                    </div>

                    <div id="options-container" class="mb-3" style="display: none;">
                        <x-label for="program" value="العناصر المتاحة" style="text-align: right;" />
                        <select id="dynamic-options" name="program" class="form-control mt-1 w-full"
                            style="text-align: right;">
                            <option value="">اختر برنامجك</option>
                        </select>
                        @error('program')
                            <span class="text-danger"
                                style="font-size: 0.9rem; text-align: right;">{{ 'يرجى اختيار برنامج.' }}</span>
                        @enderror
                    </div>

                    <script>
                        function updateOptions() {
                            const age = document.getElementById('age').value; // Get the selected value
                            const optionsContainer = document.getElementById('options-container');
                            const dynamicSelect = document.getElementById('dynamic-options');

                            // Clear the current options
                            dynamicSelect.innerHTML = '<option value="" style="text-align: right;">اختر برنامجك</option>';

                            // Define the new options based on the selected age group
                            let items = [];
                            if (age === 'صغير') {
                                items = ['جدول الضرب', 'اللغة الانجليزية'];
                            } else if (age === 'متوسط') {
                                items = ['اللغة الفرنسية', 'اللغة الانجليزية'];
                            } else if (age === 'كبير') {
                                items = ['اللغة الفرنسية', 'اللغة الانجليزية', 'اللغة الاسبانية', 'اللغة الالمانية', 'اللغة التركية'];
                            }

                            // Populate the select dropdown with new options
                            if (items.length > 0) {
                                items.forEach(item => {
                                    const option = document.createElement('option');
                                    option.value = item;
                                    option.textContent = item;
                                    option.style.textAlign = 'right'; // Ensure right alignment for each option
                                    dynamicSelect.appendChild(option);
                                });
                                optionsContainer.style.display = 'block';
                            } else {
                                optionsContainer.style.display = 'none';
                            }
                        }
                    </script>



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
                        <x-button class="btn btn-primary w-100 text-center mx-auto" style="display: block;">
                            تسجيل
                        </x-button>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-3 text-center"
                            href="{{ route('login') }}">
                            هل قمت بالتسجيل بالفعل؟
                        </a>
                    </div>

                    <script>
                        document.querySelector('form').addEventListener('submit', function (event) {
                            let isValid = true;
                            const fields = document.querySelectorAll('input[required], select[required]');

                            fields.forEach(field => {
                                if (!field.value.trim()) {
                                    isValid = false;
                                    field.classList.add('is-invalid'); // إضافة كلاس للخطأ
                                    const errorMessage = document.createElement('div');
                                    errorMessage.className = 'text-danger';
                                    errorMessage.style.fontSize = '0.9rem';
                                    errorMessage.textContent = 'يجب ملء هذا الحقل.';
                                    field.parentElement.appendChild(errorMessage);
                                } else {
                                    field.classList.remove('is-invalid'); // إزالة كلاس الخطأ إذا كان الحقل مملوءًا
                                    const existingError = field.parentElement.querySelector('.text-danger');
                                    if (existingError) {
                                        existingError.remove();
                                    }
                                }
                            });

                            if (!isValid) {
                                event.preventDefault(); // منع إرسال النموذج إذا كان هناك حقول فارغة
                            }
                        });
                    </script>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection