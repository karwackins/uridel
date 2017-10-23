<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />

        <script type="text/javascript" src="js/jquery.js"></script>

    <script>
            $(document).ready(function(){
                $("button#wn_urlop").click(function()
                {
                    $("#urlop_form").toggle("normal");
                });
                
                $("button#wn_del").click(function()
                {
                    $("#del_form").toggle("normal");
                });
            });
    </script>
    </head>
    <body>
        <?php
        require 'connect.php';
        session_start();
        //$id_pracownik = $_GET["id_pracownik"];
        
        $query= mysql_query ("SELECT imie_nazwisko, wydzial, stanowisko FROM pracownicy WHERE id = ".$_SESSION['pracownik_id']."");
        $id_tab=mysql_fetch_assoc($query);
        $wydzial=$id_tab['wydzial'];
        $_SESSION['pracownik']=$id_tab['imie_nazwisko'];
        $_SESSION['stanowisko']=$id_tab['stanowisko'];
        $akt_data = date("Y-m-d");

        
        require 'model/naglowek.php';
        //require 'model/menu.php';
        require 'model/szukaj_form.php';
        
        echo "<div id='del_form' class='ukryty'>";
            require 'del_form.php';
        echo "</div>";
        
        echo "<div id='urlop_form' class='ukryty'>";
            require 'urlop_form.php';
        echo "</div>";
        
        //dot. wniosków
        $query_url = mysql_query("SELECT w.data, p.imie_nazwisko, w.urlop_od, w.urlop_do, w.id, p.wydzial, zastepstwo, urlop_rodzaj, opieka_od, opieka_do, kategoria, tel  FROM wnioski w JOIN pracownicy p ON w.id_pracownik = p.id WHERE w.kategoria = 'Urlop'AND w.status = 'Oczekuje na akceptacje' AND p.wydzial = '$wydzial' ");
        $query_del = mysql_query("SELECT w.data, p.imie_nazwisko, w.data_del, w.cel, w.del_od, w.del_do, w.sr_lok, w.id, p.wydzial, zastepstwo  FROM wnioski w JOIN pracownicy p ON w.id_pracownik = p.id WHERE w.kategoria = 'Delegacja' AND w.status = 'Oczekuje na akceptacje' AND p.wydzial = '$wydzial' ");
        //dot. komunikatów
        $query_url_inf = mysql_query("SELECT w.data, p.imie_nazwisko, w.urlop_od, w.urlop_do, w.kategoria, w.del_od, w.del_do, p.wydzial, zastepstwo, urlop_rodzaj, opieka_od, opieka_do, tel  FROM wnioski w JOIN pracownicy p ON w.id_pracownik = p.id WHERE w.status = 'Zaakceptowano' AND p.wydzial = '$wydzial' "); 
       
        $ile_url = mysql_numrows($query_url);
        $ile_del = mysql_numrows($query_del);
        
        $query = mysql_query("SELECT data, kategoria, status, urlop_od, urlop_do, del_od, del_do, cel, sr_lok, id_pracownik, data_dec, id_decydujacego, data_del, urlop_rodzaj, opieka_od, opieka_do, id  FROM wnioski WHERE id_pracownik = ".$_SESSION['pracownik_id']." AND urlop_od >= '2017-01-01' OR id_pracownik = ".$_SESSION['pracownik_id']." AND opieka_od >= '2017-01-01' ORDER BY urlop_rodzaj, data DESC");
        $ile_wn = mysql_num_rows($query);
        
        /*************************************************************************WNIOSKI PRACOWNIKOW**************************************************************/
        if($ile_url != 0 && $_SESSION['stanowisko'] == 'k')
        {   
          echo'<div class="panel panel-primary">
               <div class="panel panel-heading">
                <h3 class="panel-title">Wnioski urlopowe:</h3>
              </div>';
         echo "<table>";
                echo "<tr><td><b>Data</b></td><td><b>Imie i nazwisko</b></td><td></td><td><b>od</b></td><td><b>do</b></td><td><b>Zastępstwo</b></td><td colspan='2' style='text-align: center;'><b>Akceptuj / Odrzuć</b></td></tr>";
                      while ($row = mysql_fetch_array($query_url))
                      {    
                          if($row[7] == 'Opieka nad dzieckiem')
                          {
                            echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td>'.$row[9].'</td><td>'.$row[6].'</td><td style="float:right;"><a href="decyzja.php?id='.$row[4].'&dec=T"><img src="img/accept.png"></a></td><td><a href="decyzja.php?id='.$row[4].'&dec=N"><img src="img/cancel.png"></a></td></tr>';
                      } else
                      {  
                          echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>';
                           if($row[11] == '1')
                                { 
                                    echo $row[10].' '.$row[7].' (na telefon)';
                                } 
                            else echo $row[10].' '. $row[7];
                                  
                          echo'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[6].'</td><td style="float:right;"><a href="decyzja.php?id='.$row[4].'&dec=T"><img src="img/accept.png"></a></td><td><a href="decyzja.php?id='.$row[4].'&dec=N"><img src="img/cancel.png"></a></td></tr>';
                      } 
                          
                      }             
                                   
        echo "</table>";  
       } 
        
        if($ile_del != 0)
        {    
          echo'<div class="panel panel-primary">
               <div class="panel panel-heading">
                <h3 class="panel-title">Wnioski o delegacje:</h3>
              </div>';
        echo "<table>";
                echo "<tr><td>Data</td><td>Imie i nazwisko</td><td>Data delegacji</td><td>Cel delegacji</td><td>Delegacja od</td><td>Delegacja do</td><td>Środek lokomocji</td><td colspan='2'>Akceptuj / Odrzuć</td></tr>";
                      while ($row = mysql_fetch_array($query_del))
                      {       
                          echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td style="float:right;" ><a href="decyzja.php?id='.$row[7].'&dec=T&id_zatwierdzajacego='.$id_pracownik.'"><img src="img/accept.png"></a></td><td><a href="decyzja.php?id='.$row[7].'&dec=N&id_zatwierdzajacego='.$id_pracownik.'"><img src="img/cancel.png"></a></td></tr>';
                      }
                      
                      
         echo "</table>";
        }
        echo "</div>";
        /***************************************************************************************************************************************************/
        
        
        
        
        echo "<div id='informacje'>";
        echo '<div class="panel panel-primary">';
        echo '<div class="panel panel-heading">
                <h3 class="panel-title">Informacje</h3>
             </div>';
            //require 'ile_dni.php';
        echo '</div>';
        echo "</div>";
        
        /*********************************************************************TWOJE WNIOSKI******************************************************************/
        echo "<div id='wnioski'>";
        if($ile_wn != 0)
        {
         echo'<div class="panel panel-primary">
              <div class="panel panel-heading">
                    <h3 class="panel-title">Twoje wnioski:</h3>
              </div>';
            echo "<table class='table table-striped'>";
            echo "<tr><td><b>Wniosek o</b></td><td><b>Z dnia</b></td><td><b>Od dnia</b></td><td><b>Do dnia</b></td><td><b>Decyzja</b></td></tr>";
            while ($row = mysql_fetch_array($query)) 
            {
               if($row[1] == 'Urlop' && $row[13] != 'Opieka nad dzieckiem')
               {    
                echo "<tr><td>".$row[1]." ".$row[13]."</td><td>".$row[0]."</td><td>".$row[3]."</td><td>".$row[4]."</td>";
                if($row[2] == 'Zaakceptowano')
                {
                    echo '<td><img src="img/accept.png"></td>';
                    echo "<td><a href='print.php?id=".$row[16]."'>Drukuj karte</a></td>";      
                 
                }  else if ($row[2] == 'Oczekuje na akceptacje')
                    {
                        echo '<td><img src="img/oczekuje.png"></td></tr>';
                    } else 
                    {
                        echo '<td><img src="img/cancel.png"></td></tr>';
                    }
               }    
              if ($row[1] == 'Delegacja')
              { 
                  echo "<tr><td>".$row[1]."</td><td>".$row[0]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td>";
                  if($row[2] == 'Zaakceptowano')
                    {
                       echo '<td><img src="img/accept.png"></td>';
                       
                    }
                    else if ($row[2] == 'Oczekuje na akceptacje')
                    {
                        echo '<td><img src="img/oczekuje.png"></td></tr>';
                    } else 
                    {
                        echo '<td><img src="img/cancel.png"></td></tr>';
                    }
               }
              if ($row[13] == 'Opieka nad dzieckiem')
              { 
                  echo "<tr><td>".$row[13]."</td><td>".$row[0]."</td><td>".$row[14]."</td><td>".$row[15]."</td>";
                  if($row[2] == 'Zaakceptowano')
                    {
                       echo '<td><img src="img/accept.png"></td>';
                       echo "<td><a href='print.php?id=".$row[16]."'>Drukuj karte</a></td>"; 
                    }
                    else if ($row[2] == 'Oczekuje na akceptacje')
                    {
                        echo '<td><img src="img/oczekuje.png"></td><td></td></tr>';
                    } else 
                    {
                        echo '<td><img src="img/cancel.png"></td></tr>';
                    }
               }
            }
           }
            echo "</table>";
            echo '</div>';
            echo "</div>";
        /***************************************************************************************************************************************/
       
            if($_SESSION['stanowisko'] == 'k')
            {
            echo'<div class="panel panel-danger">
                <div class="panel panel-heading">
                <h3 class="panel-title">Komunikaty:</h3>
                </div>';    
            echo '<table id="komunikaty" class="table table-striped">'; 
                while ($row1 = mysql_fetch_array($query_url_inf)) 
                {
                    if($akt_data >= $row1[2] && $akt_data <= $row1[3])
                    {
                        echo "<tr><td>".$row1[1]." - ".$row1[4]." od <b>".$row1[2]. "</b> do <b>".$row1[3]."</b>. Zastępstwo pełni: "; 
                        if(empty($row1[8]) && $row1[12] == '1')
                        {
                            echo 'Brak (urlop na telefon)';
                        } else {
                            echo $row1[8];
                        }
                        echo '</td></tr>';    
                    }
                    if($akt_data >= $row1[5] && $akt_data <= $row1[6])
                    {
                        echo "<tr><td>".$row1[1]." - ".$row1[4]." ".$row1[9]." od <b>".$row1[5]. "</b> do <b>".$row1[6]."</b></td></tr>";
                    }
                    if($akt_data >= $row1[10] && $akt_data <= $row1[11])
                    {
                        echo "<tr><td>".$row1[1]." - ".$row1[9]." od <b>".$row1[10]."</b> do <b>".$row1[11]."</b></td></tr>";
                    }       
                }
            echo '</table>';
            echo '</div>';
            }
        

              
        ?>

    </body>
</html>
