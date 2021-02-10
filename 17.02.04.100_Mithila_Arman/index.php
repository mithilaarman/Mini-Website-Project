<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <title>17-02-04-100</title>
</head>
<body>

<div class="container-fluid bg">
<div class="row">
<!-- set then all in middle -->
<div class="col-md-4 col-sm-4 col-xs-12"></div>
<div class="col-md-4 col-sm-4 col-xs-12">
<!-- Form start -->
    <form method="POST" action="insert.php" >
	<div class="form-container">
    <h2>Fill Up Here</h2>	
	<div class="form-row">
    <div class="form-group col-md-6">
	 <label for="inputFirst">First name</label>
      <input type="text" class="form-control" id="inputFirst" placeholder="First name" name="firstName"/>
    </div>
    <div class="form-group col-md-6">
	<label for="inputLast">Last name</label>
      <input type="text" class="form-control" id="inputLast" placeholder="Last name" name="lastName" />
    </div>
	</div>
	<div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" />
    </div>
    <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password"/>
    </div>
  
  <div class="form-group">
    <label for="inputmessage">Message</label>
    <input type="text" class="form-control" id="inputmessage" placeholder="message" name="message"/>
  </div>
  <div class="form-group">
    <label for="inputPhone">Phone Number</label>
    <input type="phone" class="form-control" id="inputPhone" placeholder="Phone" name="number"/>
  </div>
  
    <div class="form-group">
      <label for="inputState">Gender</label>
	  <div>
	  <label for="male" class="redio-inline"><input type="radio" name="gender" value="m" id="male">Male</label>
	  <label for="female" class="redio-inline"><input type="radio" name="gender" value="f" id="female">Female</label>
	  <label for="others" class="redio-inline"><input type="radio" name="gender" value="o" id="others">Others</label>
	  </div>

      </select>
    </div>
	
  <div class="form-group">
  
 <!--   <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me
      </label>
    </div>-->
	
	<button type="submit" class="btn btn-success btn-block">Submit</button>
  </div>
  <div class="form-group">
  <div>
		    <p><a href="table1.php">Go to Table</a><p>
		</div>
		</div>
  </div>
</form>

</div>
<!-- set then all in middle -->
<div class="col-md-4 col-sm-4 col-xs-12"></div>
</div>
</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>