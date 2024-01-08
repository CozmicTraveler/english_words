<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0",
    maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compativle" content="ie=edge">
    <title>英単語テスト</title>
    <style>
    .container{
        display: grid;
        grid-template-columns: 350px 350px;
        margin-left: auto;
        margin-right: auto;
        width: 800px;
    }
    .item{
        background: #0bd;
        color: #fff;
        padding: 80px;
        margin: 10px;
        line-height: 50px;  
        text-align: center;
        height: 50px;
        font-size: 36px;    
    }
   a{
        text-decoration: none;
    }
    </style>
</head>
<body>
    <h1>英単語アプリ</h1>
    @foreach($answerWord as $answer)
    <h2 id="{{$answer->id}}" style="margin-left:auto; margin-right:auto;">{{$answer->meaning1}}</h2>
    <div class="container">    
        @foreach($words as $word)
        
        @if($answer->id===$word->id)
        <a href="javascript:trueLinkClick();"><div id="answer" class="item">{{$word->word}}</div></a>
        @else
        <a href="javascript:falseLinkClick();"><div id="{{$word->id}}" class="item">{{$word->word}}</div></a>
        @endif
        @endforeach
    </div>
    @endforeach
    <p id="result"></p>
    <p><a href="{{route('english.question')}}">次の問題へ</a></p>
    <p><a href="{{route('english.index')}}">TOPに戻る</a></p>
    <script>
        function trueLinkClick(){
            document.getElementById('result').textContent='正解です！！';
        }
        function falseLinkClick(){
            document.getElementById('result').textContent='不正解です...';
        }
    </script>
</body>
</html>