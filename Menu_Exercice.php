
<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Menu_Exercice</title>
    <style>
        .btnlessons {
            color: dodgerblue;
        }

        .btnexercises {
            color: dodgerblue;
        }

        .btnexam {
            color: dodgerblue;
        }

        buttonn {
            border: dodgerblue;
            background-color: inherit;
            padding: 50px 28px;
            font-size: 24px;
            cursor: pointer;
            display: inline-block;
        }

        buttonn:hover {
                background: #eee;
        }
        h1.exemain{
            font-family :"Lucida Console", Monaco, monospace;
            color:dodgerblue;
        }
        h3.exe {
            font-family: 'Courier New';
            color: dodgerblue;
        }

        
    </style>
</head>
<body>
    <center>
        Welcome <?php echo htmlentities(trim($_SESSION['username'])); ?> !<br />
    </center>
    <?php
                if (empty($_SESSION['username']))
                {
            echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
            echo("<button style=\"margin-left: 540px; width: 190px;
    height: 50px;\" onclick=\"location.href='Sign-in.html'\">Login</button>");
            exit();
            }
            
            
            ?>  
    <center>
        <h1 class="exemain">Exercises</h1>
    </center>

 
    <div>
        <center>
            <img src="image/imageLogin.png" class="btn btn-primary" id="btn-y" style="        height: 140px;
        width: 300px;
        padding: 0px
">
        </center>
    </div>

    <center>
        <h3 class="exe"> Click on one of the pictures to access the exercise </h3>
    </center>

    <img src="image/ex1.jpeg" onclick="window.location.href = 'Exercice_1_0.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 0px 0px 0px 50px">

    <img src="image/ex2.jpeg" onclick="window.location.href = 'Exercice_1_1.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 0px 0px 0px 50px">

    <img src="image/ex3.jpeg" onclick="window.location.href = 'Exercice_2_0.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 0px 0px 0px 50px">

    <img src="image/ex4.jpeg" onclick="window.location.href = 'Exercice_2_1.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 0px 0px 0px 50px">

    <img src="image/ex5.jpeg" onclick="window.location.href = 'Exercice_2_2.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 0px 0px 0px 50px">

    <img src="image/ex6.jpeg" onclick="window.location.href = 'Exercice_2_3.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 0px 0px 0px 50px">

    <img src="image/ex7.jpeg" onclick="window.location.href = 'Exercice_2_4.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 30px 0px 0px 50px">

    <img src="image/ex8.jpeg" onclick="window.location.href = 'Exercice_2_5.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 30px 0px 0px 50px">

    <img src="image/ex9.jpeg" onclick="window.location.href = 'Exercice_3_0.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 30px 0px 0px 50px">

    <img src="image/ex10.jpeg" onclick="window.location.href = 'Exercice_3_1.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 30px 0px 0px 50px">

    <img src="image/ex11.jpeg" onclick="window.location.href = 'Exercice_3_2.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 30px 0px 0px 50px">

    <img src="image/ex12.jpeg" onclick="window.location.href = 'Exercice-1.php';" class="btn btn-primary" id="btn-y" style="        height: 200px;
        width: 150px;
        padding: 0px;
        margin: 30px 0px 0px 50px">




</body>
</html>

