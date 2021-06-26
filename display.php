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

<!-- Table display-->
<table class="table table-dark table-bordered table-striped table-hover table-responsive mt-5">
  <thead>
    <tr>
      <th scope="col" colspan="12" class="text-center fs-4">Labour Deployment chart</th>
    </tr>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Trade</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Govt ID</th>
      <th scope="col">Entry Date</th>
      <th scope="col">Entry Day</th>
      <th scope="col">Shift</th>
      <th scope="col">Entry Time</th>
      <th scope="col">Exit Date</th>
      <th scope="col">Exit Time</th>
    </tr>
  </thead>
  <tbody>
    <?php
    /* Display Workers and details query*/
    $displayquery = "SELECT * FROM `workers`, `details` WHERE `workers` . `id` = `details` . `id`";
    $data = mysqli_query( $conn, $displayquery );
    $total = mysqli_num_rows( $data );

    if ( $total != 0 ) {
      while ( $row = mysqli_fetch_assoc( $data ) ) {
        echo "<tr>
				<td>" . $row[ 'id' ] . "</td>
				<td>" . $row[ 'name' ] . "</td>
				<td>" . $row[ 'trade' ] . "</td>
				<td>" . $row[ 'father_name' ] . "</td>
				<td>" . $row[ 'dob' ] . "</td>
				<td>" . $row[ 'govt_id' ] . "</td>
				<td>" . $row[ 'date' ] . "</td>
				<td>" . $row[ 'Day' ] . "</td>
				<td>" . $row[ 'shift' ] . "</td>
				<td>" . $row[ 'time_in' ] . "</td>
				<td>" . $row[ 'edate' ] . "</td>
				<td>" . $row[ 'time_out' ] . "</td>
			  </tr>";
      }
    } else {
      echo "No records Found !";
    }
    ?>
  </tbody>
</table>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>