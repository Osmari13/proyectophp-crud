<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibro extends FormRequest
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
            'nombre'=> 'required|min:4',
            'categoria'=> 'required|min:4',
            'descripcion'=> 'required',
            'autor'=> 'required|min:4',
            'editorial'=> 'required|min:4',
        ];
    }

    public function attributes():array{
        return [
            'nombre' => 'titulo del libro',
        ];
    }
}

