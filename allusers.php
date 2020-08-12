
<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>User Page</title>
    
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /*statr of AddChild and YourChild buttons style*/
        .btn {
            border: none;
            background-color: inherit;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
        }

        .btn:hover {
            background: #eee;
        }

        .btnAddChild {
            color: dodgerblue;
        }

        .btnYourChild {
            color: dodgerblue;
        }
        .btnyouraccountParents{
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
        buttonn:hover{
            background: #eee;
        }
        .btnAddChild{
            color: dodgerblue;
        }
        .btnYourChild{
            color: dodgerblue;}
    </style>
</head> 
<body>
    <div>
        <center>
            <img src="image/imageLogin.png" class="btn btn-primary" id="btn-y" style="width:250px; border-radius: 50%;   display: block;
        margin-left: auto;
        margin-right: auto;">
        </center>
    </div>
    <?php if (empty($_SESSION['username']) or $_SESSION['base']!="Admin")
                {
            echo '<center><font color="red" size="4"><b>You need to be connected </center></font><br />';
            echo("<button style=\"margin-left: 540px; width: 190px;
    height: 50px;\" onclick=\"location.href='Sign-in.html'\">Login</button>");
            exit();
            }
            ?>
    <center>
        Welcome <?php echo htmlentities(trim($_SESSION['username'])); ?> !<br />
    </center>
    <center>
        <buttonn onclick="window.location.href = 'tableparent.php';" class="btnYourChild">Parent Users</buttonn>
        <buttonn onclick="window.location.href = 'tablechild.php';" class="btnYourChild">Child Users</buttonn>
        <buttonn onclick="window.location.href = 'yourAdmin.php';" class="btnYourChild">Return</buttonn>
    </center>


</body> 
</html>