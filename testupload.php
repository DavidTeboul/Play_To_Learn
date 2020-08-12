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
  	                // Get image name
  	                $image = $_FILES['image']['name'];
  	                // Get text
  	                $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
        
  	                // image file directory
  	                $target = "image/".basename($image);
  	                
                    $name=$_SESSION['username'];
                	$sql = "UPDATE MyGuests SET image='$image' WHERE username='$name' ";
                	$_SESSION['image']=$image;
                	// execute query
                	mysqli_query($db, $sql);
                	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		            $msg = "Image uploaded successfully";
                	}else{
  		            $msg = "Failed to upload image";
  	                }
  	                if(!empty($_SESSION['image'])){
  	                header('Location:/yourChildaccount.php');
  	                exit();
  	                }
                 }
                 $result = mysqli_query($db, "SELECT * FROM MyGuests");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <form method="POST" action="testupload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
  		<button type="submit" name="upload">Submit</button>
  	</div>
  </form>
</div>
</body>
</html>