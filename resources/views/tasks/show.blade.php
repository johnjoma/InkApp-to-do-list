@extends('layouts.app2')

@section('content')


      <div class="col-1">
        
      </div>
      <div class="col-10">
        <h1 class="text-center pt-3"><span class="d-block p-2 bg-primary text-white">Task</span></h1>

        
<div class="card text-center">
    <div class="card-header">
    <h1>{{$task->title}}</h1>
    </div>
    <div class="card-body">
      
    <p class="card-text">{{$task->description}}</p>
      <hr>
      <p><small>Due date:{{$task->duedate}} </small></p>
    </div>
    <div class="card-footer">
    <a href="/tasks/{{$task->id}}/edit" class="btn btn-primary btn-lg m-2"><i class="fa fa-edit" aria-hidden="true"></i></a>
        

       {!!Form::open(['action'=>['TasksController@destroy', $task->id], 'method'=>'POST'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        
                        {{Form::button('<i class="fa fa-trash-o"></i>',['type'=>'submit','class'=>'btn btn-danger btn-lg']) }}
                      {!!Form::close()!!}
    </div>
</div>




      
      <div class="col-1">
        
      </div>
   
    
  
    
@endsection

   
