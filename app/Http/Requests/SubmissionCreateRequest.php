<?php

namespace App\Http\Requests;

use App\Http\Dto\SubmissionCreateDto;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SubmissionCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ];
    }

    public function getDto(): SubmissionCreateDto
    {
        return new SubmissionCreateDto(
            $this->get('name'),
            $this->get('email'),
            $this->get('message')
        );
    }
}
