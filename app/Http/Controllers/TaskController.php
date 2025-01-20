<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller

{
  // indexページへ移動
  public function index()
  {
    // モデル名::テーブル全件取得
    $tasks = Task::all();
    // tasksディレクトリーの中のindexページを指定し、tasksの連想配列を代入
    return view('tasks.index', ['tasks' => $tasks]);
  }

  public function create()
  {
    return view('tasks.create');
  }

  public function store(Request $request)
  {
    // インスタンスの作成
    $memo = new Task();

    // 値の用意
    $memo->title = $request->title;
    $memo->body = $request->body;

    // インスタンスに値を設定して保存
    $memo->save();

    // 登録したらindexに戻る
    return redirect(route('tasks.index'));
  }

  // showページへ移動
  public function show($id)
  {
    $task = Task::find($id);
    return view('tasks.show', ['task' => $task]);
  }
}
