<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // التحقق من الحقول الجديدة
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'phone' => ['nullable', 'string', 'max:255'], // التحقق من رقم الهاتف
            'age' => ['nullable', 'string', 'max:255'],   // التحقق من العمر
            'program' => ['required', 'string', 'max:255'],
            'selected_option' => ['nullable', 'string', 'max:255'], // التحقق من الخيار المحدد
        ])->validate();

        // إنشاء المستخدم مع الحقول الجديدة
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone' => $input['phone'] ?? null, // إضافة رقم الهاتف
            'age' => $input['age'] ?? null, // إضافة العمر
            'program' => $input['program'], // حفظ البرنامج المختار
            'selected_option' => $input['selected_option'] ?? null, // إضافة الخيار المحدد
        ]);
    }
}
