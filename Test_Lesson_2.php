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
        background-image:url(image/QCM-SPiderman.jpg);
        background-position-x:300px;
        background-size:55em;
        background-repeat:no-repeat;
        }
        </style>
<p>
<b> Good Luck ! </b>
</p>
<form >
 <font size="+1"><FONT face="cursive"><FONT color=#CF0A1D>
<b><i> WonderWoman is th______woman . </i></b><br>
<input type="checkbox" /> Longeur. <br>
<input type="checkbox" /> Stronger. <br>
<input type="checkbox" /> Peur. <br>

<i> <b> Bane always _____ to Batman . </b> </i> <br>
<input type="checkbox" /> Lie. <br>
<input type="checkbox" /> Cry. <br>
<input type="checkbox"/> Shame. <br>

<b><i> Do you _____ Movies ? </i></b><br>
<input type="checkbox" /> Like <br>
<input type="checkbox" /> Pike . <br>
<input type="checkbox" /> Tike .<br>

<i><b> Spiderman jumping ___ the ____ of London.  </b></i> <br>
<input type="checkbox" /> From,Tower. <br>
<input type="checkbox"/> Crom,Shawer. <br>
<input type="checkbox" /> Fron,toer. <br>

<i> <b> Where ____ I find a supermarket ? </b> </i><br>
<input type="checkbox" /> Pan. <br>
<input type="checkbox" /> Tan. <br>
<input type="checkbox" /> Can.<br>

</font></FONT>

<input type=button value="Vérifier" onclick="qcm(0,'010100100100001')"/>
<input type="text" name="t" size="20" ></input>
<input type="reset" value="Annuler" />
<input type="button" onclick="solution(0,'010100100100001')" value="Solution" />
<a href="Exercice_3_0.php" class="button">Next</a>

</form>
</body>
</html>
