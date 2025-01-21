<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasks edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 <style>
 /* ボタン横並び */
        .button-group {
            display: flex;
            gap: 10px; /* ボタン間の間隔 */
            margin-top: 20px; /* 上部余白 */
        }

</head>

<body>
    <h1>タスク編集</h1>

    @if ($errors->any())

        <div class="error">
         <h2>[エラー内容]</h2>
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ old('body', $task->body) }}</textarea>
        </p>
        
        <div class="button-group">

        <input type="submit" value="更新">
    </form>

    
    <button onclick="location.href='{{ route('tasks.show', $task->id) }}'">詳細に戻る</button>
</body>
</form>
</body>

</html>
