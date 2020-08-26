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
                        <h2>Register Teacher</h2>
                    </div>
                   
                    <form action="/storeTeachers" method="POST">
                        <div class="form-group ">
                            <label>Teacher name:</label>
                            <input type="text" name="teacher_name" class="form-control" value="">
                            <span class="help-block"></span>
                             
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