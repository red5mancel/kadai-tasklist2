@extends('originar.app')


@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

<p>{{ $task->content }}</p>



   

    {!! link_to_route('task.edit', 'このメッセージを編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection