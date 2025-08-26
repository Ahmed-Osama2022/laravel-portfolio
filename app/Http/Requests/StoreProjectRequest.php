<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'title' => ['required', 'string', 'max:45'],
      'imgSrc' => [
        'required',
        'image',
        'mimes:jpg,jpeg,png,gif,webp',
        'max:10240' // 10MB (size is in kilobytes)
      ],

      'online_link' => ['nullable', 'url'],
    ];
  }
}
