<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PHPUnit\Framework\Constraint\IsTrue;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'familyname' => ['required','string'],
            'firstname' => ['required','string'],
            'email' => 'required',
            'tel' => ['required', 'max:11'],
            'content' => ['required', 'string']
        ];
    }

    public function messages()
    {
        return [
            'familyname.required' => '苗字を入力してください',
            'familyname.string' => '苗字を文字列で入力してください',
            'firstname.required' => '名前を入力してください',
            'firstname.string' => '名前を文字列で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.max:11' => '電話番号を11文字で入力してください',
            'content.required'=> 'お問い合わせ内容を入力してください',
            'content.string' => 'お問い合わせ内容を文字列で入力してください'
         ];
    }

}
