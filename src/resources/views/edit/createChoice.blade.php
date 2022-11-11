<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>選択肢追加</title>
</head>
<body>
    <h1>選択肢追加</h1>

        <form id="form1" method="POST" action="{{route('quizChoice1.store')}}">
            @csrf

            <div>
                <label for="form-title">正解の選択肢</label>
                <input type="text" name="name" required>
                <input type="hidden" accept="*" name="question_id" value="{{ $question->id }}" required>
                <input type="hidden" name="valid" value="1" required>
            </div>
        
            <button type="submit">追加</button>
            <br>

        </form>

        <form id="form2" method="POST" action="{{route('quizChoice2.store')}}">
            @csrf

            <div>
                <label for="form-title">不正解の選択肢１つ目</label>
                <input type="text" name="name" required>
                <input type="hidden" accept="*" name="question_id" value="{{ $question->id }}" required>
            </div>
        
            <button type="submit">追加</button>
            <br>

        </form>

        <form id="form3" method="POST" action="{{route('quizChoice3.store')}}">
            @csrf

            <div>
                <label for="form-title">不正解の選択肢２つ目</label>
                <input type="text" name="name" required>
                <input type="hidden" accept="*" name="question_id" value="{{ $question->id }}" required>
            </div>
        
            <button type="submit">追加</button>
            <br>

        </form>

        <form method="POST" action="{{route('quizChoices.store')}}">
            @csrf
            <button type="submit">追加完了</button>
            <br>
            <a href="/quiz">問題リストへ</a>

        </form>
</body>
</html>