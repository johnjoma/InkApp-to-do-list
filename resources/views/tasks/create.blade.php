@extends('layouts.app2')

@section('content')


    
      <div class="col-2">
        
      </div>
      <div class="col-8">
        <h1 class="text-center pt-3"><span class="d-block p-2 bg-primary text-white">ADD Task</span></h1>
    
        <div class="card-body">
            @include('inc.messages')
        
            
            {!! Form::open(['action'=>'TasksController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('date','Due Date')}}
                {{Form::date('duedate','',['class'=>'form-control','style'=>'width:12rem'])}}
            </div>

            <div class="form-group">

                {{Form::label('body','Description')}}
                <p class="text-muted bg-light"> Write a small description of your task.</p>
                {!!Form::textarea('description','',['class'=>'form-control','placeholder'=>'Description','rows'=>'3'])!!}  
            </div>
            {{Form::submit('Add Task',['class'=>'btn btn-primary'])}}
           
            
            {!! Form::close() !!}
                  
        </div>




      
      <div class="col-2">
        
      </div>
   
    
  
    
@endsection

   
