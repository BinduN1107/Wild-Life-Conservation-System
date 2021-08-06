	<?php 
  	session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
		<title>Friends Of Wild Life </title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  	<link rel="stylesheet" type="text/css" href="css/styles.css">
	  	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
</div>
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  	<div class="container-fluid">
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
  			</button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ml-auto">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>

	        <li class="nav-item">
	          <a class="nav-link" href="about.php">About Us</a>
	        </li>

	        <li class="nav-item">
	          <a class="nav-link" href="resources.php">Resources</a>
	        </li>
	        
	        <li class="nav-item">
	          <a class="nav-link" href="Sign up.php">Sign Up</a>
	        </li>

	        <li class="nav-item">
	        	<a class="nav-link" href="login.php"> Login </a>
	        </li>

	      </ul>
	      
	    </div>
	  </div>
	</nav>  
	  
	<div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	    <li data-target="#demo" data-slide-to="3"></li>
	    <li data-target="#demo" data-slide-to="4"></li>
	    
	  </ul>

	  <!-- The slideshow -->
	<div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/nicholas.jpg" alt="Nicholas">
	      <div class="carousel-caption">
	      	<h3> Help us..</h3>
	      	<P> We are in danger..</P>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <img src="images/lion.jpg" alt="White tiger">
	       <div class="carousel-caption">
	      	<h3> Donate to me ..</h3>
	      	<P> We are going to extinct, why can't you help us?</P>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <img src="images/tiger1.jpg" alt="tiger">
	       <div class="carousel-caption">
	      	<h3> want to see me..?</h3>
	      	<P> If so, Save Me..</P>
	      </div>
	    </div>
	    
	    <div class="carousel-item">
	      <img src="images/bat-night.jpg" alt="fox">
	       <div class="carousel-caption">
	      	<h3> Where is my home..?</h3>
	      	<P> Help me find my home and my friends...</P>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <img src="images/laura.jpg" alt="laura">
	      <div class="carousel-caption">
	      	<h3> I lost my home..</h3>
	      	<P> Can I get shelter.?</P>
	      </div>
	    </div>
	    
	</div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>

	</div>
	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center"> About Us </h2>
		</div>
	    <div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<img src="images/monkey1.jpg" class="img-fluid aboutimg">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h2 class="display-4"> Welcome to the world of WILD LIFE...</h2>
					<P class="py-4"> We as humans care less or sometimes even nothing about our co-living beings animals. But it is very important that every being is present in the ecosystem which makes balancing life-style. There are many animals and creatures that have lost thier habitat and extincting and some are in endangered list. Although the Government and some of the private Organisations are taking steps to save them, they are not sufficiently enough to dave wild life. its our responsibility to save them.. We took the initiative as part of our responsdibiltity to bring up all the necessary information about the endangered speices and donation sites...</P>
					<a href="about.php" class="btn btn-success"> know more..</a>
				</div>
			</div>
		</div>
	</section>
	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center"> GALLERY </h2>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
	  					<img class="card-img-top" src="images/eagle.jpg" alt="Card image">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
	  					<img class="card-img-top aboutimg2" src="images/lion.jpg" alt="Card image">
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
	  					<img class="card-img-top" src="images/giant panda.jpg" alt="Card image">
					</div>
				</div>
			</div>
		</div>
	</section>
    		<section>
		<div class="py-5">
			<h2 class="text-center"> Contact Us </h2>
		</div>

		<div class="w-50 m-auto">
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
					
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
					
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control">
					
				</div>
				<div class="form-group">
					<label>Comments</label>
					<textarea class="form-control" name="comments">
					</textarea>
				</div>
				<button type="submit" class="btn btn-outline-success"> Submit </button>
			</form>
		</div>
		</section>

	
    <footer class="pt-3">
			<p class="p-3 bg-dark text-white text-center">@FriendsOfWildLife</p>
		</footer>
        
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
	</html>