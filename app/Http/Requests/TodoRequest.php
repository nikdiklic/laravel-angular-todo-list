<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TodoRequest extends Request
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
            'name' => ['required', 'max:255'],
            'priority' => ['required', 'numeric', 'min:1', 'max:10'],
            'done' => ['bool']
        ];
    }
}
