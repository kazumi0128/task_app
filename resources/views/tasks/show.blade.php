<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task show</title>
</head>

<body>
    <a href="/tasks">戻る</a>
    <h1>{{ $task->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>
</body>

</html>
