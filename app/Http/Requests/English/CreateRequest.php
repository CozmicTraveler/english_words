<?php

namespace App\Http\Requests\English;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
    public function add()
    {
        $user=Auth::user();
        $data=[ 
            'user_id'=>$this->userId(),
            'word'=>$this->input('word'),
            'meaning1'=>$this->input('meaning1'),
            'meaning2'=>$this->input('meaning2'),
            'memo'=>$this->input('memo'),
            'created_by'=>$user['name'],
        ];
        return $data;
    }
    public function userId():int
    {
        return $this->user()->id;
    }
}
