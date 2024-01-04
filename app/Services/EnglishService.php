<?php

namespace App\Services;

use App\Models\English;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EnglishService{
    //Return 20 words from word list.
    public function getWords()
    {
        return English::where('user_id',1)->orderBy('created_at','DESC')->take(20)->get();
    }

    public function myWords()
    {
        //If not authenticated, return false.
        $user=Auth::user();
        if(is_null($user)){
            return false;
        }
        return English::where('created_by',$user['name'])->orderBy('created_at','DESC')->take(10)->get();
    }
    //Return true or false about user-registered words.
    public function checkOwnWord(int $userId,int $wordId):bool
    {
        $word=English::where('id',$wordId)->first();
        if(!$word){
            return false;
        }
        return $word->user_id===$userId;
    }
}