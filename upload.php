<?php session_start();
$dbServername = "localhost";
            $dbUsername = "u815710449_playtolearn";
            $dbPassword = "Sce2019";
            $dbName="u815710449_playtolearn";
            $db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
                or die('could not connect to database');
                
        	$dbServername = "localhost";
					if (isset($_POST['upload'])) {
  	                // Get image name
  	                $image = $_FILES['image']['name'];
  	                // Get text
  	                $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
        
  	                // image file directory
  	                $target = "images/".basename($image);

                	$sql = "INSERT INTO MyGuests (image) VALUES ('$image')";
                	// execute query
                	mysqli_query($db, $sql);
                	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		            $msg = "Image uploaded successfully";
                	}else{
  		            $msg = "Failed to upload image";
  	                }
                 }
                    $result = mysqli_query($db, "SELECT * FROM images")
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<div id='img_div'>";
      	                echo "<img src='images/".$row['image']."' >";
                    	echo "<p>".$row['image_text']."</p>";
                         echo "</div>";
                    }