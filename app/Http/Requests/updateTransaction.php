<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateTransaction extends FormRequest
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
            'amount' => 'required',
            'amount_btc' => 'required',
            'rate' => 'required',
            'product' => 'required',
            'returns' => 'required',
            'bal_after_7days' => 'required',
            'plan' => 'required',
            'status_date' => 'required'
        ];
    }
}
