<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4 text-center">Edit Student Form</h4>
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                        <form action="{{ url('student/'.$student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-3">Enter Name </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">Enter Email </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">Enter Phone </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="phone" value="{{ $student->phone }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                 <button type="submit" class="btn btn-primary"> Update Student Informations </a>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
