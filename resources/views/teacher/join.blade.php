@extends('layouts.app')
@section('content') 

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
                }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Register New Student</h2>
                    </div>
                   
                <form action="/update_student_teacher" method="POST">
                    {{method_field('PUT')}}
                        <div class="form-group ">
                             
                            <select name="teacher_id">
                                @foreach($teachers as $teacher)
                            <option value="{{$teacher->id}}">{{$teacher->teacher_name}}</option>
                                
                                @endforeach
                            </select> 
                            
                            
                            <select name="student_id">
                                @foreach($students as $student)
                            <option value="{{$student->id}}">{{$student->student_name}}</option>
                                
                                @endforeach
                            </select> 
                            
                            

                        </div> 

                         
                        <input type="submit" name="submit" class="btn btn-primary" value="submit" style="margin-bottom: 20%;">
        
                    {{csrf_field()}}
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


@endsection