<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class evedntsFormRequest extends FormRequest
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
            'event_title'=>'required|max:255',
            'event_location'=>'required|max:255',
            'event_start'=>'required',
            'event_start_time'=>'required',
            'event_end'=>'required',
            'event_end_time'=>'required',
            'event_description'=>'required',
            'org_name'=>'required',
            'event_type'=>'required',
            'event_topic'=>'required',
            'event_image'=>'required|image'
        ];
    }
}
