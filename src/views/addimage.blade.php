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
<div class="conatiner">
    
    <div class="card m-5 p-5">
        <div class="card-header"><h1>Image Import</h1></div>
        <div class="card-body">

            <form action="add" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="image">Images:</label>
                    <input type="file" class="form-control-file border" name="image" value="{{old('images')}}" required>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form> 
        </div>
    </div>
</div>
</body>
</html>