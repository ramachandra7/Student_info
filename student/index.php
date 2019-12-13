<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	

.col-sm-2 img {
  margin: 0;
  position: absolute;
  left: 50%;
  top:40%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

/*button*/
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #0099cc;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 5px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>

</head>
<body style="background-color: #F4F7FC;">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
</nav>


<div class="container-fluid">
	 <div class="row">

    <div class="col-sm-2" style="background-color:lavender;height: 250px;margin:20px;"><img src="Anits_logo.jpg" width="140px" height="140px" style=" border-radius:50%; "  align="center">
    	<h3 style="text-align: center;margin-top: 200px;">Name</h3>
    </div>
  

  <div class="col-sm-9" style="background-color:lavender;height: 250px;margin:20px;" align="center">
  <form method="post" action="booking.php"  style="padding:20px;">
  	<div class="form-group row">
    <label  class="col-sm-4 col-form-label" style="">Roll NO : </label>
  
      <input type="text" class="col-sm-5" name="rollno" id="#"  value="">
  </div>
  <div class="form-group row">
       <label  class="col-sm-4 col-form-label">Name : </label>
  
      <input type="text" class="col-sm-5" name="name" id="#"  value="">
  </div>
  <div class="form-group row">
       <label  class="col-sm-4 col-form-label">Branch : </label>
      <input type="text" class="col-sm-5" name="branch" id="#"  value="">
  </div>
  <div class="form-group row">
      <label  class="col-sm-4 col-form-label">Overall CGPA : </label>
  
      <input type="text" class="col-sm-5" name="cgpa" id="#"  value="">
  </div>

  </form>
  </div>

</div>
<br>
<br>
<div class="row" >
 <div class="col-sm-5" id="ab"  style="margin-left: 480px;margin-top: -40px;">
<img src="Anits_logo.jpg" width="100%"  height="80%">

</div>
</div>
</div>


<button class="button" name="b1" style="vertical-align:middle;margin-left: 510px;margin-top: -160px; " onclick="window.location.href='details.php'"><span>Details </span></button>
<button class="button"  name="b2" style="vertical-align:middle;margin-left: 270px;margin-top: -160px;" onclick="window.location.href='marks3.php'"><span>Marks </span></button>

</div>
</body>
</html>