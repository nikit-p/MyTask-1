<?php
include( 'connection.php' );
error_reporting( 0 );
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!--My Custom CSS-->
<link href="mycustom.css" rel="stylesheet" type="text/css">
<title>Index Page</title>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark"> <a class="navbar-brand" href="#">ACME EHS TEAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link active" href="index.php">Home</a> </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link active" href="display.php">Display</a></li>
    </ul>
    <div class="offset-md-10"><a href="index.php">
      <button name="entry" class="btn btn-secondary">Entry</button>
      </a></div>
  </div>
</nav>

<!-- UserForm -->
<?php
/* show current time, date*/
date_default_timezone_set( 'Asia/Kolkata' );
$exit_time = date( 'h:i:s' );
$exit_date = date( 'Y-m-d' );
?>
<div class="container w-50">
  <form action="" method="post" class="form-container">
    <p class="text-center fs-2">Exit Here</p>
    <hr>
    <br>
    <div class="form-group row mb-3">
      <label class="col-2 offset-2 col-form-label fw-bold">ID No:-</label>
      <div class="col-6">
        <input type="text" name="id" value="" class="form-control">
      </div>
    </div>
    <div class="form-group row mb-3">
      <label class="col-2 offset-2 col-form-label fw-bold">Exit Date:-</label>
      <div class="col-6">
        <input type="text" name="edate" value="<?php echo $exit_date; ?>" class="form-control">
      </div>
    </div>
    <div class="form-group row mb-3">
      <label class="col-2 offset-2 col-form-label fw-bold">Exit Time:-</label>
      <div class="col-6">
        <input type="text" name="etime" value="<?php echo $exit_time; ?>" class="form-control">
      </div>
    </div>
    <div class="offset-6">
      <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </div>
  </form>
</div>
</div>
<?php
/* Exit query */
if ( isset( $_POST[ 'submit' ] ) ) {
  $id = $_POST[ 'id' ];
  $edate = $_POST[ 'edate' ];
  $etime = $_POST[ 'etime' ];

  $update_query = "UPDATE details SET edate = '$edate' , time_out = '$etime' WHERE id = '$id' ";
  $data = mysqli_query( $conn, $update_query );

  if ( $data === true ) {
    ?>
<script>alert('Exited Successfully');</script>
<?php
} else {
  echo "Exit Failed !";
}
}
?>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>