<?php
session_start();
if (isset($_SESSION['user-logged-in'])) {
  header('location:tonado.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="join.css">
</head>
<body>
 <header class="main-header">
    <a href="index.php" class="brand-logo">
      <div class="main-logo"></div>
    </a>
    <nav class="main-nav">
      <ul>
          <li><div class="discover"><a href="discover.php">Discover</a></div></li>
          <div class="join">
              <li><a href="join.php">Join</a></li>
          </div>
      </ul>
    </nav>
 </header>
	 <div class="form-join">
		<form method="POST" action="http://localhost/tonado/login.php" id="login" onsubmit="event.preventDefault(); jscheck()">
      <div id="join">        	
        <div id="input-email">  
          <label class="input-head">Email</label><br/>
  	      <input type="text"name="email" id="email" placeholder="Enter your email address" class="input" />
    		</div> 
        <div id="input-password">
          <label class="input-head">Password</label><br/>           
	        <input type="password" name="password" id="password" placeholder="Enter your password" class="input" />
	      </div>

  		</div>
  		<br/>
  		<button type="submit" class="button button2">Log in</button> 
    </form>
 </div>
 <script type="text/javascript">
       function jscheck(){
       	pass=1;
    	email=document.getElementById('email').value;
    	password=document.getElementById('password').value;
        if(email==''){
       		alert('Enter email');
       		pass=0;
       	} if(password==''){
       		alert('Enter Password');
       		pass=0;
       	} if(pass==1){
          document.getElementById('login').submit();
        } 
       };

 </script>
</body>
</html>
