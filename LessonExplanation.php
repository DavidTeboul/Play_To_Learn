<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title> Explanations lessons page </title>
     
    <style>
    .button {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         margin-top: 150px;
         margin-left:0px;
         border-radius: 15px;
         }
        .btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}
        .info {color: dodgerblue;}

/* On mouse-over */
.btn:hover {background: #eee;}
        
        buttton {
            background-color: #00BFFF;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 8px;
            font-size: 18px;
        }
       
        buttton:hover {
            opacity: 0.8;
        }

    </style>
</head>

<body style="background-color: #bbffff">



    
    
     <center>
        <h1>Lessons Explanations Page</h1>
    </center>

    <center>
        <article>
            welcome to your "play to learn" page, you can see all explanations lessons of your children here
            just click on one of this buttons to see it.
        </article>
    </center>

    <center>
        <object data="lesson1Explain.pdf" type="application/pdf" width="100%" height="100%">
            <p><a href="PDF/lesson1Explain.pdf">lesson1 explain</a></p>
        </object>

        <object data="lesson1Explain.pdf" type="application/pdf" width="100%" height="100%">
            <p><a href="PDF/lesson2Explain.pdf">lesson2 explain</a></p>
        </object>

        <object data="lesson1Explain.pdf" type="application/pdf" width="100%" height="100%">
            <p><a href="PDF/lesson3Explain.pdf">lesson3 explain</a></p>
        </object>

    </center>

    <a href="ParentPage.php" class="button">- Explanations lessons page -</a></input>
    <a href="ParentPage.php" class="button"style="float:right"> - Menu - </a></input>



</body>
</html>