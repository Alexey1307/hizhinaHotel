<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

// Валидация
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required|min:11',
            'email' => 'email',
            'outDate' => 'after:enterDate'
        ];
    }

// Изменение сообщений о непрохождении валидации.
    public function messages(){
        return [
            'phone.required' => 'Не указан номер телефона.',
            'phone.min' => 'Номер телефон должен состоять не менее, чем из 11 символов.',
            'email.email' => 'Электронная почта должна быть действительным адресом электронной почты.',
            'outDate.after' => 'Дата выезда должна быть позднее даты въезда.'
        ];
    }
}
