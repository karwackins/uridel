<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <link href="style.css" rel="stylesheet" type="text/css" media="screen" />

         <script type="text/javascript" src="js/jquery.js"></script>

        <title></title>
    </head>
    <body>
<?php
    require 'connect.php';
    session_start();
    
    $pass = $_POST['pass'];
    
    if($pass != '')
    {    
    $update = mysql_query("UPDATE pracownicy SET pass = '$pass' WHERE id = ".$_SESSION['pracownik_id'].""); 
    header("refresh:0;url=index.php");
    } else
    if(($_SESSION["pass"]) == '')
    {
       echo '
        <form id="log_form" role="form" action="chg_pass.php" method="POST">
            <div><img src="img/logo.png" /></div>
            <div class="form-group">
                 <div class="col-xs-4">        
                    <label for="exampleInputPassword1">Proszę ustawić hasło do konta</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <button type="submit" class="btn btn-default">Zapisz hasło</button>
                </div>
            </div>
                
        </form>';
    }
    ?>
    </body>
</html>
