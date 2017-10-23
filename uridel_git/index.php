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
      <!--  <form id="log_form" action="login.php" method="POST">
            <div><img src="img/logo.png" /></div>
            <table>
                <tr><td>Login </td><td><input type="text" name="login" /></td></tr>
                <tr><td>Hasło </td><td><input type="password" name="pass" /></td></tr>
                <tr><td><input type="submit" value="Zaloguj" /></td></tr> 
            </table>
        </form> -->
        <form id="log_form" role="form" action="login.php" method="POST">
            <div><img src="img/logo.png" /></div>
            <div class="form-group">
                 <div class="col-xs-4">
                    <label for="exampleInputEmail1" >Login</label>
                    <input type="text" name="login" class="form-control" placeholder="login">

                    <label for="exampleInputPassword1">Hasło</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <button type="submit" class="btn btn-default">Zaloguj</button>
                </div>
            </div>
                
        </form>
    </body>
</html>
