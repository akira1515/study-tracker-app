<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>posse-app</title>
</head>
<body>
    {{-- {{ $date }} --}}
    <header>
        <h1 class="logo">
            <a href=""><img src="{{ asset('/images/posse_logo.jpg') }}" alt=""></a>
            <p>{{ Auth::user()->name }} 様 </p>
        </h1>
        
        <p class="btn record_register" id="openModal"><span>記録・登録</span></p>
    </header>
    <div class="top_wrapper">
        <div class="container">
            <div class="time_and_bargraph">
                <div class="time">
                    <section class="item">
                        <p class="time_span">Today</p>
                        <p class="time_num">{{ $day_sum }}</p>
                        <p class="time_hour">hour</p>
                    </section>
                    <section class="item">
                        <p class="time_span">Month</p>
                        <p class="time_num">{{ $month_sum }} </p>
                        <p class="time_hour">hour</p>
                    </section>
                    <section class="item">
                        <p class="time_span">Total</p>
                        <p class="time_num">{{ $year_sum }} </p>
                        <p class="time_hour">hour</p>
                    </section>
                </div>
                <div class="bar_graph">
                    <div class="columnchart" id="columnchart_values"></div>
                </div>
            </div>
            <div class="circles">
                <section class="circle_graph1">
                    <h1 class="learning_language">学習言語</h1>
                    <div id="donutchart_learning_language" style=""></div>
                    <ul class="learning_language_lists">
                        @foreach($langs as $id => $lang)
                            <li class="list_{{$id+1}}">{{$lang->name}}</li>
                        @endforeach
                    </ul>
                </section>
                <section class="circle_graph2">
                    <h1 class="learning_contents">学習コンテンツ</h1>
                    <div id="donutchart_learning_contents" style=""></div>
                    <ul class="learning_contents_lists">
                        @foreach($contents as $id => $content)
                            <li class="list_{{$id+1}}">{{$content->name}}</li>
                        @endforeach
                    </ul>
                </section>
            </div>
        </div>
        <p class="date">2020年 10月</p>
        <p class="btn record_register" id="openModal"><span>記録・登録</span></p>
    </div>
    
    <section id="modalArea" class="modalArea">
        <div id="modalBg" class="modalBg"></div>
        <div class="modalWrapper">
            <form method="post"  action="{{ route('execStore')}}" class="form-horizontal">
                @csrf
                <div class="modalContents" id="modalContents">
                    <div class="first_container">
                        <p class="learning_day">学習日</p>
                            {{-- <input type="text" name="date" class="learning_date input_space" id="sample"> --}}
                            <input type="date" name="date" class="learning_date input_space" required >
                        <div class="learning_contents">
                        学習コンテンツ（複数選択可）
                        </div>
                        <h1 class="learning_contents_choices">
                            @foreach($contents as $id => $content)
                                <label><input type="checkbox" name="studiedContent[]" value="{{ $id+1 }}" class="checkbox" >
                                    <span class="checkbox-fontas">{{$content->name}}</span></label>
                            @endforeach
                        </h1>
                        <div class="learning_language">
                        学習言語（複数選択可）
                        </div>
                        <h1 class="learning_contents_choices">
                            @foreach($langs as $id => $lang)
                                <label><input type="checkbox" name="studiedLang[]" value="{{ $id+1 }}" class="checkbox" >
                                    <span class="checkbox-fontas">{{$lang->name}}</span></label>
                            @endforeach
                        </h1>
                    </div>
                    <div class="second_container">
                        <h1 class="learning_time">学習時間</h1>
                            <input type="text" name="hour" class="learning_hours input_space" required>
                        <h1 class="twitter_for_comment">Twitter用コメント</h1>
                            <textarea name="" id="content" cols="30" rows="10" class="comment_for_twitter input_space"></textarea>
                        <div class="twitter_share">
                            <label><input type="checkbox" class="checkbox" id="check">
                                <span class="checkbox-fontas">Twitterにシェアする</span></label>
                        </div>
                    </div>
                </div>
                {{-- id = "twitter"  を後でどうにかする --}}
                <button type="submit" id = "twitter" class="record_register_modal record_register_modal_word">記録・登録</button>
            </form>
            <div id="closeModal" class="closeModal">
                ×
            </div>
            <div class="loading" id="load"></div>
            <img id="done" class="done" src="{{ asset('/images/done.png') }}" alt="">
        </div>
    </section>


    <div class="error">
        <p><span>ERROR</span><br><br>
            <i class="fas fa-exclamation-circle"></i><br><br>
            一時的にご利用できない状態です。<br><br>
            しばらく経ってから<br><br>
            再度アクセスしてください
        </p>
    </div>
    
    
    <p id="test"></p>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->



<script>
    // 棒グラフに挿入するデータ
    let date = @json($dates);
    let date_arry = []
    var today = new Date();
    var daysInMonth = new Date(today.getFullYear(), today.getMonth()+1, 0).getDate();
    for(var i=1; i<=daysInMonth; i++){
        let days_arr = [i.toString().padStart(2, '0'),0];
        date_arry.push(days_arr);
    }
    // console.log(date_arry);
    date.forEach(function(val){
        let dateV = val.date
        let str = String(dateV.slice(8)); 
        for(var i=0; i<daysInMonth; i++){
            if(str == date_arry[i][0]){
                if(val.hour !== date_arry[i][1]){
                    date_arry[i].splice(1,1,val.hour);
                }else{
                    continue;
                }
            }
        }
    });
    date_arry.unshift(["Element", "Density"]);


    //学習言語の円グラフに挿入するデータ
    let studied_lang = @json($studied_langs);
    console.log(studied_lang);
    let studied_lang_arry = []
    // console.log(studied_lang_arry);
    studied_lang.forEach(function(val){
        let arr = [String(val.lang_id), Number(val.total_hour)];
        studied_lang_arry.push(arr);
    });
    studied_lang_arry.unshift(['Lang', 'Hours']);


    //学習コンテンツの円グラフに挿入するデータ
    let studied_content = @json($studied_contents);
    // console.log(studied_lang);
    let studied_content_arry = []
    // console.log(studied_lang_arry);
    studied_content.forEach(function(val){
        let arr = [String(val.content_id), Number(val.total_hour)];
        studied_content_arry.push(arr);
    });
    studied_content_arry.unshift(['Content', 'Hours']);





// //name だけを取り出して配列にする。
// $date_hour = array_column($date, 'hour');

// //中身を確認
// foreach($date_hour as $str_name){
//     console.log($str_name);
// } 

// console.log(date);

</script>
{{-- @foreach ($dates as $date => $hour)
    dailySum.push([{{ $date }}, {{ $hour }}]);
@endforeach --}}


    <script src="{{ asset('/js/main.js') }}"></script>
    
</body>
</html>