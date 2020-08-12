<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>    
	  <?php if (empty($_SESSION['username']) or $_SESSION['base']!="Admin")
                {
            echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
            echo("<button style=\"margin-left: 540px; width: 190px;
    height: 50px;\" onclick=\"location.href='Sign-in.html'\">Login</button>");
            exit();
            }
            ?>  
        <script>
        
            function checkPassword(form) { 
                password = form.password.value;
                password2 = form.password2.value;
  
                // If password not entered 
                if (password == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
            }          
        </script>
    	<title> Add Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Sign-up.css">
	</head>

	<body> 
    <div class="imgcontainer">
		<img src="image/imageLogin.png" alt="Avatar" class="avatar" style="width:250px; border-radius: 50%;   display: block;
        margin-left: auto;
        margin-right: auto;">
	</div> 
    <div class='Sign-up-form'>
    <form method="post" action="formadmin.php">   
        <form onSubmit = "return checkPassword(this)"> 
		<form method="post" action="formadmin.php">
			<div class="container">
                <h1 style="text-align: center;"> New Admin</h1>
				<label for="username"><b>Username</b></label>
    			<input type="text" placeholder="Enter Username" name="username" required>

			
				<label for="pass"><b>Password</b></label>
  				<input type="password" placeholder="Enter 4 digits" name="password" required>
                <label for="password-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat 4 digits" name="password2" required>
            
            </div>
            
			 <div class="clearfix">
                 <button type="button" class="cancelbtn" onclick="window.location.href = 'yourAdmin.php';" >Cancel</button>
                 <button type="submit" class="signupbtn">Sign Up</button>
             </div>
        </form>
    </div>
    
	</body>
</html>