<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasks index</title>

</head>

<body>
    <h1>タスク一覧</h1>

    <!-- タスク一覧 -->
    <ul>
        @if ($tasks->count() > 0)
            @foreach ($tasks as $task)
                <li>
                    <!-- タスクのタイトル -->
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>

                    <!-- 削除ボタン -->
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                    </form>
                </li>
            @endforeach
        @else
            <p>タスクがありません。</p>
        @endif
    </ul>

    <!-- 新規タスク登録フォーム -->
    <h2>新規タスク登録</h2>
    @if ($errors->any())
        <div class="error">
            <p><b>{{ count($errors) }}件のエラーがあります。</b></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" id="body" rows="4" required>{{ old('body') }}</textarea>
        </p>
        <input type="submit" value="Create Task">
    </form>


</body>

</html>
