<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\English\CreateRequest;
use App\Models\English;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function post(CreateRequest $request)
    {
        //
    }
    public function show(Request $request)
    {
        return view('english.add');
    }
    public function add(CreateRequest $request)
    {
        $english=new English;
        $english->user_id=$request->userId();
        $data=$request->add();
        // $english->save();

        //When using insert, created by cannot be updated(a little confusing).
        // $english->insert($data);
        
        //When using create(), each column should be in $fillable or $guarded.
        $english::create($data);
        return redirect()->route('english.myword');
    }
}
