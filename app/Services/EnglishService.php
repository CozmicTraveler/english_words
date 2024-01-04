<?php

namespace App\Services;

use App\Models\English;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EnglishService{
    public function getWords()
    {
        return English::where('user_id',1)->orderBy('created_at','DESC')->take(20)->get();
    }
    public function myWords()
    {
        $user=Auth::user();
        if(is_null($user)){
            return false;
        }
        return English::where('created_by',$user['name'])->orderBy('created_at','DESC')->take(10)->get();
    }
    public function checkOwnWord(int $userId,int $wordId):bool
    {
        $word=English::where('id',$wordId)->first();
        if(!$word){
            return false;
        }
        return $word->user_id===$userId;
    }
}