<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- latest compiler and minifiled css -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    
<div class="container">
    <br>
    <h1 class="text-white bg-dark" style="text-align: center;">
    we see the photo
</h1>
<div class="col-lg-8 m-auto d-block" >
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
 <label for="user">username :</label>
 <input type="text" name="username" id="user" class="form-control">
 </div>

 <div class="form-group">
 <label for="file">profile pic :</label>
 <input type="file" name="file" id="file" class="form-control">
 </div>

 <input type="submit" name="submit" value="submit" class="btn btn-success">
</form>
</div>
</div>
</body>
</html>