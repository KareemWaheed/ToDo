@extends('layouts.app')
<!-- Edit Task by _form Partial -->

@section('content')
    {!! Form::model($task, ['method' => 'PATCH' , 'action' => ['TasksController@update', $task->id]]) !!}
        @include('tasks._form',['submitButtonText' => 'Edit The Task'])
    {!! Form::close() !!}

@endsection