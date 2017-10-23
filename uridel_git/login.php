<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'connect.php';
        session_start();
        
            $login = $_POST["login"];
            $pass = $_POST["pass"];
 
            $query = mysql_query("SELECT * FROM pracownicy WHERE login = '$login' ");
            
           while ($row = mysql_fetch_array($query)) 
            {
                if($row[4] == '')
                {
                    $_SESSION["pracownik_id"] = $row[0];
                    $_SESSION["pass"] = $row[4];
                    header( "refresh:0;url=chg_pass.php"); 
                } else
               if($row[3] == $login && $row[5] == 'd' && $row[4] == $pass )
                {
                        header( "refresh:0;url=admin.php?id_pracownik=$row[0]&wydzial=$row[2]");
                }  else if($row[3] == $login && $row[5] == 'p' && $row[4] == $pass) 
                    {
                       $_SESSION["pracownik_id"] = $row[0];
                       header( "refresh:0;url=user.php"); 
                    }  elseif($row[3] == $login && $row[5] == 's' && $row[4] == $pass) 
                        {
                       $_SESSION["pracownik_id"] = $row[0];
                       header( "refresh:0;url=user.php");  
                        }else if($row[3] == $login && $row[5] == 'k' && $row[4] == $pass) 
                            {
                                $_SESSION["pracownik_id"] = $row[0];
                                header( "refresh:0;url=user.php");  
                            }
                        else
                        {
                          echo "B��dne logowanie";   
                        }
             }
               
        ?>
    </body>
</html>
