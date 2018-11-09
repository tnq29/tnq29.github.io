
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang đăng nhập</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-sm navbar-dark justify-content-center bg-light fixed-top">
			<a class="navbar-brand" href="#">
				<img src="src/logo.png" style="width: 71px; height:30px; ">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            	<span class="navbar-toggler-icon bg-info"></span>
         	</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
		  			<li class="nav-item">
		  				<a href="#" class="nav-link text-dark" >MÓN CHÍNH </a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="#" class="nav-link text-dark ">MÓN ĂN VẶT </a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="#" class="nav-link text-dark ">ĐỒ UỐNG</a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="#" class="nav-link text-dark">MÓN CHAY<span style="height: 13px; " class="badge badge-light text-warning"><b>NEW</b></span></a>
		  			</li>
		  		</ul>
	  		</div>
			<form class="form-inline nav-item" >
	   		    <input class="nav-link form-control form-control-sm mr-sm-2" style="width: 200px; height: 28px;" type="text" placeholder="">
	    		<button class="nav-link-sm btn btn-secondary btn-sm" type="submit">SEARCH</button>
	  		</form>
		</nav>
	</div>
	<div style="margin-top: 100px; width: 400px;" class="container container-fluid">
		<p class="display-4 text-info">LOGIN</p>
		<hr width="75%" align="left">
		<br><br>
		<form action="handle_login.php" method="POST">
			<div class="form-group">
				<label for="email">Email address: </label>
				<input type="email" id="email" name="input1" class="form-control">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" id="pwd" name="input2" class="form-control">
			</div>
			<div class="form-group form-check">
   				<label class="form-check-label">
      			<input class="form-check-input" type="checkbox"> Remember me
    			</label>
  			</div>
  			<button style="margin-left: 250px;" type="submit" id="btn_login" class="btn btn-info">Submit</button>
  			<br><br><hr width="75%" align="left">
		</form>
	</div>
	<br><br>
	
	<?php 
		$link = new mysqli ('localhost','root','','foodn');
		if(!$link){
			die('Connection failed: '.$link->error());
		}

		$link -> set_charset('utf8');
		$sql = "SELECT * FROM login ORDER BY email";
		$result = $link -> query($sql);	

		while ($row = $result->fetch_assoc()) {
			echo $row['email'].'<br>'.$row['pwd'];
		}

		$result->close();
		$link->close();

	?>

</body>
</html>