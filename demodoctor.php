<?php
//connect to the database
$server = "localhost";
$username = "root";
$password = "";
$database = "hospital";

//creat a connection
$conn = mysqli_connect($server, $username, $password, $database);

//die if connection was not successful
if (!$conn) {
  die("sorry we failed to connnect" . mysqli_connect_error());
} 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST["name"];
  $Address = $_POST["Address"];
  $city = $_POST["city"];
  $contact = $_POST["contact"];
  $site = $_POST["site"];
  $category = $_POST["category"];

  $sql = "INSERT INTO `hospital`(`name`,`Address`,`city`,`contact`,`site`,`category`) VALUES ('$name','$Address','$city','$contact','$site','$category')";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "data has been inserted successful<br>";
  }
  else{
    echo "data is not  inserted successful<br>";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script
  src="https://code.jquery.com/jquery-3.6.4.js"integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="crossorigin="anonymous"></script> 
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  
  <script>
      $(document).ready( function(){
       $('#myTable').DataTable();
       });
  </script>
  <style>
    .div1 a {
      text-decoration: none;
      color: white;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <lord-icon src="https://cdn.lordicon.com/yrixyrst.json" trigger="hover" style="width:91px;height:70px;margin-left: -8px;">
        </lord-icon>
        <li class="nav-item active">
          <a class="nav-link" href="firstpage.php">Home <span class="sr-only">(current)</span>  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

      </ul>

    </div>
  </nav>

  <div class="div d-flex" style="height:100%;">
    <div class="div1 bg-dark p-3" style="height: 804px; font-size:larger;width:300px; font-size: x-large;">
            <a href="/website\websitecode\login.php">Login </a><br><br>
            <a href="/website\websitecode\hospital.php">Hospital</a><br><br>
            <a href="/website/websitecode/doctor.php">Doctor</a><br><br>
            <a href="">View Facility</a><br><br>
            <a href="">View Schedule</a><br><br>
            <a href="">ViewPatient</a><br><br>
            <a href="">ViewAppointment</a><br><br>
            <a href="">View Gallery</a><br><br>
            <a href="">City</a><br><br>
    </div>

    <div class="div2  d-flex" style="width: 100%; justify-content:space-between;">

  
    <div class="container my-4">
    <form action="demodoctor.php" method="POST">
      <div class="mb-3">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        <div class="form-group">
          <label for="Address">Address</label>
          <textarea class="form-control" id="Address" name="Address" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="city">city</label>
          <textarea class="form-control" id="city" name="city" rows="3"></textarea>
        </div> 
        <div class="form-group">
          <label for="contact">contact</label>
          <textarea class="form-control" id="contact" name="contact" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="site">site</label>
          <textarea class="form-control" id="site" name="site" rows="3"></textarea>
        </div> 
        <div class="form-group">
          <label for="category">category</label>
          <textarea class="form-control" id="category" name="category" rows="3"></textarea>
        </div> 
        <button type="submit" class="btn btn-primary">Add hospital</button>
    </form>
  </div>

  <div class="container">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.no</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">city</th>
          <th scope="col">contact</th>
          <th scope="col">site</th>
          <th scope="col">category</th>
         

        </tr>
      </thead>
      <tbody>
        
  <div class="container">
    <?php
    $sql = "SELECT * FROM `hospital`";
    $result = mysqli_query($conn,$sql);
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $sno = $sno + 1;
    //this is a select query 
    echo "<tr>
    <th scope='row'>".$row['s.no']."</th>
    <td>".$row['name']."</td>
    <td>".$row['Address']."</td>
    <td>".$row['city']."</td>
    <td>".$row['contact']."</td>
    <td>".$row['site']."</td>
    <td>".$row['category']."</td>
  </tr>";
    }
    ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      
    </div>
  </div>



</body>

</html>