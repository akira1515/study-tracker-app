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

    <header>
        <h1 class="logo">
            <a href=""><img src="{{ asset('/images/posse_logo.jpg') }}" alt=""></a>
            <p>4th week</p>
        </h1>
        
        <p class="btn record_register" id="openModal"><span>記録・登録</span></p>
    </header>
    <div class="top_wrapper">
        <div class="container">
            <div class="time_and_bargraph">
                <div class="time">
                    <section class="item">
                        <p class="time_span">Today</p>
                        <p class="time_num"></p>
                        <p class="time_hour">hour</p>
                    </section>
                    <section class="item">
                        <p class="time_span">Month</p>
                        <p class="time_num"> </p>
                        <p class="time_hour">hour</p>
                    </section>
                    <section class="item">
                        <p class="time_span">Total</p>
                        <p class="time_num"> </p>
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
                        <li class="list_1">JavaScript</li>
                        <li class="list_2">CSS</li>
                        <li class="list_3">PHP</li>
                        <li class="list_4">HTML</li>
                        <li class="list_5">Laravel</li>
                        <li class="list_6">SQL</li>
                        <li class="list_7">SHELL</li>
                        <li class="list_8">情報システム基礎知識（その他）</li>
                    </ul>
                </section>
                <section class="circle_graph2">
                    <h1 class="learning_contents">学習コンテンツ</h1>
                    <div id="donutchart_learning_contents" style=""></div>
                    <ul class="learning_contents_lists">
                        <li class="list_1">ドットインストール</li>
                        <li class="list_2">N予備校</li>
                        <li class="list_3">POSSE課題</li>
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
            <div class="modalContents" id="modalContents">
                <div class="first_container">
                    <p class="learning_day">学習日</p>
                    <!-- <input type="text" class="learning_date input_space"> -->
                    <input type="text" class="learning_date input_space" id="sample">
                    <div class="learning_contents">
                    学習コンテンツ（複数選択可）
                    </div>
                    <h1 class="learning_contents_choices">
                            <label><input type="checkbox" class="checkbox">
                                <span class="checkbox-fontas">N予備校</span></label>
                            <label><input type="checkbox" class="checkbox">
                                <span class="checkbox-fontas">ドットインストール</span></label>
                                <!-- <br><br><br> -->
                            <label><input type="checkbox" class="checkbox">
                                <span class="checkbox-fontas checkbox-fontas_last">POSSE課題</span></label>
                    </h1>
                    <div class="learning_language">
                    学習言語（複数選択可）
                    </div>
                    <h1 class="learning_contents_choices">
                        <label><input type="checkbox" class="checkbox">
                            <span class="checkbox-fontas">HTML</span></label>
                        <label><input type="checkbox" class="checkbox">
                            <span class="checkbox-fontas">CSS</span></label>
                            <!-- <br><br><br> -->
                        <label><input type="checkbox" class="checkbox">
                            <span class="checkbox-fontas">JavaScript</span></label>
                        <label><input type="checkbox" class="checkbox">
                            <span class="checkbox-fontas">PHP</span></label>
                        <label><input type="checkbox" class="checkbox">
                            <span class="checkbox-fontas">Laravel</span></label>
                        <label><input type="checkbox" class="checkbox">
                            <span class="checkbox-fontas">SQL</span></label>
                        <label><input type="checkbox" class="checkbox">
                            <span class="checkbox-fontas">SHELL</span></label>
                        <label><input type="checkbox" class="checkbox">
                            <span class="checkbox-fontas checkbox-fontas_last">情報システム基礎知識(その他)</span></label>
                    </h1>
                </div>
                <div class="second_container">
                    <h1 class="learning_time">学習時間</h1>
                    <input type="text" class="learning_hours input_space">
                    <h1 class="twitter_for_comment">Twitter用コメント</h1>
                    <textarea name="" id="content" cols="30" rows="10" class="comment_for_twitter input_space"></textarea>
                    <div class="twitter_share">
                        <label><input type="checkbox" class="checkbox" id="check">
                            <span class="checkbox-fontas">Twitterにシェアする</span></label>
                    </div>
                </div>
            </div>
            <a href=""><p id="twitter" class="record_register_modal"><span class="record_register_modal_word">記録・登録</span></p></a>
            <div id="closeModal" class="closeModal">
                ×
            </div>
            <div class="loading" id="load"></div>
            <img id="done" class="done" src="done.png" alt="">
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
    

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    <script src="{{ asset('/js/main.js') }}"></script>
    
</body>
</html>