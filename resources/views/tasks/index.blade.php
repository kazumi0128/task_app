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
    <ul>
        {{-- <li><a href="/tasks/1">PHP</a></li>
        <li><a href="/tasks/2">HTML</a></li>
        <li><a href="/tasks/3">CSS</a></1i> --}}
        @foreach ($tasks as $task)
            {{-- <li><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></li> --}}
            <li><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></li>
        @endforeach
    </ul>
    </ul>
    <!-- 新規登録画面へジャンプする -->
    <button onclick='location.href="{{ route('tasks.create') }}"'>登録する</button>

</body>

</html>
