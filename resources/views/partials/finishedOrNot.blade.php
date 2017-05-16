<!-- Change The Task State Form -->

{!! Form::open(['method' => 'PATCH','action' => ['TasksController@setTaskStatus',$task->id]]) !!}
@if($task->state == true)
    {!! Form::submit($notFinished, ['class'=>$classes]) !!}
@else
    {!! Form::submit($finished, ['class'=>$classes]) !!}
@endif
{!! Form::close() !!}