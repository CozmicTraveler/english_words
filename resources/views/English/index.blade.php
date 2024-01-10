<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0",
    maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compativle" content="ie=edge">
    <title>英単語アプリ</title>
    <style>
        th{
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>英単語アプリ</h1>
    @auth
    <a href="{{route('english.myword')}}"><p>My単語</p></a>
    <a href="{{route('dashboard')}}"><p>ダッシュボード</p></a>
    @endauth
    @guest
    <p><a href="{{route('register')}}">登録する</a><p>
    <p><a href="{{route('login')}}">ログインする</a><p>
    @endguest
    <a href="{{route('english.question')}}"><p>英単語テスト</p></a>
    <table border="1">
    <tr>
        <th>単語</th>
        <th>意味１</th>
        <th>意味２</th>
        <th>メモ</th>
    </tr>

    @foreach($words as $word)
    <tr>
        <td>{{$word->word}}</td>
        <td>{{$word->meaning1}}</td>
        <td>{{$word->meaning2}}</td>
        <td>{{$word->memo}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>