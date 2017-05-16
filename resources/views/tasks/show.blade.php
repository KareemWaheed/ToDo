<!-- The View Shows The Task it self -->
@extends('layouts.app')

@section('content')

<div class="container">
    @include('flash::message')
    <div class="page-header">
        <h1>{{$task->name}}
            @if($task->state ==1) <small>Finished</small> @endif
        </h1>
        <!-- Check The Priority and change the flag -->
        @if($task->priority == 3)
            <i class="fa fa-flag fa-2x flag-important"></i>
        @elseif($task->priority ==2)
            <i class="fa fa-flag fa-2x flag-normal"></i>
        @elseif($task->priority ==1)
            <i class="fa fa-flag fa-2x flag-low"></i>
        @endif
    </div>
    <div class="well ">
        <p class="showBody">{!!   nl2br($task->body)  !!}</p> <!-- nl2br to not escaping the <br>  -->
    </div>

    <div class="form-group">
        <label class="col-md-1 control-label" for="singlebutton"></label>
        <div class="center-block">
            <!-- The Forms To Edit, delete or change state of the task -->
            @include('partials.finishedOrNot',['finished' => 'Mark The Task As Finished',
                                           'notFinished' => 'Mark The Task As Not Finished',
                                           'classes' => 'btn btn-raised btn-primary col-lg-3 col-xs-12'])
            @include('partials._editForm')
            @include('partials._deleteForm')
        </div>
    </div>


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