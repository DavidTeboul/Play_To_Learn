<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    
    <style>
    
    
        body {font-family: Arial, Helvetica, sans-serif;}
        
              mark {
                background-color: white;
                color: grey;
  
                }
        

/* Full-width input fields */
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .review {
            width: 100%;
            height: 112px;
            padding: 12px 20px 80px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        /* Set a style for all buttons */
        button {
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
       
        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 300px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 600px;
            height: 500px /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
        /* end of review buttun style*/

        /*statr of AddChild and YourChild buttons style*/
        .btn {
            border: none;
            background-color: white;
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
        .btnExplain{
            color: dodgerblue
        }
        .share-btn {
            display: inline-block;
            color: #ffffff;
            border: none;
            padding: 0.1em 0.6em;
            outline: none;
            text-align: center;
            font-size: 0.9em;
            margin: 0 0.2em;
        }

        .share-btn:focus,
        .share-btn:hover {
        text-decoration: none;
        opacity: 0.8;
        }

        .share-btn:active {
        color: #e2e2e2;
        }


        .share-btn.email {
            background: #444444;
            
            
        }
    

        .whatsapp{
        display: none;
        color: #1DC143;
        }

        .whatsapp:hover, .whatsapp:focus{
        background: #1DC143;
        color: #fff;
        text-shadow: 0 0 1px rgba(0,0,0,0.2);
        }

        .whatsapp.activeWhatsapp{
        display: inline-block;
        }    
            
        
    </style>
  
</head> 
<body>
    <style type="text/css">
      body {
        
      background-image:url(image/userparent.jpg);
      background-color:0;
       background-position-X:300px;
        background-size:55em;
       
      }
      </style>
    
    <div>
        
         <style type="text/css">
      body {
        
      background-image:url(image/userparent.png);
      background-color:0;
       background-position-X:300px;
        background-size:55em;
       
      }
      </style>
        
        <center>
            <img src="image/imageLogin.png" class="btn btn-primary" id="btn-y" style="width:250px; border-radius: 50%;   display: block;
        margin-left: auto;
        margin-right: auto;">
        </center>
    </div>
    <?php
            session_start();
            session_start();
            $_SESSION['username'];
            $_SESSION['email'];
                if (empty($_SESSION['username']) or $_SESSION['base']!='Parent')
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
    
  
   
    
    <a alt="Whatsapp" href="whatsapp://send" data-text="a fantastic learning website for your childs" data-href="http://playtolearn.website/" class="whatsapp wa_btn"><span class="ion-social-whatsapp">Whatsapp</span> </a>
    
    
    <div>
        <img onclick="window.location.href = 'disconnect.php';" src="image/deconnexion.jpg" class="btn btn-primary" id="btn-y" style=" height: 85px;width:85px;padding:0px;
        margin:-200px 0px 0px 1050px" >
    </div>
    <center>
        <buttonn onclick="window.location.href = 'Sign-up.html';" class="btnAddChild"><mark>Add Child </mark></buttonn>
        <buttonn onclick="window.location.href = 'yourchild.php';" class="btnYourChild"><mark>Your Child</mark> </buttonn>
        <buttonn onclick="window.location.href = 'youraccountParents.php';" class="btnyouraccountParents"><mark>Your Account</mark></buttonn>
        <buttonn onclick="window.location.href = 'LessonExplanation.php';" class="btnExplain" ><mark>explanations lessons page</mark></buttonn>
        <buttonn onclick="window.location.href = 'Notification.php';" class="btnAddChild"><mark> Notification </mark></buttonn>
        
    </center>
    <button onclick="document.getElementById('id01').style.display='block'" style="margin-top:10px;">LEAVE US A REVIEW</button>
    
      <button> <a href="mailto:?subject= sharing you a fantastic website &body=http://playtolearn.website/
       i would like to sharing you a fantastic website for your childrens" text-align: center;">Email</a></button>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="review.php" method="post">

            <div class="container">
                <h1 style="text-align: center;"> Leave us a review</h1>
                <div class="champ">
                    <label for="note"><b>Note</b></label>
                    <select id="note" name="note">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Review</b></label>

                <textarea class="review" placeholder="Enter your review here..." name="review"></textarea>
                <button type="submit">Send</button>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
<?php include('testreview.html')?>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
        waShBtn = function () {
            if (this.isIos === true) {
                var b = [].slice.call(document.querySelectorAll(".wa_btn"));
                for (var i = 0; i < b.length; i++) {
                    var t = b[i].getAttribute("data-text");
                    var u = b[i].getAttribute("data-href");
                    var o = b[i].getAttribute("href");
                    var at = "?text=" + encodeURIComponent(t);
                    if (t) {
                        at += "%20%0A";
                    }
                    if (u) {
                        at += encodeURIComponent(u);
                    } else {
                        at += encodeURIComponent(document.URL);
                    }
                    b[i].setAttribute("href", o + at);
                    b[i].setAttribute("target", "_top");
                    b[i].setAttribute("target", "_top");
                    b[i].className += ' activeWhatsapp';
                }
            }
        }

        waShBtn.prototype.isIos = ((navigator.userAgent.match(/Android|iPhone/i) && !navigator.userAgent.match(/iPod|iPad/i)) ? true : false);

        var theWaShBtn = new waShBtn();
        
        
    </script>
    <div>

    <img src="image/loupe.png" type="button" value="ZOOM+"  style="width:50px" onClick="document.body.style.zoom=1.5">
    </div>
</body> 
</html>
