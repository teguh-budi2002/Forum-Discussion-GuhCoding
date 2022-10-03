<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageValidationRequest extends FormRequest
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
            'photo_profile' => 'required|image|file|max:2048|mimes:jpeg,jpg,png,webp',
            [
            'photo_profile.required' => 'Upload Image Kosong?',
            'photo_profile.image' => 'File Harus Berupa Image',
            'photo_profile.mimes' => 'Ekstensi Image Yang Didukung Adalah jpeg,jpg,png,webp',
            'photo_profile.max' => 'Maximum Size Adalah 2MB'
            ],
        ];
    }
}
