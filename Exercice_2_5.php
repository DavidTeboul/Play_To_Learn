<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Partie 2 - Exercice - Question1</title>
    <link rel="stylesheet" href="css/Exercice-1.css">
  </head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
  <body>

    <body>
      <style type="text/css">
        body {
        background-image:url(image/thor.jpg);
        background-position: center;
        background-repeat:no-repeat;

        }
        </style>

    <audio id="myAudio">
      <source src="audio/spiderman-is-super-hero1578408431.mp3" type="audio/mp3">
    </audio>
    
    <div id="draggable"><font size="5">Hero</font></div>
    <div id="draggable1"><font size="5">Rero</font></div>
    <div id="draggable2" ><font size="5">Caro</font></div>
    <div id="draggable3" ><font size="5">Ero</font></div>
    <div id="dropper">"Spiderman Is super _________"</div>

    <a href="Menu_Exercice.php" class="button"> Menu </a>
    <a href="Test_Lesson_2.php" class="button2"> Test ?</a>

<script>
    var clickme = document.getElementById('draggable');
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'Good!';
    });
    var clickme = document.getElementById('draggable1');
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'NoGood!';
    });
    var clickme = document.getElementById('draggable2');
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'NoGood!';
    });

    var clickme = document.getElementById('draggable3');
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'NoGoond!';
    });
</script>  
    
  </body>
  
  
  
</html>
<div class="container">
    <button onclick="playAudio()" class="btn">Play Audio</button>
</div>
<script>
    var x = document.getElementById("myAudio"); 
    function playAudio() { x.play(); } 
 </script>
  </body>
</html>
    