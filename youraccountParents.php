<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>     
    	<title> Your account </title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="css/Sign-in.css">
	</head>


	<body> 
    
      
	<div class='login-form'>
	    <form>
	        
	        <style type="text/css">
      body {
        
      background-image:url(image/userparent.png);
      background-color:0;
       background-position-X:300px;
        background-size:55em;
       
      }
      </style>
		   
			<div class="imgcontainer">
				<img src="image/imageLogin.png" alt="Avatar" class="avatar"> 
			</div>

			<div id="background1"></div>

			<div class="container">
				<form class="form-signin"> 
					<?php
                    if (empty($_SESSION['username']))
                    {
                    echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
                    echo("<button onclick=\"window.location.href = 'Sign-in.html';\"style=\" width: 190px;
    height: 50px;\" >Login</button>");
                    exit();
                    }
                    if($_SESSION['username'] !== ""){
                    echo '<a style="text-decoration:underline;" >Your Username: </a> <br>';
                    echo $_SESSION['username'].'<br>';
                       echo '<a style="text-decoration:underline;" >Your Email: </a> <br>';
                    echo $_SESSION['email'].'<br>';
                       echo '<a style="text-decoration:underline;" >Your last Connection: </a> <br>';
                    echo $_SESSION['last_connection'];
                }
            ?>  
				</form>
			</div>
			<button onclick="window.location.href = 'ParentPage.php';" class="button">Return</button>
		</form>
	</div>
	</body>
</html>