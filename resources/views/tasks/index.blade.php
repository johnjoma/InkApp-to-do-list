@extends('layouts.app')

@section('content')
<h1 class="text-center pt-3"><span class="d-block p-2 bg-primary text-white">My Tasks</span></h1>
<div class="container pt-1">
    <div class="row">
        <div class="col-md-12 pb-3">

            <table class="table table-hover pt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task</th>
                    <th scope="col">Due date</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                
            @if(count($tasks)>1)

            @foreach ($tasks as $task)
                <tbody>
                  <tr>
                  <th scope="row">{{$task->id}}</th>
                  <td>{{$task->title}}</td>
                  <td>{{$task->duedate}}</td>
                    <td>
                        <button class="btn btn-success" type="submit" aria-label="Undone" title="Mark as undone">
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                            </button>

                            <button class="btn btn-warning" type="submit" aria-label="Done" title="Mark as done">
                                <span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
                                
                                </button>

                                <a href="" class="btn btn-primary" ><i class="fa fa-address-book" aria-hidden="true"></i>
                                    
                                    </button>

                    </td>
                  </tr>
                  
                </tbody>
                @endforeach
              </table>
              

@else
<p>No posts found</p>
@endif 
        </div>
    </div>
</div>
@endsection
