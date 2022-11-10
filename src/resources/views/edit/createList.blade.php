<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>問題タイトル追加</title>
</head>
<body>
    <h1>問題タイトル追加</h1>

        <form method="POST" action="{{route('quizList.store')}}">
            @csrf

            <div>
                <label for="form-title">問題タイトル</label>
                <input type="text" name="title" id="form-title" required>
            </div>
        
        
            <button type="submit">追加</button>
            <br>
            <a href="/quiz">問題リストへ</a>

        </form>
</body>
</html>