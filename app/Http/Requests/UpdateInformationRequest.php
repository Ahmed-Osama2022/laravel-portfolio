<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInformationRequest extends FormRequest
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
      'email' => 'nullable|email',
      'facebook' => 'nullable|url',
      'instagram' => 'nullable|url',
      'linkedin' => 'nullable|url',
      'whatsapp' => 'nullable|numeric',
      'X_twitter' => 'nullable|url',
      'github' => 'nullable|url',
    ];
  }
}
