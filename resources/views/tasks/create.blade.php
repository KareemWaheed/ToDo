@extends('layouts.app')
<!-- Create New Task from _form partial-->

@section('content')
{!! Form::open(['url' => 'tasks']) !!}
@include('tasks._form',['submitButtonText' => 'Create The Task'])
{!! Form::close() !!}

@endsection
