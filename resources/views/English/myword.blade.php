<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0",
    maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compativle" content="ie=edge">
    <title>My単語</title>
    <style>
        th{
            width: 150px;
        }
        th.operate{
            width: auto;
        }
        th.memo{
            width: 250px;
        }
    </style>
</head>
<body>
    <h1>My単語</h1>
    <p><a href="{{route('english.create')}}">新しい単語を追加する</a></p>
    <p><a href="{{route('english.index')}}">TOPに戻る</a></p>
    @if (session('feedback.success'))
        <p style="color: green">{{session('feedback.success')}}</p>
    @endif
    <table border="1">
    <tr>
        <th>単語</th>
        <th>意味１</th>
        <th>意味２</th>
        <th class="memo">メモ</th>
        <th class="operate"></th>
        <th class="operate"></th>
    </tr>

    @foreach($words as $word)
    <tr>
        <td>{{$word->word}}</td>
        <td>{{$word->meaning1}}</td>
        <td>{{$word->meaning2}}</td>
        <td>{{$word->memo}}</td>
        <td><a href="{{route('english.update',['wordId'=>$word->id])}}">編集</a></td>
        <td>
            <form action="{{route('english.delete',['wordId'=>$word->id])}}" method="post">
            @method("DELETE")
            @csrf
            <button type="submit">削除</butoon>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
</body>
</html>