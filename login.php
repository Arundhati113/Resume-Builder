<?php
session_start();
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
<br>  
<br><br>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	
	<h4 style="text-align: center;">Login</h4>
</header>
<article class="card-body">
  <form action="login.php" method="post">
	<div class="form-row">
	
		
	
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" name="email" id="email" class="form-control" placeholder="">
    <div class="form-group">
      <label>Password</label>
        <input class="form-control" name="password" id="password" type="password">
    </div> <!-- form-group end.// -->  
      <div class="form-group">
	</div> <!-- form-group end.// -->
	

		
	
        <button type="submit" name="signin" id="signin" class="btn btn-primary btn-block">Login  </button>
   
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Don't have an account? <a href="register.php">Register Now</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

</html>
<script>
$(document).ready(function(){
	$(#signin).click(function(){
	
		var email=$("#email").val();
    var password=$("#password").val();
	
		if (email==""){
			alert("Please enter your email  address!");
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
if(isset($_POST['signin'])){


  $email=$_POST['email'];
  $password=$_POST['password'];
  
  $sql="SELECT * FROM `user_register` WHERE  email='$email'   AND password='" . md5($password) . "'";
  $result=mysqli_query($conn,$sql);
 
  
  if(mysqli_num_rows($result)==1){
    echo "<script> alert('You  are logged in!') </script> ";
    $_SESSION['user_email']=$email;
    echo   $_SESSION['user_email']=$email;
   header("Location: index.php");
  }
  else{
    echo "<script> alert('incorrect username/password!!') </script> ";
  }
}

?>