@extends('layouts.app')

@section('content')
  
<div class="container pt-5">
      <div class="row mx-lg-n5">
    <div class="col-6 col-md-4 pt-2 pb-2 border bg-light">
    <span class="d-block p-2 bg-primary text-white">Add Tasks</span>

    <form class="pt-3">
  <div class="form-group">
    <label>Task Title</label>
    <input type="text" class="form-control" name="title"placeholder="Clean windows">
  </div>

  <div class="form-group">
  <label>Due date:</label>
  <input type="date" id="duedate" name="duedate" min="2/18/2020">
  </div>
  
  
  <div class="form-group">
    <label>Small description/Additional info</label>
    <textarea class="form-control" name="desc" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Create Task</button>
</form>
    <style>
    input[type=date] {
  border: none;
  border-bottom: 2px solid black;

}

.actions{

    display: inline-block;

}
    
    </style>



    
    
    </div>
    <div class="col-12 col-md-8 pt-2 border bg-light">
    <span class="d-block p-2 bg-primary text-white">My Tasks</span>


    <table class="table table-hover pt-3">
  <thead>
    <tr>
      
      <th scope="col">#</th>

      <th scope="col">Title</th>

      <th scope="col">status</th>
     
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>1</td>
     
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, accusamus?</td>
      <td><button type="button" class="btn btn-warning  ">Pending...</button></td>
      
      <td>
      
      
      

@endsection