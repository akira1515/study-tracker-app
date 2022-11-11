<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>クイズ一覧</title>
</head>

<body>
    @foreach ($big_questions as $big_question)
        <p><a href="/quiz/{{ $big_question->id }}">{{ $big_question->title }}</a></p>
    @endforeach


    <a href="/createList">問題リスト追加</a>
    <br>
    <a href="/edit">問題タイトル編集</a>
    <a href="/">問題画像編集</a>
</body>

</html>