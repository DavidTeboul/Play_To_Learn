<?php session_start(); ?>
<html>
<head>
<script type="text/javascript">

function qcm(num,sol)
{
var f=document.forms[num];
var choix=0;
choix=f.elements.length-4;
var bin=new Array();
for(var i=0;i<choix;i++)
{
if (f.elements[i].checked)
{bin[i]=1;}
else {bin[i]=0;}
}

var binaire="";
binaire=bin.join("");

var erreurs=0;
for(var k=0;k<choix;k++)
{
if(sol.charAt(k)!=bin[k])
{ erreurs++;
}
}

if(erreurs==0)
{
f.t.value="All Good !";
}
else
{

f.t.value=" You do "+erreurs+" error";
}
}
function solution(num,sol)
{
var fo=document.forms[num];
var choix=0;
choix=fo.elements.length-4;
for (var j=0;j<choix;j++)
{
if (sol.charAt(j)=="1")
{
fo.elements[j].checked=true;
}
else
{
fo.elements[j].checked=false;
} }
}
</script>
 <link rel="stylesheet" href="css/Exercice_1_1.css">

</head>
<body>
  <style type="text/css">
    body {
    background-image:url(image/super-heros-marvel-min.jpg);
 
    }
    </style>
    <audio id="First">
          <source src="audio/have-a-nice-weekend1578937442.mp3" type="audio/mp3">
      </audio>
      
     <audio id="Second">
        <source src="audio/where-can-i-find-the1578938156.mp3" type="audio/mp3">
      </audio>
    
      <audio id="Third">
        <source src="audio/i-love-your-shoes1578937483.mp3" type="audio/mp3">
      </audio>

      <audio id="Four">
        <source src="audio/iron-man-play-video-games1578937864.mp3" type="audio/mp3">
      </audio>

      <audio id="Five">
        <source src="audio/i-draw-something-for-my1578937994.mp3" type="audio/mp3">
      </audio>

      
      
      <table width="749" border="0" align="center" cellpadding="0" cellspacing="0">
           <tr>
           <td width="399" bgcolor="#FFFF80"></head>
           <marquee behavior="alternate" bgcolor="#98FB98" width="1100" height="78" align="absmiddle" >
           <p><span class="Style30"><span class="Style28"><font color="#5472AE"size="4,5" face="Georgia, Times New Roman, Times, serif" color="#B0C4DE"><b><i><u>GOOD LUCK </u></i></b></span>
           </marquee></font><body bgcolor="#98FB98" background="mm.JPEG">

           
         <div class="container">
           <button onclick="playAudio()" class="btn">Play Audio</button>
         </div>
         <script>
           var F = document.getElementById("First");
           function playAudio() { F.play(); }
         </script>
        
         <div class="container1">
           <button onclick="plaAudio()" class="btn1">Play Audio</button>
         </div>
         <script>
         var S = document.getElementById("Second");
           function plaAudio() { S.play(); }
         </script>

         <div class="container2">
            <button onclick="playdio()" class="btn2">Play Audio</button>
           </div>
         <script>
          var T = document.getElementById("Third");
           function playdio() { T.play(); }
         </script>

         <div class="container3">
          <button onclick="paydio()" class="btn3">Play Audio</button>
         </div>
         <script>
           var FR = document.getElementById("Four");
             function paydio() { FR.play(); }
         </script>

         <div class="container4">
           <button onclick="laydio()" class="btn4">Play Audio</button>
         </div>
         <script>
           var FV = document.getElementById("Five");
             function laydio() { FV.play(); }
         </script>
       
<p>
  <b> Good Luck ! </b>
</p>
<form >
<b><i>  </i></b><br>
<input type="checkbox" /> have a shine weekend. <br>
<input type="checkbox" /> Have a fine hand. <br>
<input type="checkbox" /> Have a nice weekend. <br>

<i> <b> </b> </i> <br>
<input type="checkbox" /> Where can I find the bathroom please ? <br>
<input type="checkbox" /> here can I find the basroom please ? <br>
<input type="checkbox"/> Where can i kind the bathroom scuse ?<br>

<b><i>  </i></b><br>
<input type="checkbox" /> I love your closes. <br>
<input type="checkbox" /> I love your shoes. <br>
<input type="checkbox" /> I loke your choices.<br>

<i><b>  </b> </i> <br>
<input type="checkbox" /> Iron man play video games . <br>
<input type="checkbox"/>  I ron my man to play video games .<br>
<input type="checkbox" /> Iron man stay on video games .<br>
<i> <b>  </b> </i><br>
<input type="checkbox" /> I follow something for my brother. <br>
<input type="checkbox" /> I craw some thing por my mother. <br>
<input type="checkbox" /> I draw something for my mother.<br>


<input type=button value="Vérifier" onclick="qcm(0,'001100010100001')"/>
<input type="text" name="t" size="20" ></input>
<input type="reset" value="Annuler" />
<input type="button" onclick="solution(0,'001100010100001')" value="Solution" />
<a href="Test_Lesson_1.php" class="button"> Test ?</a>
<a href="Menu_Exercice.php" class="button1">Menu</a>

</form>
</body>
</html>
