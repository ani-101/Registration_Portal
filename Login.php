
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SN Login</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item" href="#">Delete</a></li>
            <li><a class="dropdown-item" href="#">Refresh</a></li>
            <li><a class="dropdown-item" href="#">Update</a></li>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $sr = $_POST['idab'];
  $id = $_POST['ida'];
  $Student_Name= $_POST['pass'];
  $sl = $_POST['idl'];
  $sa = $_POST['idb'];
  $sp = $_POST['idp'];
  $sm = $_POST['idm'];
  $sc = $_POST['idc'];
  


//connecting to a database
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
    die("sorry, failed to connect: ". mysqli_connect_error());
}
else{
    

    $sql = "INSERT INTO `contact` (`Name`, `Mother's Name`, `Father's Name`, `Email`, `Mobile No.`, `Age`, `Study`, `Interested Course`) VALUES ('$sr', '$id', '$Student_Name', '$sl', '$sa', '$sp', '$sm', '$sc')";
    $result = mysqli_query($conn,$sql);

    //add new trip to table
    if($result){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Success</strong> Your entry has been submitted successfully!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

  }
else{
    //echo "record not inserted because". mysqli_error($conn);
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>ERROR</strong> Your entry has not been submitted due to some technical issue!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
  } 
}



}
?>
<div class="container">
<form action = "/php_tu/Login.php" method = "post">
<div class="mb-3">
    <label for="idab" class="form-label">Name</label>
    <input type="text" class="form-control" name = "idab" id="idab" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="ida" class="form-label">Mother's Name</label>
    <input type="text" class="form-control" name = "ida" id="ida" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Father's Name</label>
    <input type="text" class="form-control" id="pass" name = "pass">
  </div>
  <div class="mb-3">
    <label for="idl" class="form-label">Email</label>
    <input type="email" class="form-control" id="idl" name = "idl">
  </div>
  <div class="mb-3">
    <label for="idb" class="form-label">Mobile No.</label>
    <input type="int" class="form-control" id="idb" name = "idb">
  </div>
  <div class="mb-3">
    <label for="idp" class="form-label">Age</label>
    <input type="int" class="form-control" id="idp" name = "idp">
  </div>
  <div class="mb-3">
    <label for="idm" class="form-label">Study</label>
    <input type="text" class="form-control" id="idm" name = "idm">
  </div>
  <div class="mb-3">
    <label for="idc" class="form-label">Interested Course</label>
    <input type="text" class="form-control" id="idc" name = "idc">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>