<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StoreTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('store-ticket');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
		/*$validator = Validator::make($request->all(), [  // @todo, possibly without Validator
			'name' => 'required|string', 
			'description' => 'required|string', 
			'context' => 'required|string', 
			'browser' => 'required', 
			'tested_by_customer' => 'required|integer', 
			'type' => 'required', 
			'priority' => 'required',
			'state' => 'required'
        ]);

		if ($validator->fails()) {  // @todo
            return url(redirect('post/create')
                        ->withErrors($validator)
                        ->withInput());
        }*/
		return [];
    }
}
