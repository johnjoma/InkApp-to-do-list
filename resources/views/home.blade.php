@extends('layouts.app2')

@section('content')

<style>

html, body {
  background:#FAF9F8;


                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .table{
              color: black;
            }

            .table .done{
              background-color: green;
              text-decoration-style: wavy;
            }
</style>
  <div class="col-2 ">
    
  </div>

        <div class="col-8 pb-2">
          <h1 class="text-center pt-1"><span class="d-block p-2 bg-primary text-white">My Tasks</span></h1>
          @include('inc.messages')
    
            <table class="table table-hover pt-3">
                <thead>
                  <tr>
                   
                    <th scope="col">Task</th>
                    <th scope="col">Due date</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                
            @if(count($tasks)>0)

            @foreach ($tasks as $task)
                <tbody>
                  <tr>
                    @if($task->done)
                  
                  <td class="done"><del>{{$task->title}}</del></td>
                  <td class="done"><del>{{date('F D, Y',strtotime($task->duedate))}}</del></td>
                  @else
                 
                  <td>{{$task->title}}</td>
                  <td>{{date('F D, Y',strtotime($task->duedate))}}</td>


                  @endif

                    <td>

                      {!!Form::open(['action'=>['TasksController@toggleDoneStatus', $task->id], 'method'=>'POST','class'=>'pb-1'])!!}
                        {{Form::hidden('_method','PATCH')}}
                        
                        @if ($task->done)

                        <button class="btn btn-success" type="submit" aria-label="Done" title="Mark as undone">
                          <i class="fa fa-thumbs-up"></i>
                          </button>
                        @else
                        <button class="btn btn-warning" type="submit" aria-label="undone" title="Mark as done">
                          <i class="fa fa-hourglass-start"></i>
                            
                            </button>   
                        @endif
                      {!!Form::close()!!}
                      

                           

                            <a href="/tasks/{{$task->id}}" class="btn btn-primary" title="View and modify task"><i class="fa fa-eye" ></i></a>
                                    
                                    

                    </td>
                  </tr>
                  
                </tbody>
                @endforeach

                @else
                 <p>No Tasks found</p>
                 @endif 

              </table>
              


        </div>
    <div class="col-2 p-4">
      {{$tasks->links()}}
    </div>
    
@endsection
