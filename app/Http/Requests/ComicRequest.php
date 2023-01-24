<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> 'required|string|between:5,100',
            'description'=> 'nullable|string',
            'thumb'=> 'nullable|url',
            'series'=> 'required|string|between:5,50',
            'sale_date'=> 'required|date',
            'type'=>    [   
                            'required',
                            Rule::in(['comic book','graphic novel']),
                        ],
            'price'=> 'required|decimal:2|between:1,99'
        ];
    }
}
