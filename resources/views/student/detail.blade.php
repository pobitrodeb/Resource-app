<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<section class="mt-5">

</section>

<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                      Student Detail
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <tr>
                                    <th>Name </th>
                                    <td>{{$student->name }}</td>
                                </tr>

                                <tr>
                                    <th>Email </th>
                                    <td>{{$student->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone </th>
                                <td>{{$student->phone }}</td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
