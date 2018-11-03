@extends('originar.app')


@section('content')

<h1>id: {{ $task->id }} のメッセージ編集ページ</h1>








    {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
    
    
    

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::text('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection