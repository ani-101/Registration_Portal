<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Contact us</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h3><b>Hi!!! Let's Talk</b></h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sr = $_POST['idab'];
    $sa = $_POST['idb'];
    $sl = $_POST['idl'];
    $sc = $_POST['idc'];



    //connecting to a database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
      die("sorry, failed to connect: " . mysqli_connect_error());
    } else {


      $sql = "INSERT INTO `query` (`Name`, `Mobile No.`, `Email`, `Enter Query`) VALUES ('$sr', '$sa', '$sl', '$sc')";
      $result = mysqli_query($conn, $sql);

      //add new trip to table
      if ($result) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Success</strong> Your query has been submitted successfully!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

      } else {
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
    <form action="/php_tu/contact.php" method="post">
      <div class="mb-3">
        <label for="idab" class="form-label">Enter your Name</label>
        <input type="text" class="form-control" name="idab" id="idab" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="idb" class="form-label">Enter Mobile No.</label>
        <input type="int" class="form-control" id="idb" name="idb">
      </div>
      <div class="mb-3">
        <label for="idl" class="form-label">Enter Email </label>
        <input type="email" class="form-control" id="idl" name="idl">
      </div>
      <div class="mb-3">
        <label for="idc" class="form-label">Enter your Query</label>
        <input type="text" class="form-control" id="idc" name="idc">
      </div>

      <button type="submit" class="btn btn-primary" onclick="startTimer()" onclick="saveResponse()"
        id="startButton">Submit</button>
    </form>
  </div>

  <!-- <script type="text/javascript">
    startButton.addEventListener('click', function () {
      // Code to start the game goes here

      alert('The game has started!');
      window.location.replace = "index.html";

    });

  </script> -->

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