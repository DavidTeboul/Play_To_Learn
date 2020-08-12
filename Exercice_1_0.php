<?php session_start(); ?>
<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8" />
    <title>Partie 2 - Exercice - Question1</title>
    <link rel="stylesheet" href="css/Exercice-1.css">
    <style type="text/css">
      body {
      background-image:url(image/super-heros-marvel-min.jpg);
      background-position: center;
     
      }
      </style>
  </head>
   
  <body>
    <audio id="consigne">
        <source src="audio/in-this-question111.mp3" type="audio/mp3">
      </audio>

    <div id="dropper2">"EXERCICE 1"</div>
    <div id="dropper1">"In this question you need to check witch sentence you hear. You juste need to click on the exact boxe. To listen to the sentence please click on the button at the bottom right of the sentence. For each correct answer you will receive gift"</div>
    <a href="Exercice_1_1.php" class="button1">Next</a>
    <a href="Menu_Exercice.php" class="button1">Menu</a>
    
  </body>


</html>
<div class="container1">
    <button onclick="playAudio()" class="btn1">Play Audio</button>
</div>
<script>
    var x = document.getElementById("consigne"); 
    function playAudio() { x.play(); } 
 </script>
  </body>
</html>
    