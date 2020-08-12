<?php session_start(); ?>
<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8" />
    <title>Partie 2 - Exercice - Question1</title>
    <link rel="stylesheet" href="css/Exercice-1.css">
    <style type="text/css">
      body {
      background-image:url(image/super_hero.jpg);
      background-color:0;
      }
      </style>
  </head>
   
  <body>
    <audio id="myAudio">
      <source src="audio/in-this1578421937.mp3" type="audio/mp3">
    </audio>

    <div id="dropper2">"Exercice 2"</div>
    <div id="dropper1">"In this question you need to complet sentence with the good word. You juste need to click on the exact word. To listen to the sentence please click on the button at the bottom right of the sentence. For each correct answer you will add a point to your score"</div>
    <a href="Exercice_2_1.php" class="button1">Next</a>
    <a href="Menu_Exercice.php" class="button1">Menu</a>
    
  </body>
  
  
  
</html>
<div class="container1">
    <button onclick="playAudio()" class="btn1">Play Audio</button>
</div>
<script>
    var x = document.getElementById("myAudio"); 
    function playAudio() { x.play(); } 
 </script>
  </body>
</html>
    