<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Partie V - Chapitre 5 - Exemple 6</title>

    <style>
      div {margin: 50px auto;text-align: center; margin-right: 1000px;}
      #draggable { padding: 5px;width: 150px;background-color: #CCC;}
      #draggable1 {padding: 5px;width: 150px;background-color: #CCC;}
      #draggable2 {padding: 5px;width: 150px;background-color: #CCC;}
      #draggable3 {padding: 5px;width: 150px;background-color: #CCC;}
      #dropper {padding-top: 40px;width: 400px;height: 60px;border: 2px solid #222;background-color: #888;text-align: center;margin-right:300px;margin-top:-550px;}
      #dropper1 {padding-top: 40px;width: 400px;height: 60px;border: 2px solid #222;background-color: #888;text-align: center;margin-right:300px; auto;}
      #dropper2 {padding-top: 40px;width: 400px;height: 60px;border: 2px solid #222;background-color: #888;text-align: center;margin-right:300px;auto;}
      #dropper3 {padding-top: 40px;width: 400px;height: 60px;border: 2px solid #222;background-color: #888;text-align: center;margin-right:300px;auto;}

    </style>
    
    <style>
		 buttton {
            text-align: center;
            background-color: #00BFFF;
            color: white;
            padding: 14px 20px;
            margin-top:20px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 8px;
            font-size: 18px;
            float:right;
            }
       
        buttton:hover {
            opacity: 0.8;
            }</style>
  </head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
  <body>

    <div id="draggable" draggable="true"><font color="#42B00B"><font size="5"><mark>Hero</mark></FONT></font></div>
    <div id="draggable1" draggable="true"> <font color="#42B00B"><font size="5"><mark>Birthday</mark></FONT></font></div>
    <div id="draggable2" draggable="true"> <font color="#42B00B"><font size="5"><mark>Play</mark></FONT></font></div>
    <div id="draggable3" draggable="true"> <font color="#42B00B"><font size="5"><mark>Dog's</mark></FONT></font></div>
    <div id="draggable" draggable="true"><font color="#42B00B"><font size="5"><mark>Ero</mark></FONT></font></div>
    <div id="draggable1" draggable="true"> <font color="#42B00B"><font size="5"><mark>Birtday</mark></FONT></font></div>

    <div id="dropper">"Spiderman Is super _________"</div>
    <div id="dropper1">"How do you celebrate your _________?"</div>
    <div id="dropper2">"Kevin like _________ football"</div>
    <div id="dropper3">" _________ don't like cats "</div>


    
    <buttton onclick="window.location.href = 'Menu_Exercice.php';"> -Menu-</buttton>



    <script>
    document.querySelector('#dropper').addEventListener('dragover', function(e) {
        e.preventDefault(); // Annule l'interdiction de "drop"
    }, false);

    document.querySelector('#dropper').addEventListener('drop', function(e) {
        e.preventDefault(); // Cette méthode est toujours nécessaire pour éviter une éventuelle redirection inattendue
        alert('Good !');
    }, false);

    document.querySelector('#dropper1').addEventListener('dragover', function(e) {
        e.preventDefault(); // Annule l'interdiction de "drop"
    }, false);

    document.querySelector('#dropper1').addEventListener('drop', function(e) {
        e.preventDefault(); // Cette méthode est toujours nécessaire pour éviter une éventuelle redirection inattendue
        alert('Good !');
    }, false);

    document.querySelector('#dropper2').addEventListener('dragover', function(e) {
        e.preventDefault(); // Annule l'interdiction de "drop"
    }, false);

    document.querySelector('#dropper2').addEventListener('drop', function(e) {
        e.preventDefault(); // Cette méthode est toujours nécessaire pour éviter une éventuelle redirection inattendue
        alert('Good!');
    }, false);

    document.querySelector('#dropper3').addEventListener('dragover', function(e) {
        e.preventDefault(); // Annule l'interdiction de "drop"
    }, false);

    document.querySelector('#dropper3').addEventListener('drop', function(e) {
        e.preventDefault(); // Cette méthode est toujours nécessaire pour éviter une éventuelle redirection inattendue
        alert('Good !');
    }, false);
    
    
    

    </script>
    
    
    
  </body>
  
  
  
</html>
