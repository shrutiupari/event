<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['uname']) && isset($_POST['passwd'])){
        $uid = $_POST['id'];
		$name = $_POST['name'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$mobileno = $_POST['mobile'];
		$address = $_POST['addr'];
		$username = $_POST['uname'];
		$password = $_POST['password'];
		$status = $_POST['status'];
 	echo $username;
        $query = "INSERT INTO event_mgmt.members (id, name, lastname, email, mobile, addr, uname, password, status ) VALUES ('$uid', '$name', '$lname', '$email', '$mobileno', '$address', '$username', '$password', '$status')";
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
		
		<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  </tr>
  <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"></span>
  <tr>
    <td width="95"><div align="right">Name:</div></td>
    <td width="171"><input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lastname" id="inputLname" class="form-control" placeholder="Last Name" required autofocus></td>
  </tr>
  <tr>
    <td><div align="right">Email:</div></td>
    <td><input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus></td>
  </tr>
  <tr>
    <td><div align="right">Mobile No.::</div></td>
    <td><input type="text" name="mobile" id="inputMobile" class="form-control" placeholder="Mobile" required autofocus></td>
  </tr>
  <tr>
    <td><div align="right">Address</div></td>
    <td><input type="text" name="addr" id="inputAddress" class="form-control" placeholder="Address" required autofocus></td>
  </tr>
  <tr>
    <td><div align="right">Username:</div></td>
    <td> <input type="text" name="uname" class="form-control" placeholder="Username" required></td>
  </tr>
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus></td>
  </tr>
 <tr>
    <td><div align="right">Status:</div></td>
    <td><input type="status" name="status" id="inputStatus" class="form-control" placeholder="Status" required></td>
  </tr>
 
</table

 ><button class="btn btn-lg btn-primary btn-block" type="submit">
<div align="center">Register</div>
</button>
<a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>

 </form>
</div>
</html>


      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>