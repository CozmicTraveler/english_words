<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\English;
use App\Services\EnglishService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class DeleteController extends Controller
{
    public function delete(Request $request,EnglishService $englishService)
    {
        $wordId=(int) $request->route('wordId');
        if(!$englishService->checkOwnWord($request->user()->id,$wordId)){
            throw new AccessDeniedHttpException;
        }
        $word=English::where('id',$wordId)->firstOrFail();
        $word->delete();
        return redirect()->route('english.myword')->with('feedback.success','単語を削除しました');
    }
}
