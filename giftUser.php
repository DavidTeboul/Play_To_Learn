
<?php session_start(); ?>
<?php 
$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
$requete = "SELECT * FROM MyGuests";
$exec_requete = mysqli_query($db,$requete);
$repons = mysqli_fetch_array($exec_requete);
$temp=0;
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    if($repons['email']==$username){
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $sql=mysql_query("select*from $username",$connection)
        if ($resultat == FALSE) { 
            echo "Echec de l'exécution de la requête.<br />"; 
        } 
        if($row1[note]==60){
        $to_email_adress = $repons['email'];
         $header="MIME-Version: 1.0\r\n";
        $header.='From:"PlayToLearn"<giftToUser@playtolearn.website>'."\n";
        $header.='Content-Type:text/html; charset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $subject = "Your gift";
        $message='
         <html>
         <head>
           <title>Your gift</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                     <div align="center">Hi <b>'.$repons['username'].'</b>,</div>
                     That's your gift for the success of your test <b>'..'</b>
                     See you soon on PlayToLearn <a href="#">playtolearn.website</a> !
                     
                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       This is an automatic mail. 
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
        mail($to_email_adress,$subject,$message, $header);
           $temp=1;
    if($temp==1){
                header("Refresh: 0; url=/Sign-in.html");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("We send you your Username and your new Password by email");
            } 
        exit();
    }
    }
}
$requete = "SELECT * FROM MyParents";
$exec_requete = mysqli_query($db,$requete);
$repons = mysqli_fetch_array($exec_requete);
while($repons = mysqli_fetch_array($exec_requete) and $temp=1){
    if($repons['email']==$username){
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $new_pass = rand();
        $new_pass_crypt=password_hash($new_pass,PASSWORD_DEFAULT);
        $sql = "UPDATE MyGuests SET password='$new_pass_crypt' WHERE email = '$username'";
        $resultat = mysqli_query($db,$sql);
        if ($resultat == FALSE) { 
            echo "Echec de l'exécution de la requête.<br />"; 
        } 
        $to = $repons['email'];
         $header="MIME-Version: 1.0\r\n";
        $header.='From:"PlayToLearn"<password@playtolearn.website>'."\n";
        $header.='Content-Type:text/html; charset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $subject = "Your new password";
        $message='
         <html>
         <head>
           <title>Your password</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                     <div align="center">Bonjour <b>'.$repons['username'].'</b>,</div>
                     This is your new password <b>'.$new_pass.'</b>
                     See you soon on PlayToLearn <a href="#">playtolearn.website</a> !
                     
                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       This is an automatic mail. 
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
        mail($to,$subject,$message, $header);
        $temp=1;
    if($temp==1){
                header("Refresh: 0; url=/Sign-in.html");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("We send you your Username and your new Password by email");
            } 
        exit();
    }
}
$temp=1;
    if($temp=1){
                header("Refresh: 0; url=/ForgotPassword.html");
                function function_alert($message) {   
                echo "<script>alert('$message');</script>"; 
                } 
            function_alert("❗️Your Email does not exist❗️ ");
            }
                
?>