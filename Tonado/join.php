<?php
session_start();
if (isset($_SESSION['user-logged-in'])) {
  header('location:tonado.php');
}
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="join.css">
<body style="overflow: hidden;">
 <header class="main-header">
    <a href="index.php" class="brand-logo">
      <div class="main-logo"></div>
    </a>
    <nav class="main-nav">
      <ul>
          <li><div class="discover"><a href="discover.php >">Discover</a></div></li>
          <div class="join">
              <li><a href="login-page.php">Log in</a></li>
          </div>
      </ul>
    </nav>
 </header>
 <div class="form-join">
		<form onsubmit="event.preventDefault(); jscheck()" method="POST" action="http://localhost/tonado/insert2.php" id="register">
      <div id="join">
        <div id="input-name"> 
     		  <label class="input-head">Full name</label><br/>
	        <input type="text" id="fullname" name="full_name" placeholder="Enter your full name" class="input" />
	 			</div>         	
        <div id="input-email">  
          <label class="input-head">Email</label><br/>
  	      <input type="text"name="email" id="email" placeholder="Enter your email address" class="input" />
    		</div> 
        <div id="input-password">
          <label class="input-head">Password</label><br/>           
	        <input type="password" id="password" placeholder="Enter your password" class="input" />
	      </div>
	      <div id="input-confirm-pass">
	        <label class="input-head">Confirm Password</label><br/>
	        <input type="password" id="confirm_password" name="password" placeholder="Confirm Password" class="input" />
	  		</div>
  		</div>
  		<br/>
  		<button type="submit" class="button button2">Join</button> 
    </form>
 </div>
 <script type="text/javascript">
    	

       function jscheck(){
       	pass=1;
       	fullname=document.getElementById('fullname').value;
    	email=document.getElementById('email').value;
    	password=document.getElementById('password').value;
    	confirm_password=document.getElementById('confirm_password').value;

       	if(fullname.trim()==''|| fullname.length<4){
       		alert('enter full name correctly');
       		pass=0;
       	}if(email==''){
       		alert('enter email');
       		pass=0;
       	} if(password.length<8){
       		alert('pssd too short');
       		pass=0;
       	}if(confirm_password!=password){
       		alert('password doesnt match ');
       		pass=0;
        } if(pass==1){
          document.getElementById('register').submit();
        } 
       };

 </script>
</body>
</html>