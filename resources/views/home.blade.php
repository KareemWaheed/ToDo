<!-- The Home Of To Do -->

@extends('layouts.app')
@section('content')
    <div class="container">
        @include('flash::message')

        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                <!-- Check if the user has any tasks to show -->
                @unless($tasks->isEmpty())
                    @foreach($tasks as $task)
                        <ul class="list-group">
                            <li class="list-group-item ">
                                <a class="{{ $task->state == 1 ? ' done-task':'' }} btn btn-raised btn-primary btn-primary-edited btn-block" href="{{url('/tasks',$task->id)}}">
                                    {!! $task->name !!}
                                    <span class="badge pull-right">
                                    @if($task->priority == 3)
                                            <i class="fa fa-flag fa-2x flag-important"></i>
                                        @elseif($task->priority ==2)
                                            <i class="fa fa-flag fa-2x flag-normal"></i>
                                        @elseif($task->priority ==1)
                                            <i class="fa fa-flag fa-2x flag-low"></i>
                                        @endif</span>
                                </a>
                                </li>
                        </ul>
                    @endforeach
                    @else
                        <h2 class="text-center">Nothing To show</h2>
                @endunless
            </div>
        </div>
        <a class="btn btn-success btn-raised btn-block" href="{!! url('tasks/create') !!}">Create New Task</a>
    </div>

@endsection

@section('scripts')
    <script>
        $(function(){
            $(".alert").delay(1700).slideUp(500, function() {
                $(this).alert('close');
            });
        });
    </script>
@endsection