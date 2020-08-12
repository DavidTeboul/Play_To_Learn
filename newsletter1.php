<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>     
    	<title> Newsletter </title>
        <meta charset="utf-8">
	</head>
<body>
<div id="id01" class="modal">
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
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 8px;
  font-size:18px;
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
  padding: 16px;
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

/* Modal Content/Box */
.modal-content1 {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 600px; 
  height: 500px/* Could be more or less, depending on screen size */
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
  
  <form  method="post" action="Newsletter.php">

    <div class="container">
      <h1 style="text-align: center;"> Newsletter</h1>
      <div class="champ">
        <label for="choice"><b>Who ? </b></label>
        <select id="choice" name="choice">
            <option value="Child">Child</option>
            <option value="Parent">Parent</option>
            <option value="Both">Child and Parents</option>
        </select>
    </div> 
      <label for="uname"><b>Subject</b></label>
      <input type="text" placeholder="Enter subject" name="subject" required>
        
      <label for="psw"><b>First Text</b></label>
      
      <textarea class="review" placeholder="Write the first text..."  name="firsttexte"></textarea>
      <label for="psw"><b>Text</b></label>
      
      <textarea class="review" placeholder="Write the principal text..."  name="texte"></textarea>
      
      <button type="submit">Send</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="window.location.href = 'yourAdmin.php';" type="button" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

</body>
</html>

