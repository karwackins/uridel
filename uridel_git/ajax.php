<?php


require 'connect.php';
$szukaj_data = $_POST["szukaj_data"];
echo $szukaj_data;
/*$query2 = mysql_query("SELECT w.data, p.imie_nazwisko, w.urlop_od, w.urlop_do, w.kategoria, w.del_od, w.del_do, p.wydzial  FROM wnioski w JOIN pracownicy p ON w.id_pracownik = p.id WHERE w.data = '$szukaj_data' "); 

echo "<table>";  
        while ($row1 = mysql_fetch_array($query2)) 
        {
            if($akt_data >= $row1[2] && $akt_data <= $row1[3])
            {
                echo $row1[1]." - ".$row1[4]." od ".$row1[2]. " do ".$row1[3]."<br />";
            }
            if($akt_data >= $row1[5] && $akt_data <= $row1[6])
            {
                echo $row1[1]." - ".$row1[4]." od ".$row1[5]. " do ".$row1[6]."<br />";
            }
        }
          

echo "</table>";   */
          
?>