<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0",
    maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compativle" content="ie=edge">
    <title>英単語アプリ</title>
</head>
<body>
    <div>
        <p>新しい単語を追加</p>
        <form action="{{route('english.create');}}" method="post">
            @csrf
            <label for="word">単語　</label>
            <input id="word" type="text" name="word" placeholder="英単語を入力"></br>
            @error('word')
            <p style="color: red;">{{$message}}</p>
            @enderror
            <label for="meaning1">意味１</label>
            <input id="meaning1" type="text" name="meaning1" placeholder="意味１を入力"></br>
            @error('meaning1')
            <p style="color: red;">{{$message}}</p>
            @enderror
            <label for="meaning2">意味２</label>
            <input id="meaning2" type="text" name="meaning2" placeholder="意味２を入力"></br>
            @error('meaning2')
            <p style="color: red;">{{$message}}</p>
            @enderror
            <label for="memo">メモ　</label>
            <textarea id="memo" type="text" name="memo" placeholder="メモを入力"></textarea></br>
            @error('memo')
            <p style="color: red;">{{$message}}</p>
            @enderror
            <input id="user" type="hidden" name="{{Auth::user()}}" >
            <input type="submit" value="追加">
        </form>
    </div>
</body>
</html>