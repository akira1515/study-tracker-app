<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>画像追加</title>
</head>
<body>
    <h1>画像追加</h1>

        <form method="POST" action="{{route('quizImg.store')}}">
            @csrf

            <div>
                <label for="form-title">画像</label>
                <input type="file"　accept="*" name="img"  required>
                <input type="hidden"　accept="*" name="big_question_id"  value="{{ $big_question->id }}" required>
            </div>
        
        
            <button type="submit">追加</button>
            <br>
            <a href="/quiz">問題リストへ</a>

        </form>
</body>
</html>