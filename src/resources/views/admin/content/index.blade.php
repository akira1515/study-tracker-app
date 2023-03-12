<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('contentsUpdate' , $content->id)}}">
    @csrf
    <input id="name" type="text" value="{{ $content->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <button type="submit">変更</button>
    </form>
    <form method="POST" action="{{ route('contentsDelete', $content->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit"> 削除</button>
    </form>
</body>
</html>