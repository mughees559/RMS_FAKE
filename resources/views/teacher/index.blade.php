<!-- @extends('layouts.app') -->

<!-- @section('content') -->
<html>
<h1>  Registered Course</h1>
<div class="container"> 
<!-- Side navigation -->
<table class="table table-bordered">
<tr class="">
<th>Std no</th> 
<th>Teachers Name</th> 
<th>Action</th>
</html>
<!-- 

@if($teachers)

    @foreach($teachers as $teacher)
    
    <tr>
        <td>{{$teacher->id}}</td>
        <td>{{$teacher->teacher_name}}</td>
         <td><a type="button" href="books/delete/{{$teacher->id}}" class="btn btn-primary " >Delete</a> <a type="button" href="books/edit/{{$teacher->id}}" class="btn btn-secondary">Edit</td>
    </tr>

    
{{csrf_field()}}
   
     
    @endforeach 

</table>
<a type="button" href="/createTeachers" class="btn btn-secondary">Reg_Teacher</a>
<a type="button" href="/join_course_teacher" class="btn btn-success">join</a>
@endif
     
{{-- @else
<h2>no post found</h2> --}}
{{-- @endif --}} -->
<!-- @endsection -->
