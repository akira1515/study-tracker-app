<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .user_admin_title{
            display: flex;
            justify-content: center;
        }
        .user_admin{
            display: flex;
            justify-content: center;
            /* flex-direction: column; */
        }
    </style>
</head>
<body>
    <h1 class="user_admin_title">ユーザーリスト管理</h1>
    <a href="/admin/index">管理者画面に戻る</a>
    <div class="user_admin">
        <table border="10">
            <tr>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="/admin/user/edit/{{ $user->id }}"><button>編集</button></a></td>
                <td> 
                    <form method="post" action="{{ route('adminUserDelete', $user->id) }}">
                        @csrf
                        <button type="submit">削除</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
        {{-- <li>
            <div>名前:  {{$user->name}} , メールアドレス:  {{$user->email}}
                <a href="/admin/user/edit/{{ $user->id }}"><button>編集</button></a>
                <form method="post" action="{{ route('adminUserDelete', $user->id) }}">
                    @csrf
                    <button type="submit">↑ 削除</button>
                </form>
            </div>
        </li>
        <tr>
        <td>2016/5/20</td>
        <td>原宿</td>
        </tr>
        
    <ul>ユーザーリスト管理
        <br>
        
    </ul> --}}
</body>
</html>