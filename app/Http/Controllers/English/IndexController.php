<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\English;
use App\Services\EnglishService;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,EnglishService $englishService)
    {
        //Get word list.
        // $words=English::all();
        // return view('english.index')->with('name','laravel');
        //Return view with word list as array.
        // $words=English::inRandomOrder()->take(10)->get();
        $words=$englishService->getWords();
        return view('english.index')->with('words',$words);
    }

    //管理者が登録した単語からランダムに４問選択する(うち１つを正解とする)。
    public function randomSelect(Request $request){
        //管理者が登録した単語を４つランダムに取得
        $words=English::inRandomOrder()->where('user_id',1)->take(4)->get();
        //取得した４つのうちランダムなレコードを正解とする。
        $randInt=mt_rand(0,3);
        $answerWord=English::where('id','=',[$words[$randInt]->id])->take(1)->get();
        return view('english.question')->with('words',$words)->with('answerWord',$answerWord);
    }

    public function selectQuestions(Request $request){
        $words=English::inRandomOrder()->where('user_id',1)->take(40)->get();
        return view('english.hoge')->with('words',$words);
    }

    //ログイン時に自身の登録した単語を表示する。
    public function myWords(Request $request,EnglishService $englishService,English $english)
    {
        $words=$englishService->myWords();
        if($words===false){
            return redirect()->route('english.index')->with('words',English::all());
        }
        return view('english.myword')->with('words',$words);
    }
}
