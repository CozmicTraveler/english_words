<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('js/app.js') }}" defer="defer"></script>

    </head>
    <body>
    <button id="click">Click Me!</button>
    <div id="bg">
        <div id="alertBox">
            <p>Good Job!</p>
            <button id="ok">OK</button>
        </div>
    </div>

    <figure><img src="{{asset('/images/shinkai_dumbo_octopus.png')}}" width="640" height="400" alt="Photo"></figure>
    <ul>
        <li><a href="{{asset('/images/shinkai_dumbo_octopus.png')}}"><img src="{{asset('/images/shinkai_dumbo_octopus.png')}}"
        width="80" height="50" alt="Photo1"></a></li>
        <li><a href="{{asset('/images/shinkai_mitsukurizame.png')}}"><img src="{{asset('/images/shinkai_mitsukurizame.png')}}"
        width="80" height="50" alt="Photo2"></a></li>
        <li><a href="{{asset('/images/shinkai_ryugunotsukai.png')}}"><img src="{{asset('/images/shinkai_ryugunotsukai.png')}}"
        width="80" height="50" alt="Photo13"></a></li>
    </ul>

    <ul id="list">
        <li><a href="#tab1" class="current">01</a></li>
        <li><a href="#tab2">02</a></li>
        <li><a href="#tab3">03</a></li>
        <li><a href="#tab4">04</a></li>
    </ul>
    <br/>
    <div id="contents">
        <div id="tab1">First</div>
        <div id="tab2">Second</div>
        <div id="tab3">Third</div>
        <div id="tab4">Fourth</div>
    </div>

        <nav>
            <button class="toggle"><img src="{{asset('/images/logo.png')}}" width="20" height="17" alt="Button"></button>
            <ul class="disp">
                <li><a href="#">Menu1</a></li>
                <li><a href="#">Menu2</a></li>
                <li><a href="#">Menu3</a></li>
                <li><a href="#">Menu4</a></li>
            </ul>
        </nav>


        <h1>
            Vite のテストです
        </h1>
        <div id="app">
            <!-- <span v-text="timeStr"></span></br>
            <span v-text="timeStrRef"></span></br>
            <span v-text="goodbye"></span></br>
            <span v-text="hello"></span></br> -->
            <my-component></my-component>
            <disp-time></disp-time>
            <vinding1></vinding1>
            <vinding-event></vinding-event>
            <directive-vinding></directive-vinding>
            <other-vinding></other-vinding>
            <controll-directive></controll-directive>
            <loop-directive></loop-directive>
        </div>
        <button class="test">coszimic</button>
        <ul>
            <li>List2</li>
            <li>List3</li>
        </ul>
        <h2></h2>
        <h3></h3>

        <script type="module">
            $(function(){
                $("button.test").click(function(){
                    // $('button.test').html('Click');
                    // alert($("button").html());
                    // $('button.test').css("background","red");
                    // Method chain
                    $('button.test').html('Click').css("background","red").css("color","white");
                });
                
                // $("ul").prepend("<li>List1</li>");
                // // $("ul").append("<li>List4</li>");
                // $("ul").prepend($("li:last-child"));

                calFunc("h2",3000);
                function calFunc(elm,price){
                    $(elm).html("商品の値段は"+price+"円です。");
                }

                var count=0;
                countFunc();
                // setInterval(countFunc,1000);
                var timer = setInterval(countFunc,1000);
                function countFunc(){
                    count++;
                    $("h3").html("変数countの値は"+count+"です");
                    if(count>=10){
                        clearInterval(timer);
                    }
                }

                $("button.toggle").click(function(){
                    $("ul.disp").slideToggle(200);
                });
                
                $("#bg").hide();
                
                $("#click").click(function(){
                    $("#bg").fadeIn(300);
                });
                $("#ok").click(function(){
                    $("#bg").fadeOut(300);
                });

                $("a").click(function(){
                    $("figure img").attr("src",$(this).attr("href"));
                    return false;
                });

                // $('#contents div[id != "tab1"]').hide();
                // $("a").click(function(){
                //     $("#contents div").hide();
                //     $($(this).attr("href")).show();
                //     $(".current").removeClass("current");
                //     $(this).addClass("current");
                //     return false;
                // });
            });
        </script>
    </body>
</html>