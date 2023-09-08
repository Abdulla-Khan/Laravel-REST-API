<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 

</head>
<body>
<br>
    <div class="row">
        <div class="col-md-3 m-auto">
            <h3>My Todo App</h3>
            <form action="/update">
                <div class="form-group">
                <input type="hidden" class="form-control" name= "id" value = {{$todo['SerialNumber']}}>

                    <input type="text" class="form-control" name= "item" value = {{$todo['TodoItem']}}>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" name= "update" value= "Update" >

            </form>
            <hr>
        </div>
    </div>
</body>
</html>