<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlockRequest extends FormRequest
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
            'temperature' => 'required|integer|max:2,min:-2',
            'shelfLife' => 'require|integer|min:1,max:24',
            'volume' => 'require|integer|min:1,max:24',
            'Location'=>'require|max:255'
        ];
    }
}
