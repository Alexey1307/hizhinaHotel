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
            'phone' => 'required|min:5',
            'outDate' => 'after:enterDate'
        ];
    }

// Изменение сообщений о непрохождении валидации.
    public function messages(){
        return [
            'name.required' => 'Не указано имя.',
            'phone.required' => 'Не указан номер телефона.',
            'phone.min' => 'Номер телефон должен быть настоящим.',
            'outDate.after' => 'Дата выезда должна быть позднее даты въезда.'
        ];
    }
}
