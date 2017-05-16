<!-- Create new task or Edit Form Partial -->
<div class="container">
    <fieldset>
        <legend>Create New Task
        </legend>
        <div class="input-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-file-text fa-1x">
        </i>
      </span>
            {!! Form::text('name', null,['class'=>'form-control','placeholder' => 'Type The Title Of Your Task']) !!}
        </div>
        <!-- Body Input -->
        <div class="form-group">
            {!! Form::textarea('body', null,['class'=>'form-control body','Placeholder' => 'Describe Your Task Right Here']) !!}
        </div>
        <!-- List Priority -->
        <div class="form-group">
            <label for="priority">Priority:
            </label>
            {{ Form::select('priority', ['3' => 'High Priority', '2' => 'Normal', '1' => 'Low Priority'], null,['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            <label for="s1">Task State:
            </label>
            {{ Form::select('state', ['0' => 'Unfinished', '1' => 'Finished'], null,['class'=>'form-control', 'id' => 's1']) }}
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn btn-primary btn-raised" value="{!! $submitButtonText !!}">
        </div>
    </fieldset>
    @include('errors.formerrors')
</div>
