<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RequestLogin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @property-read string $email
     * @property-read string $password
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }

    public function attemptLogin(): bool
    {
        $user = User::query()->where('email', '=', $this->email)->first();
        $corretPassword = Hash::check($this->password, $user->password);

        if ($user && $corretPassword) {
            auth()->login($user);
            return true;
        }

        return false;
    }
}
