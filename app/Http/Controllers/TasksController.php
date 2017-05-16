<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Laracasts\Flash\Flash;

class TasksController extends Controller
{
    /**
     * Middleware to Make Controller Works to only users
     * TasksController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * index function
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks = Auth::user()->tasks()->orderBy('priority','desc')->get();
        return view('home',compact('tasks'));
    }

    /**
     * Return the create view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store The New Task in the database and Flash A message to the user
     * @param CreateTaskRequest $request
     * @return tasks home veiw
     */
    public function store(CreateTaskRequest $request)
    {

        $input = $request->all();
        Auth::user()->tasks()->save(new Task($input));
        flash()->success('You Created The ToDo Successfully');
        return redirect('tasks');
    }

    /**
     * Show the Task in its view
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

        $task = Task::findOrFail($id);
        if(Auth::id() == $task->user_id) {
            return view('tasks.show', compact('task'));
        }

        else{
            return redirect('/');
        }
    }

    /**
     * Check if the user authorize to edit and redirect
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
       if(Auth::id() == $task->user_id){
            return view('tasks.edit',compact('task'));
        }
        else{
            return redirect('/');
        }

    }

    /**
     * Update The Task and save in the database
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        flash()->success('Your Edited The Task Successfully');
        return redirect()->action('TasksController@show',$id);
    }

    /**
     * Edit the Task State From 0 to 1 and 1 to 0
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function setTaskStatus($id)
    {
        $task = Task::findOrFail($id);
        $task->state == true ? $task->update(['state' => false]) : $task->update(['state' => true]);
        flash()->success('Your Changes Saved Successfully');
        return redirect()->back();
    }


    /**
     * Delete The Task
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        if(Auth::id() == $task->user_id){
            $task->delete();
            flash()->success('You Deleted The Task');
            return redirect('/');
        }
        else{
            return redirect('/');
        }

    }
}
