
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>RAMR Education</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="css/css-circular-prog-bar.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
<body>

<div class="header">
			<div class="container-flued ">
				<div class="row">
					<div class="col-md-6">
						<a href=""><img src="img/logo.png" alt="" class="logo"></a>
					</div>
					<div class="col-md-6">
						<h1 class="website-title">RAMR SCHOOL</h1>
						<h4 class="sub-title">Smart, Quick & Creative Education...</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-area">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item ">
					<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">Course Catagory <span class="caret"> </span></a>
					 <ul class="dropdown-menu">
						 <li><a class="nav-link" href="CSECourses.html">CSE</a> </li>
						 <li><a class="nav-link" href="#">EEE</a> </li>
						 <li><a class="nav-link" href="#">Civil</a> </li>
						 <li><a class="nav-link" href="#">Textile</a> </li>
					</ul>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="notification.html">Notification</a>
				  </li>
				  <li class="nav-item">
						<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">Members<span class="caret"> </span></a>
							<ul class="dropdown-menu member"> 
								<li> <a href ="nav-link" href="#">Teachers</a></li>
								<li> <a href ="nav-link" href="#">Students</a></li>
							</ul>
					
				  </li>
				  <li class="nav-item">
					<!-- Button trigger modal -->
					<button type="button" class="btn signup" data-toggle="modal" data-target="#exampleModal">
					  Sign Up
					</button>
					
					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Register Your Account</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
								 <form>
							  <div class="form-row">
							   <div class="form-group col-md-6">
								  <label for="inputEmail4">First Name</label>
								  <input type="name" class="form-control" id="inputEmail4" placeholder="First Name">
								</div>
								<div class="form-group col-md-6">
								  <label for="inputPassword4">Last Name</label>
								  <input type="name" class="form-control" id="inputPassword4" placeholder="Last Name">
								</div>
							   
								<div class="form-group col-md-12">
								  <label for="inputEmail4">Email</label>
								  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
								</div>
								<div class="form-group col-md-12">
								  <label for="inputPassword4">Password</label>
								  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputAddress">Address</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
							  </div>
							  <div class="form-group">
								<label for="inputAddress2">Address 2</label>
								<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="inputCity">City</label>
								  <input type="text" class="form-control" id="inputCity">
								</div>
								
								<div class="form-group col-md-6">
								  <label for="inputZip">Zip</label>
								  <input type="text" class="form-control" id="inputZip">
								</div>
								
								<div class="form-group col-md-12">
								  <label for="inputState">Relation</label>
								  <select id="inputState" class="form-control">
									<option selected>Choose...</option>
									<option>Teacher</option>
									<option>Student</option>
								  </select>
								</div>
							  </div>
							  <div class="form-group">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="gridCheck">
								  <label class="form-check-label" for="gridCheck">
									Remember Me
								  </label>
								</div>
							  </div>
							  <button type="submit" class="btn btn-primary">Submit</button>
							</form>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							
						  </div>
						</div>
					  </div>
					</div>
				  </li>
				  <li class="nav-item">
				   <button type="button" class="btn signin" data-toggle="modal" data-target="#exampleModal1">
					  Sign In
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							<form>
							  <div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>
							  <div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Remember Me</label>
							  </div>
							  <button type="submit" class="btn btn-primary">Done</button>
							</form>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							
						  </div>
						</div>
					  </div>
					</div>
				  </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			  </div>
			</nav>
		</div>

<h1 style="font-size:50px;text-align:center; background-color:powderblue"> Profile  Information </h1> 

<pre style="font-size:25px; font-family:vardana; background-color:#cfe095; color:black;padding:17px">

E-mail:	arman.cse.38c@gmail.com	   		Address: 346 Dewanpara, Daskhinkhan, Uttara, Dhaka-1230

Phone:	+88 01687-022649					Website: itsarman117.wordpress.com

Date of birth:	January 1, 1997		     		Languages:	English & Bengali

</pre>

</body>
</html>
