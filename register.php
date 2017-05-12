<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password']))
	{
		$uid = $_POST['id'];
		$name = $_POST['name'];
        $lname = $_POST['lastname'];
		$email = $_POST['email'];
		$mobileno = $_POST['mobile'];
		$addr = $_POST['address'];
		$username = $_POST['username'];		
 		$password = $_POST['passwd'];
		$status = $_POST['status'];
		
        $query = "INSERT INTO Event_Management.members (id, name, lastname, email, mobile, address, username, passwd, status ) VALUES ('$uid','$name','$lname', '$email', '$mobileno', '$addr', '$username', '$password', '$status')";
		//echo $query;
		//exit;
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
?>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="style.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>


<div class="container">
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"></span>
	  <input type="text" name="uname" class="form-control" placeholder="Username" required>
	</div>
		  <input type="int" name="id" value=""/>
		  <br>
		  <label for="inputLname" class="sr-only">Last Name</label>
		  <input type="text" name="lastname" value=""/>
		  <br>
		   <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		  <br>
		  <label for="inputMobile" class="sr-only">Mobile No.:</label>
		  <input typw="mobile" name="mobile" value=""/>
		  <br>
		  <label for="inputAddress" class="sr-only">Address</label>
		  <input type="textarea" name="address" value=""/>
		  <br>
		  <label for="inputName" class="sr-only">User Name:</label>
		  <input type="text" name="username" value=""/>
		  <br>
		 <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="passwd" id="inputPassword" class="form-control" placeholder="Password" required>
		  <br>
		  <label for="inputStatus" class="sr-only">Status</label>
		  <input type="text" name="status" value=""/>
		  <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
</html>


      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>