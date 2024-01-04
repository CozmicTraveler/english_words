<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        width:200px;
    }
</style>
<body>
    <script>
        const array=@json($words);
        function blaFunc(){}
        console.log(array);
        let gCnt = 0;

        function getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min) + min); //The maximum is exclusive and the minimum is inclusive
         }        
        function removePrevious(){
            let questionMeaning = document.getElementById("qMeaning");
            if(questionMeaning === undefined || questionMeaning === null){
                //no process
            }else{
                questionMeaning.remove();
            }
            let previousAnswer = document.getElementById("answer");
            if(previousAnswer === undefined || previousAnswer === null){
                //no process
            }else{
                previousAnswer.remove();
            }
            
            let currentDisp = document.getElementById("question");
            if(currentDisp === undefined || currentDisp === null){
                   //no process
            }else{
                currentDisp.remove();
            }
        }
        function dispCollect(){
            document.write('<div id="answer"><p>正解です</p>');
            document.write('<a href="javascript:void(0)" onclick="removePrevious(); outputQuiz();">次へ</a></div>');
        }
        function dispIncollect(){
            document.write('<div id="answer"><p>不正解です</p>');
            document.write('<a href="javascript:void(0)" onclick="removePrevious(); outputQuiz();">次へ</a></div>');
        }
        function outputQuiz(){
            if(gCnt===10){
                document.write('終了です。');
                exit;
            }
            cnt=0;
            rndInt=getRandomInt(0,3);
            document.write('<p id="qMeaning">' + array[rndInt]['meaning1'] + '</p>');
            document.write('<div id="question"><table border="1"><tr><td>word</td><td>meaning</td></tr>');
            for (let value of array){
                if(cnt===rndInt){
                    document.write('<tr><td id="collect"><a href="javascript:void(0)" onclick="removePrevious(); dispCollect()">' + value['word'] + '</a></td>');
                }else{
                    document.write('<tr><td id="incollect"><a href="javascript:void(0)" onclick="removePrevious(); dispIncollect()">' + value['word'] + '</a></td>');
                }
                document.write('<td>' + value['meaning1'] + '</td></tr>');
                
                if(cnt===3){
                    array.splice(0,4);
                    break;  
                }
                cnt++;
            }
            document.write('</table><a href="javascript:void(0)" onclick="removePrevious(); outputQuiz();">次へ</a></div>');
            gCnt++;
            console.log(gCnt);
        }
        outputQuiz();
        console.log(array);
    </script>
</body>
</html>