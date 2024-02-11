<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentalRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id', // Make sure user_id exists in users table
            'book_id' => 'required|exists:books,id', // Make sure book_id exists in books table 
            'rental_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:rental_date', // Must be equal or after rental_date
        ];
    }
}
