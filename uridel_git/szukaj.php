<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
         <script type="text/javascript" src="js/jquery.js"></script>

    </head>
    <body>

<?php
require 'connect.php';

 $akt_data = date("Y-m-d");
 session_start();
$pracownik = $_POST["szukaj_nazwisko"];
//$imie_nazwisko = $_GET["imie_nazwisko"];
//$id_dec = $_GET["id_dec"];


        
        require 'model/naglowek.php';

        $query = mysql_query("SELECT w.data, w.kategoria, w.status, w.urlop_od, w.urlop_do, w.del_od, w.del_do, w.cel, w.sr_lok, p.imie_nazwisko, w.data_dec, w.id_decydujacego, w.data_del, w.opieka_od, w.opieka_do, w.urlop_rodzaj FROM wnioski w JOIN pracownicy p ON w.id_pracownik = p.id WHERE p.imie_nazwisko LIKE '%$pracownik%' AND w.status = 'Zaakceptowano' ORDER BY kategoria");
        
        $ile_wynikow = mysql_numrows($query);
          echo'<div class="panel panel-primary">
             <div class="panel panel-heading">
                <h3 class="panel-title">Wnioski pracownika '.$pracownik.'</h3>
              </div>';
      if($ile_wynikow != 0)
      {     
      echo "<table class='table table-striped'>";    
      while ($row = mysql_fetch_array($query)) {
   
      if($row[1] == 'Delegacja')
      {
        $query_dec= mysql_query ("SELECT imie_nazwisko FROM pracownicy WHERE id = $row[11]");
        $id_tab_dec=mysql_fetch_assoc($query_dec);
        $imie_nazwisko_dec=$id_tab_dec['imie_nazwisko'];
        
  
        echo "<tr><td>".$row[9]." </td><td>".$row[1]."</td><td> od: ".$row[5]." do: ".$row[6]." </td><td>Zatwierdzony przez ".$imie_nazwisko_dec."  </td><td>w dniu ".$row[10]." </td></tr>";
  
      } else if ($row[1] == 'Urlop' AND $row[15] != 'Opieka nad dzieckiem')
      {
        $query_dec= mysql_query ("SELECT id,imie_nazwisko FROM pracownicy WHERE id = $row[11]");
        $id_tab_dec=mysql_fetch_assoc($query_dec);
        $imie_nazwisko_dec=$id_tab_dec['imie_nazwisko'];
        $id_dec=$id_tab_dec['id']; 
        

         echo "<tr><td> $row[9]  </td><td> $row[1] </td><td>od: $row[3] do: $row[4] </td><td>Zatwierdzony przez $imie_nazwisko_dec </td><td> w dniu $row[10] </td></tr>"; 
      } 
       else if ($row[1] == 'Urlop' AND $row[15] == 'Opieka nad dzieckiem')
      {
        $query_dec= mysql_query ("SELECT id,imie_nazwisko FROM pracownicy WHERE id = $row[11]");
        $id_tab_dec=mysql_fetch_assoc($query_dec);
        $imie_nazwisko_dec=$id_tab_dec['imie_nazwisko'];
        $id_dec=$id_tab_dec['id']; 
        

         echo "<tr><td> $row[9]  </td><td> Opieka nad dzieckiem </td><td>od: $row[13] do: $row[14] </td><td>Zatwierdzony przez $imie_nazwisko_dec </td><td> w dniu $row[10] </td></tr>"; 
      } 

        }
      } else
      {
        echo "<h3>Brak wniosków</h3><br>";    
      }  
      echo '</div>';
          echo "<a href='user.php'>Powrót</a>";
        
?>
    </body>
</html>