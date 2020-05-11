<?php
include('connection/config.php'); 
?>
<html>
<head>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


</head>

<div class="container">
<br> <br>



<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">

	<h4 style="text-align: center;">Register</h4>
</header>
<article class="card-body">
	<form action="register.php" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label >First name </label>   
		  	<input type="text" name="first_name" id="first_name"class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label >Last name</label>
		  	<input type="text" name="last_name" id="last_name"class="form-control" placeholder=" ">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" name="email" id= "email" class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	<div class="form-group">
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" id="gender" value="option1">
		  <span class="form-check-label"> Male </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" id="gender" value="option2">
		  <span class="form-check-label"> Female</span>
		</label>
	</div> <!-- form-group end.// -->
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label >City</label>
		  <input type="text" name="city" id="city" class="form-control">
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label >Country</label>
		  <select id="inputState"  name="country" id="country" class="form-control">
		    <option> Choose...</option>
		      <option>Uzbekistan</option>
		      <option>Russia</option>
		      <option >United States</option>
		      <option selected="">India</option>
		      <option>Afganistan</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-group">
		<label >Create password</label>
	    <input class="form-control" name="password" id="password" type="password">
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" name="register" id="register" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Register' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

</html>

<script>
$(document).ready(function(){
	$(#register).onclick(function(){
		var first_name=$("#first_name").val();
		var last_name=$("#last_name").val();
		var email=$("#email").val();
		var gender=$("#gender").val();
		var city=$("#city").val();
		var country=$("#country").val();
		var password=$("#password").val();
		if (first_name==""){
			alert("Please enter your first name!");
			return false;
		}
		if (last_name==""){
			alert("Please enter your last name!");
			return false;
		}
		if (email==""){
			alert("Please enter your email  address!");
			return false;
		}
		if (gender==""){
			alert("Please mention your gender!");
			return false;
		}
		if (city==""){
			alert("Please mention your city!");
			return false;
		}
		if (country==""){
			alert("Please mention your country!");
			return false;
		}
		if (password==""){
			alert("Please enter your password!");
			return false;
		}
	})
});
</script>
<?php
if(isset($_POST['register'])){
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
 
  $city=$_POST['city'];
  $country=$_POST['country'];
  $password=$_POST['password'];

  $sql=mysqli_query($conn,"select * from user_register where email='".$email."'");
  if(mysqli_num_rows($sql)>0){
	echo "<script> alert('User already exists! Login Now!') </script> ";
	  exit(0);

  }

  
  $query="insert into user_register(first_name,last_name,email,gender,city,country,password)
  values('".$first_name."','".$last_name."','".$email."','".$gender."','".$city."','".$country."', '" . md5($password) . "')";
  $run=mysqli_query($conn,$query);
  if($run){
	echo "<script> alert('Registered successfully!') </script>";
	
  }
  else{
    echo "<script> alert('Something went wrong , Please Try again!') </script> ";
  }
}

?>