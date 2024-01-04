<?php

namespace App\Http\Requests\English;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'word'=>'required|max:20',
            'meaning1'=>'required|max:100',
            'meaning2'=>'max:100',
            'memo'=>'max:255',
        ];
    }
    public function id():int
    {
        return (int) $this->route('wordId');
    }
    public function update()
    {
        $user=Auth::user();
        $data=[ 
            'word'=>$this->input('word'),
            'meaning1'=>$this->input('meaning1'),
            'meaning2'=>$this->input('meaning2'),
            'memo'=>$this->input('memo'),
            'created_by'=>$user['name'],
        ];
        return $data;
    }
}
