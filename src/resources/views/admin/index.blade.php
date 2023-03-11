<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .admin_display{
            display: flex;
            justify-content: center;
        }
        .admin_title{
            display: flex;
            justify-content: center;
            /* flex-direction: column; */
        }
        .contents_learning{
            margin: 20px
        }
        .langs_learning{
            margin: 20px
        }
    </style>
</head>
<body>
    <h1 class="admin_display">管理者画面</h1>
    <a class="admin_display" href="/admin/user/index">ユーザーリスト管理はこちらへ</a>
    <div class="admin_title">
        <div class="contents_learning">
        <h3>学習コンテンツ管理</h3>
        <table border="10">
            <tr>
                <th>コンテンツ名</th>
                <th>編集</th>
            </tr>
            @foreach ($contents as $content)
            <tr>
                <td>{{ $content->name}}</td>
                <td><a href="/admin/content/index/{{ $content->id }}"><button>コンテナ名変更 or 削除</button></a></td>
            </tr>
            @endforeach
        </table>
        <a href="/admin/content/add/index">学習コンテンツの新規追加</a>
        </div>

        <br>
        <br>
        <br>
        <div class="langs_learning">
        <h3>学習言語管理</h3>
        <table border="10">
            <tr>
                <th>言語名</th>
                <th>編集</th>
            </tr>
            @foreach ($langs as $lang)
            <tr>
                <td>{{ $lang->name}}</td>
                <td><a href="/admin/lang/index/{{ $lang->id }}"><button>言語名変更 or 削除</button></a></td>
            </tr>
            @endforeach
        </table>
        <a href="/admin/lang/add/index">学習言語の新規追加</a>
        </div>
    </div>

    {{-- <ul>
        <br>
        @foreach ($langs as $lang)
        <li>
            {{ $lang->name}}
            <a href="/admin/lang/index/{{ $lang->id }}"><button>言語名変更 or 削除</button></a>
        </li>
        @endforeach
        <a href="/admin/lang/add/index">学習言語の新規追加</a>
    </ul> --}}
</body>
</html>