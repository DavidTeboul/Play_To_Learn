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
<b><i> Amou____: </i></b><br>
<input type="checkbox" /> rt <br>
<input type="checkbox" /> nt <br>
<input type="checkbox" /> ct <br>
<i> <b> Cow-____:</b> </i> <br>
<input type="checkbox" /> boy <br>
<input type="checkbox" /> Coy <br>
<input type="checkbox"/> boo <br>
<i><b> Cap____: </b> </i> <br>
<input type="checkbox" /> tain <br>
<input type="checkbox"/> rain <br>
<input type="checkbox" /> tin <br>
<i> <b> Hu____: </b> </i><br>
<input type="checkbox" /> lk <br>
<input type="checkbox" /> ru <br>
<input type="checkbox" /> tu <br>
<i> <b> Buy__: </b> </i><br>
<input type="checkbox" /> t <br>
<input type="checkbox" /> ht <br>
<input type="checkbox" /> ght <br>
<i> <b> Arr____: </b> </i><br>
<input type="checkbox" /> an <br>
<input type="checkbox" /> ang <br>
<input type="checkbox" /> ent <br>
<i> <b> L____: </b> </i><br>
<input type="checkbox" /> aw <br>
<input type="checkbox" /> ou <br>
<input type="checkbox" /> iu <br>
<i> <b>__T__aL: </b> </i><br>
<input type="checkbox" /> Na,ion <br>
<input type="checkbox" />i,er<br>
<input type="checkbox" />I,air<br>
<i> <b>Ne__ss__ry: </b> </i><br>
<input type="checkbox" />  te,a <br>
<input type="checkbox" /> ce,a <br>
<input type="checkbox" /> re,u <br>
<i> <b>Shi__: </b> </i><br>
<input type="checkbox" /> ke <br>
<input type="checkbox" /> re <br>
<input type="checkbox" /> ne <br>
</font></FONT>


<input type=button value="Vérifier" onclick="qcm(0,'010100100100001010100100010001')"/>
<input type="text" name="t" size="20" ></input>
<input type="reset" value="Annuler" />
<input type="button" onclick="solution(0,'010100100100001010100100010001')" value="Solution" />
<a href="Menu-Lesson.php" class="button" style="margin-top:10px;"> Return To Lesson Menu </a></input>


</form>
</body>
</html>
