<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCvRequest extends FormRequest
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
      'cvFile' => 'required|file|mimes:pdf|max:30720',
    ];
  }


  public function messages(): array
  {
    return [
      'cvFile.required' => 'Please upload your CV.',
      'cvFile.mimes'    => 'Only PDF files are allowed.',
      'cvFile.max'      => 'Your CV must not be larger than :max MB.',
    ];
  }
}
