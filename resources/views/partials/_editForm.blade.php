{{-- The Edit Button Partial --}}

{!! Form::open(['method' => 'POST', 'action' => ['TasksController@edit',$task->id]]) !!}
{!! Form::submit('Edit', ['class'=>'btn btn-raised btn-info col-lg-4 col-xs-12']) !!}
{!! Form::close() !!}
