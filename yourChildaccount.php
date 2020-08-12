<?php session_start();?>

<!DOCTYPE html>
<html>
    <style>
        .button {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         margin-top: 0px;
         margin-left:0px;
         border-radius: 15px;
         }
buttonn {
  background-color: #00BFFF;
  color: white;
  padding: 5px 10px;
  margin-top: 1000px;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  font-size:10px;
}
    </style>
	<head>     
    	<title> Your account </title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="css/Sign-in.css">
	</head>
	<body> 
	
	
	<style type="text/css">
      body {
      background-image:url(image/reglage-enfant.jpg);
      background-color:0;
      background-size:55em;
   
       }
       
      </style>
	<div class='login-form'>
	    <form>
	        <div class="imgcontainer">
				          <?php 
		if(!empty($_SESSION['image'])){    
		echo "<img src='image/".$_SESSION['image']."' style=\"
        width: 150px;
        border-radius: 50%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 150px;
        \">";}
        else echo "<img src=\"image/imageLogin.png\" alt=\"Avatar\" class=\"avatar\"> ";
        ?> 
			</div>
	
		    <div id="background1"></div>

			<div class="container" style="padding-top: 20px;">
				<form class="form-signin">    
				
					<?php
                    if (empty($_SESSION['username']) or $_SESSION['base']!="Child")
                    {
                        
                    echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
                    echo("<center onclick=\"window.location.href = 'Sign-in.html';\"class=\"button\">Login</center>");
                    exit();
                    }
                        if(empty($_SESSION['image']))
                            echo "<a class=\"button\" onclick=\"window.location.href = 'Newpicture.php';\" type=\"submit\" name=\"upload\">Choose Picture</a>";
                        else echo "<a class=\"button\" onclick=\"window.location.href = 'Newpicture.php';\" type=\"submit\" name=\"upload\">Change Picture</a>";
                        echo '<br>';
                        echo '<br>';
                    echo '<a style="text-decoration:underline;" >Your Username: </a> <br>';
                    echo $_SESSION['username']." ";
                  
                       echo '<a style="text-decoration:underline;" >Your Email: </a> <br>';
                    echo $_SESSION['email'].'<br>';
                       echo '<a style="text-decoration:underline;" >Your last Connection: </a> <br>';
                    echo $_SESSION['last_connection'];
                     echo " "."<button onclick=\"window.location.href = 'ChangeUsername.php';\">Change Username</button>".'<br>';
                    
            ?>  
				</form>
    
			</div>
			<img src="image/loupe.png" type="button" value="ZOOM+"  style="width:50px" onClick="document.body.style.zoom=1.5">
			<button onclick="window.location.href = 'youraccountChild.php';" class="button">Return</button>
		
	</div>