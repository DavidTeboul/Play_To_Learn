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
 <link rel="stylesheet" href="css/Exercice-1.css">
</head>
<body>

    <style type="text/css">
        body {
        background-image:url(image/QCM-SPiderman.jpg);
        background-position-x:300px;
        background-size:55em;
        background-repeat:no-repeat;
        }
        </style>
<p>
<b><FONT face="cursive">GOOD LUCK! </FONT></b>
</p>
<form >

<font size="+1"><FONT face="cursive"><FONT color=#CF0A1D>
<b><i> Fat____: </i></b><br>
<input type="checkbox" /> her <br>
<input type="checkbox" /> er <br>
<input type="checkbox" />ser <br>
<i> <b> Sna____:</b> </i> <br>
<input type="checkbox" />q <br>
<input type="checkbox" /> ke <br>
<input type="checkbox"/>qi <br>
<i><b>Fa____: </b> </i> <br>
<input type="checkbox" />rm <br>
<input type="checkbox"/>rine<br>
<input type="checkbox" />reme<br>
<i> <b>Bi____: </b> </i><br>
<input type="checkbox" />te <br>
<input type="checkbox" />rd <br>
<input type="checkbox" />ard<br>
<i> <b>De__d: </b> </i><br>
<input type="checkbox" />man<br>
<input type="checkbox" />men <br>
<input type="checkbox" />mou<br>
<i> <b>Eg____: </b> </i><br>
<input type="checkbox" />gs <br>
<input type="checkbox" />x<br>
<input type="checkbox" />gse<br>
<i> <b>Bl____: </b> </i><br>
<input type="checkbox" />out <br>
<input type="checkbox" />ou<br>
<input type="checkbox" />ood<br>
<i> <b>L__D__: </b> </i><br>
<input type="checkbox" />ea,er <br>
<input type="checkbox" />i,er<br>
<input type="checkbox" />I,air<br>
<i> <b>I____man: </b> </i><br>
<input type="checkbox" /> cron<br>
<input type="checkbox" />ron<br>
<input type="checkbox" />tro<br>
<i> <b>Shi__: </b> </i><br>
<input type="checkbox" />ps <br>
<input type="checkbox" />ts<br>
<input type="checkbox" />ks<br>

</font></FONT>


<input type=button value="Vérifier" onclick="qcm(0,'100010100010100100001100010100')"/>
<input type="text" name="t" size="20" ></input>
<input type="reset" value="Annuler" />
<input type="button" onclick="solution(0,'100010100010100100001100010100')" value="Solution" />
<a href="Test_Lesson_3.php" class="button"> Test ?</a></input>
<a href="Menu_Exercice.php" class="button1">Menu</a>

</form>
</body>
</html>
