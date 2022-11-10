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
        <a href="{{route('quizList.edit',['id'=>$big_question->id])}}">{{ $big_question->title }}/{{ __('編集') }}</a>
    @endforeach


    <a href="/createList">問題リスト追加</a>
</body>

</html>