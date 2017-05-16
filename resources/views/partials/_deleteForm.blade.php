<!-- Delete Form Partial -->
{!! Form::open(['method' => 'DELETE', 'action' => ['TasksController@destroy',$task->id],
                'onSubmit' => 'return confirm("Are You Really Wanna To Delete The task?");']) !!}
{!! Form::submit('Delete', ['class'=>'btn btn-raised btn-danger col-lg-3 col-xs-12']) !!}
{!! Form::close() !!}
