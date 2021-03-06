<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $tasks = Task::orderBy('created_at','desc')->paginate(4);
        return view('tasks.index')->with('tasks',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'

        ]);

        //Add Tasks

        $task = new Task;
        $task->title=$request->input('title');
        $task->duedate=$request->input('duedate');
        $task->description=$request->input('description');
        $task->user_id = auth()->user()->id;

        $task->save();

        return redirect('home')->with('success','Task Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        
        return view('tasks.show')->with('task',$task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        
        return view('tasks.edit')->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {     
        //Validate data
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'

        ]);

        //Add Tasks

        $task = Task::find($id);
        $task->title=$request->input('title');
        $task->duedate=$request->input('duedate');
        $task->description=$request->input('description');

        $task->save();

        return redirect('home')->with('success','Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task =Task::find($id);
        $task->delete();

        return redirect('home')->with('success','Task deleted successfully');

    }
 

    public function toggleDoneStatus(Request $request, Task $task){

        
        $task->done =!$task->done;
        $task->save();
        return back();
    }
}
