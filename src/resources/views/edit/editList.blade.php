<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>編集</h1>

        <form method="POST" action="{{route('quizList.update',['id' =>$big_question->id])}}">
        @csrf
        
            <div>
            タイトル名
            <input type="text" name=title value="{{$big_question->title}}">
            </div>

            {{-- <div>
            設問
            </div> --}}

            <div>
            {{-- 画像 --}}
            {{-- <a href="{{route('quizImg.edit',['img'=>$question->id])}}">画像編集</a> --}}
            {{-- <input type="file" name=img value="{{$question->img}}"> --}}
            </div>

            <div>
            {{-- 地名の選択肢
            @foreach ($choices as $choice)
                    {{ $choice->name }}
            @endforeach --}}
            </div>
        
        
            <input type="submit" value="更新する">
        
        </form>

        <form method="POST" action="{{route('quizList.destroy',['id'=>$big_question->id])}}">
            @csrf
            <button type="submit">削除</button>
        </form>
</body>
</html>