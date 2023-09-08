 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Todo App</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
     </script>
 </head>

 <body>
     <br>
     <div class="row">
         <div class="col-md-3 m-auto">
             <h3>My Todo App</h3>
             <form action="/add">
                 <div class="form-group">
                     <input type="text" class="form-control" name="item">
                 </div>
                 <br>
                 <input type="submit" class="btn btn-primary" name="add" value="Add Item">

             </form>
             <hr>
         </div>
     </div>
     <div class="row">
         <div class="col-md-4 m-auto">
             <table class="table">
                 <thead>
                     <tr>
                         <th>Serial Number</th>
                         <th>Item Name</th>
                         <th>Edit</th>
                         <th>Delete</th>


                     </tr>
                 </thead>
                 <!-- {{$count = 0}} -->
                 @foreach($todo as $todo)


                 <tr>
                     <td>{{$count +=1}}</td>
                     <td>{{$todo["TodoItem"]}}</td>
                     <td><a href={{"/edit/$todo[SerialNumber]"}}>Edit</a></td>
                     <td><a href={{"/delete/$todo[SerialNumber]"}}>Delete</a></td>




                 </tr>
                 @endforeach

             </table>
         </div>
     </div>
     <hr class="col-md-10 m-auto">
     <br>
     <center class="col-md-3 m-auto">Created By Abdullah Khan</center>

 </body>

 </html>