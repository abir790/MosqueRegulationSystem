<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    {{--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">--}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    @include('mosquehome.layouts.head')
    <style>
        body {
            background-image: url("https://www.cyberscoop.com/wp-content/uploads/2019/05/Synack_Trust-Report_cybersecurity_image.png");
            background-repeat:no-repeat;
            background-size:cover;
        }

    </style>
</head>
<body class="landing">

<!-- Header -->
@include('mosquehome.layouts.header')

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center><h4 style="border: 5px solid white; border-radius: 15px; background: white; color: black; padding: 10px;font-size: 18px">Form for Join a Project/Thesis</h4></center>
            <div class="form-group">
                <form action="/join_with_project_thesis" method="post" enctype="multipart/form-data" style="background: white; border-radius: 10px; font-size: 18px; padding: 50px">
                    @csrf
                    Select Thesis/Project:
                    <select class="form-control" name="course_type" id="exampleFormControlSelect1" required>
                        <option value="Thesis">Thesis</option>
                        <option value="Project">Project</option>
                    </select>
                    Start Date:
                    <input class="form-control" style="display: block; padding: 0.5rem 1rem;" type="date" name="start_time" value="2020-01-01" placeholder="Starting Date"><br>
                    <input class="form-control" type="text" name="name" placeholder="Student Name" required><br>
                    <input class="form-control" type="text" name="student_id" placeholder="Student ID" required><br>
                    <input class="form-control" type="email" name="email" placeholder="Student Email" required><br>
                    <input class="form-control" type="text" name="pt_title" placeholder="Project or Thesis Title" required><br>
                    <center><input type="submit" name="submit" ><br></center>
                </form>


            </div>
        </div>
        <br>
    </div>
</div><br>



</body>
</html>
