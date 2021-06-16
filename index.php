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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- UserForm -->
<div class="container w-50 align-items-center mt-5">
  <div class="row justify-content-center">
    <form method="post" class="form-container">
      <p class="text-center fs-2">Entrance</p><hr>
      <br>
      <div class="row ">
        <div class=" form-group col-md-6">
          <label for="name">*Name:-</label>
          <input type="text" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
          <label for="email">*E-mail:-</label>
          <input type="email" class="form-control" placeholder="Your Email" required>
        </div>
      </div>
      <div class="row">
        <div class=" form-group col-md-6">
          <label for="pass">*Password:-</label>
          <input type="password" class="form-control" placeholder="Enter password" required>
        </div>
        <div class="col-md-6">
          <label for="re-pass">*Re-enter password:-</label>
          <input type="password" class="form-control" placeholder="Re-enter password" required>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="age">*Age:-</label>
          <input type="number" class="form-control" placeholder="Enter age" required>
        </div>
        <div class="form-group col-md-6">
          <label for="dob">*Date-of-Birth:-</label>
          <input type="date" class="form-control" required>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>