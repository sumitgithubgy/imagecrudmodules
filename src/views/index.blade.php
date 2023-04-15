<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="containermt-2">
        <div class="card p-5">
            <h1>Images Data</h1>
           <a href="addimage"><button class="btn btn-primary m-2">Add Image</button></a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                        <td>{{$value['id']}}</td>
                        <td><img width="80px" height="80px" src="{{ asset('images/'.$value['images'])}}" alt="">
                        </td>
                        <td>
                            <a href="{{'update/'.$value['id']}}"><button class="btn btn-success mr-3">Update</button></a>
                            <a href="{{'delete/'.$value['id']}}"><button class="btn btn-danger mr-3">Delete</button></a></td>
                    </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
    </div>

</body>

</html>