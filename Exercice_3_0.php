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
      <source src="audio/n-this-question-you-need1578943017.mp3" type="audio/mp3">
    </audio>

    <div id="dropper2">"Exercice 3"</div>
    <div id="dropper1">"In this question you need to choice the good syllable for complet the word.Just one choice for all question. For each correct answer you will add a point to your score"</div>
    <a href="Exercice_3_1.php" class="button1">Next</a>
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
    