<?php
require 'connection.php';
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
      <li class="nav-item"> <a class="nav-link active" href="index.php">Home</a></li>
    </ul>
	 <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link active" href="display.php">Display</a></li>
    </ul>  
    <div class="offset-md-10">
		<a href="exit.php"><button name="exit" class="btn btn-secondary">Exit</button></a>
    </div>
  </div>
</nav>

<!-- UserForm -->
<?php
/* show current day, time, date*/
date_default_timezone_set( 'Asia/Kolkata' );
$day = date( 'l' );
$time = date( 'h:i:s' );
$current_date = date( 'Y-m-d' );
?>
<div class="container w-50">
    <form action="" method="post" class="form-container">
      <p class="text-center fs-2">Entrance</p>
      <hr>
      <br>
      <div class="row">
        <div class=" form-group col-md-6">
          <label class="fw-bold">*ID No:-</label>
          <input type="number" name="id" class="form-control" placeholder="Enter ID" required>
        </div>
        <div class="col-md-6">
          <label class="fw-bold">*Name:-</label>
          <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
        </div>
      </div>
      <div class="row">
        <div class=" form-group col-md-6">
          <label class="fw-bold">*Trade:-</label>
          <input type="text" name="trade" class="form-control" placeholder="Enter Trade" required>
        </div>
        <div class="col-md-6">
          <label class="fw-bold">*Father's Name:-</label>
          <input type="text" name="fname" class="form-control" placeholder="Enter Father's Name" required>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label class="fw-bold">*Government ID:-</label>
          <input type="text" name="gid" class="form-control" placeholder="Enter Government ID" required>
        </div>
        <div class="form-group col-md-6">
          <label class="fw-bold">*Date-of-Birth:-</label>
          <input type="date" name="dob" class="form-control" required>
        </div>
      </div>
      <div class="row">
        <div class=" form-group col-md-6">
          <label class="fw-bold">*Current Day:-</label>
          <input type="text" name="cday" class="form-control"  value="<?php echo $day; ?>" required>
        </div>
        <div class="col-md-6">
          <label class="fw-bold">*Current Date:-</label>
          <input type="text" name="cdate" class="form-control" value="<?php echo $current_date; ?>" required>
        </div>
      </div>
      <div class="row">
        <div class=" form-group col-md-6">
          <label class="fw-bold">*Entrance Time:-</label>
          <input type="text" name="etime" class="form-control" value="<?php echo $time; ?>" required>
        </div>
        <div class="col-md-6 mb-3">
          <label class="fw-bold">*Shift:-</label>
          <input type="text" name="shift" class="form-control" required>
        </div>
      </div>
      <div class="d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
      </div>
	</form>
</div>
<?php
/* Insert query */
if ( isset( $_POST[ 'submit' ] ) ) {
  $id = $_POST[ 'id' ];
  $name = $_POST[ 'name' ];
  $trade = $_POST[ 'trade' ];
  $fname = $_POST[ 'fname' ];
  $gid = $_POST[ 'gid' ];
  $dob = $_POST[ 'dob' ];
  $shift = $_POST[ 'shift' ];
  $cday = $_POST[ 'cday' ];
  $cdate = $_POST[ 'cdate' ];
  $etime = $_POST[ 'etime' ];

  if ( $id != "" && $name != "" && $trade != "" && $fname != "" && $dob != "" && $gid != "" && $cdate != "" && $cday != "" && $shift != "" && $etime != "" ) {
    $insertquery = "INSERT INTO `workers`(`id`, `name`, `trade`, `father_name`, `dob`, `govt_id`) VALUES ('$id', '$name', '$trade', '$fname', '$dob', '$gid');";
    $insertquery .= "INSERT INTO `details`(`id`, `date`, `Day`, `shift`, `time_in`) VALUES ('$id', '$cdate', '$cday', '$shift', '$etime')";
    $data = mysqli_multi_query( $conn, $insertquery );

    if ( $data ) 
	{
      ?>
		<script>alert('Submitted Successfully ! ');</script>
	<?php
	} 
	else 
	{
		echo "Failed to submit !" .mysqli_error($conn);
	}
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