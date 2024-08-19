<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name_ar' => ['string', 'max:255','required'],
                    'name_en' => ['string', 'max:255','required'],
                    'image' => ['required'],
                    'lat' => ['required'],
                    'lng' => ['required'],
                    'url' => ['required'],
                    'county_id' => ['required'],
                ];
            }
            case 'PUT': {
                return [
                    'name_ar' => ['string', 'max:255','required'],
                    'name_en' => ['string', 'max:255','required'],
                    'image' => ['nullable'],
                    'lat' => ['required'],
                    'lng' => ['required'],
                    'url' => ['required'],
                    'county_id' => ['required'],

                ];
            }
        }
    }
}
