<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Learn to read fruit</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/lesson3.css">
        
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
  </body>
        <h1>The fruits </h1>
        <h2 style="margin-bottom:30px">Click on the drawings, listen and repeat the names of the fruits you have heard.</h2>
        <div class="text_before"></div>
        <p><audio id="player1"><source src="audio/the-fruit.mp3" type="audio/mpeg"> </audio>
        <div><button onclick="document.getElementById('player1').play()" style="width: 180px; height: 35px; border: none; margin-top: 0; padding: 6px 0 6px 0; border-radius: 8px; background: #00BFFF; font: bold 13px Arial; color: #fff;" class=" ui-btn ui-shadow ui-corner-all"> T h e &nbsp;&nbsp; f r u i t s </button></div>
        <p>&nbsp;</p>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player2"><source src="audio/pear.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player2').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/pear.gif" alt="" border="0"> </button></div>
        <br><strong>pear</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player3"><source src="audio/banana.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player3').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/banana.gif" alt="" border="0"> </button></div>
        <br><strong>banana</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player4"><source src="audio/apple.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player4').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/apple.gif" alt="" border="0"> </button></div>
        <br><strong>apple</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player5"><source src="audio/pineapple.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player5').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/pineapple.gif" alt="" border="0"> </button></div>
        <br><strong>pineapple</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player6"><source src="audio/lemon.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player6').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/lemon.gif" alt="" border="0"> </button></div>
        <br><strong>lemon</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player7"><source src="audio/peach.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player7').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/peach.gif" alt="" border="0"> </button></div>
        <br><strong>peach</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player8"><source src="audio/kiwi.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player8').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/kiwi.gif" alt="" border="0"> </button></div>
        <br><strong>kiwi</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player9"><source src="audio/strawberry.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player9').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/strawberrys.gif" alt="" border="0"> </button></div>
        <br><strong>strawberry</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player10"><source src="audio/raspberry.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player10').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/raspberry.gif" alt="" border="0"> </button></div>
        <br><strong>raspberry</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player11"><source src="audio/orange.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player11').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/orange.gif" alt="" border="0"> </button></div>
        <br><strong>orange</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player12"><source src="audio/cherrys.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player12').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/cherrys.gif" alt="" border="0"> </button></div>
        <br><strong>cherrys</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player13"><source src="audio/plums.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player13').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/plums.gif" alt="" border="0"> </button></div>
        <br><strong>plums</strong></div>
        <div style="float: left; text-align: center; width: 120px; height: 180px;"><audio id="player14"><source src="audio/grapes.mp3" type="audio/mpeg"></audio>
        <div><button onclick="document.getElementById('player14').play()" style="width: 90px; height: 90px; border: none; margin-top: 0; padding: 0px; margin-left: 15px;" class=" ui-btn ui-shadow ui-corner-all"> <img src="image/grapes.gif" alt="" border="0"> </button></div>
        <br><strong>grapes</strong></div>      
 
      </body>
       
    <buttton onclick="window.location.href = 'Menu-Lesson.php';"> -Menu-</buttton>
   
  
</html>