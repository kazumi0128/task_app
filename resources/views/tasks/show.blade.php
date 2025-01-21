<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasks show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>
    <h1>タスク詳細</h1>

    <div>
        <h2>【タイトル】</h2>
        <p>{{ $task->title }}</p>
    </div>

    <div>
        <h2>【内容】</h2>
        <p>{!! nl2br(e($task->body)) !!}</p>
    </div>

    <div class="button-group">
        <!-- 一覧に戻るボタン -->
        <button onclick="location.href='{{ route('tasks.index') }}'">一覧に戻る</button>

        <!-- 編集するボタン -->
        <button onclick="location.href='{{ route('tasks.edit', $task->id) }}'">編集する</button>

        <!-- 削除するボタン -->
        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('削除しますか？')">削除する</button>
        </form>
    </div>

</body>

</html>
