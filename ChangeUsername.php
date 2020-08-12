<?php session_start() ?>
<?php
            $msg="";
            $dbServername = "localhost";
            $dbUsername = "u815710449_playtolearn";
            $dbPassword = "Sce2019";
            $dbName="u815710449_playtolearn";
                  $db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
                or die('could not connect to database');
                if (isset($_POST['upload'])) {
  	                $username = mysqli_real_escape_string($db, $_POST['username']);
  	                // image file directory
  	                $target = "image/".basename($username);
                    $email=$_SESSION['email'];
                    echo $username;
                	$sql = "UPDATE MyGuests SET username='$username' WHERE email='$email' ";
                	$_SESSION['username']=$username;
                	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		            $msg = "Image uploaded successfully";
                	}else{
  		            $msg = "Failed to upload image";
  	                }
  	               if(mysqli_query($db, $sql)){
  	               header('Location:/yourChildaccount.php');
  	               exit();
  	               }
                 $result = mysqli_query($db, "SELECT * FROM MyGuests");
                }
?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.review {
  width: 100%;
  height: 112px;
  padding: 12px 20px 80px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: #00BFFF;
  color: white;
  padding: 5px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  font-size:10px;
}
buttont {
   background-color: #00BFFF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 8px;
    font-size: 18px;
}
button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.container {
}

span.psw {
  float: right;
  padding-top: 300px;
}

/* The Modal (background) */
.modall {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}


/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  <form  action="NewUsername.php" method="post" style="
    width: 300px;
    height: 200px;
    border-left-width: auto;
    padding: center;
    margin: auto;">

    <div class="container" style="background-color:#f1f1f1">
      <h2 style="text-align: center;"> Change your Username</h2>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter your new Username" name="username" required>
      <button type="submit" name="upload" >Submit</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="window.location.href = 'yourChildaccount.php'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

</html>