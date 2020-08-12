<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
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
f.t.value=0;
}
else
{

f.t.value=erreurs ;
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
$(document).ready(function () { 
    createCookie("note", "erreurs", "10"); 
}); 
   
// Function to create the cookie 
function createCookie(name, value, days) { 
    var expires; 
      
    if (days) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expires = ""; 
    } 
      
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=/"; 
} 
</script>

<link rel="stylesheet" href="css/Exercice_1_1.css">
</head> 
<body>



<style type="text/css">
    body {
    background-image:url(image/QCM-SPiderman.jpg);
    background-position-x:300px;
    background-size:55em;
    background-repeat:no-repeat;
    }
    .button {
    box-shadow: 3px 3px 0px 0px;
    border: 5px #03f302 outset;
    color: white;
    border-radius: 5px;
    background-color: #03f302;
    padding: 20px 34px;
    text-align: center;
    text-decoration: none;
    /* display: block; */
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    /* width: 100px; */
    margin-top: -320px;
}
    </style>
<?php
            session_start();
            session_start();
            $_SESSION['username'];
            $_SESSION['email'];
                if (empty($_SESSION['username']) or $_SESSION['base']!='Child')
                {
            echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
            echo("<button style=\"margin-left: 540px; width: 190px;
    height: 50px;\" onclick=\"location.href='Sign-in.html'\">Login</button>");
            exit();
            }
            ?>  
<form method="get" name="form" action="Exam1.php">
<font size="+1"><FONT face="cursive"><FONT color=#CF0A1D>
<b><i> Delic____: </i></b><br>
<input type="checkbox" /> ou <br>
<input type="checkbox" /> ious <br>
<input type="checkbox" />sous <br>
<i> <b> Beau____ful:</b> </i> <br>
<input type="checkbox" />ti <br>
<input type="checkbox" /> thi <br>
<input type="checkbox"/>py <br>
<i><b>plea____: </b> </i> <br>
<input type="checkbox" />sures <br>
<input type="checkbox"/>sur<br>
<input type="checkbox" />ur<br>
<i> <b>Ch____: </b> </i><br>
<input type="checkbox" />eap <br>
<input type="checkbox" />yt <br>
<input type="checkbox" />eyt<br>
<i> <b>Diff__cul__: </b> </i><br>
<input type="checkbox" />i,ty <br>
<input type="checkbox" />e,te <br>
<input type="checkbox" />0,t<br>
</font></FONT>
<input name="t"  ></input>
<input class="button" type="submit" value="Submit" onclick="qcm(0,'010100010100100')"> 
</form>
</body>
</html>
