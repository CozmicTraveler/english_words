<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\English\UpdateRequest;
use App\Models\English;
use App\Services\EnglishService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class UpdateController extends Controller
{
    public function show(Request $request,EnglishService $englishService)
    {
        
        $wordId=(int) $request->route('wordId');
        $word=English::where('id',$wordId)->firstOrFail();
        // if(is_null($word)){
        //     throw new NotFoundHttpException('存在しない単語です');
        // }
        if(!$englishService->checkOwnWord($request->user()->id,$wordId)){
            throw new AccessDeniedHttpException();
        }
        return view('english.update')->with('word',$word);
    }
    public function update(UpdateRequest $request,EnglishService $englishService)
    {
        if(!$englishService->checkOwnWord($request->user()->id,$request->id()))
        {
            throw new AccessDeniedHttpException();
        }
        $word=$word=English::where('id',$request->id())->firstOrFail();
        $data=$request->update();
        $word->word=$data['word'];
        $word->meaning1=$data['meaning1'];
        $word->meaning2=$data['meaning2'];
        $word->memo=$data['memo'];
        $word->save();
        // $words=$englishService->myWords();
        // return redirect('english/myword')->with('words',$words);
        return redirect()->route('english.update',['wordId'=>$word->id])->with('feedback.success',"単語を編集しました。");
    }
}
