<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required|min:5|max:200'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Поле имя является обязательным',
            'email.required'=>'Поле email является обязательным',
            'message.required'=>'Поле сообщение является обязательным',

            'email.email'=>'Электронная почта должна быть действующим адресом электронной почты',
            'message.min'=>'Сообщение должно состоять минимум из 5 символов',
            'message.max'=>'Сообщение должно состоять максимум из 200 символов'


        ];
    }
}
