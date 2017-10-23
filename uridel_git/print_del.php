<html>
<head>
    <link rel="stylesheet" href="print_del.css" type="text/css" media="print" />

<!-- metatagi -->
<script type="text/javascript">
function drukuj(){
 // sprawdź możliwości przeglądarki
   if (!window.print){
      alert("Twoja przeglądarka nie drukuje!")
   return 0;
   }
 window.print(); // jeśli wszystko ok &#8211; drukuj
}
</script>
</head>
<body onload="drukuj()">
<?php
 /*require 'connect.php';
 $data = date("d-m-Y");
 $id_wniosku = $_GET["id"];

$query = mysql_query("SELECT * FROM wnioski w JOIN pracownicy p ON w.id_pracownik = p.id WHERE w.id = '$id_wniosku'");

 


while ($row = mysql_fetch_array($query)) 
{    
    //$target = new DateTime($row[5]);
    //$today = new DateTime($row[6]);
    //$difference = $today->diff($target);
    $target = $row[6];
    $today = $row[5];
    
   //workDays($today,$target);

    if($row[3] == 'Urlop'&& $row[19] != 'Opieka nad dzieckiem')
    {*/
     echo '<table id="tabela">'
            . '<tr><td>Lewa</td><td style="background-image: url(img/prawa_del.jpg);">qwedqwdqwdqwdqwdqwqw</td></tr>'
        . '</table>';
    /*
    }
    if($row[3] == 'Urlop'&& $row[19] == 'Opieka nad dzieckiem')
    {
    $target = $row[18];
    $today = $row[17];
     echo '<table id="tabela" style="border:1px solid black;">'
             . '<tr><td colspan="3"><b>WNIOSEK O UDZIELENIE URLOPU: '.$row[19].'</b></td></tr>'
             . '<tr><td style="width:30%;">Nazwisko i imie:</td><td class="border" style="width:30%;"><b>'.$row[21].'</b></td><td style="width:40%;" rowspan="5">Stwierdzam, że ww. do dnia dzisiejszego pozostało do wykorzystania za rok 200..... dni..........</td></tr>'
             . '<tr><td>Wydział/Oddział</td><td class="border"><b>'.$row[22].'</b></td><td></td></tr>'
             . '<tr><td>'.$row[19].' w dniach:</td><td class="border"><b>'.$row[17].'</b> do <b>'.$row[18].'</b></td><td></td></tr>'
             . '<tr><td class="border">razem dni: <b>'.workDays($today,$target).'</b></td><td></td><td></td></tr>'
             . '<tr><td class="border">Imię i nazwisko dziecka: <br /><b>'.$row[14].'</b></td><td>Data urodzenia: <b>'.$row[15].'</b></td><td></td></tr>'
             . '<tr><td></td><td></td><td></td></tr>'
             . '<tr><td>Katowice dnia: '.$data.'</td><td>.......................................</td><td>.................................................</td></tr>'
             . '<tr><td></td><td class="podpis">(podpis)</td><td class="podpis">(data i podpis)</td></tr>'
             . '<tr><td class="podpis" colspan="2"></td><td></td></tr>'
             . '<tr><td colspan="2" class="border"><b>Przyjmujący zastępstwo</b></td><td><b>Udzielam urlopu</b></td></tr>'
             . '<tr><td><b>'.$row[16].'</b></td><td class="border">.......................................</td><td></td></tr>'
             . '<tr><td class="podpis"></td><td class="podpis">(podpis)</td><td></td></tr>'
             . '<tr><td colspan="2">...........................................................................</td><td>.................................................</td></tr>'
             . '<tr><td colspan="2" class="podpis">(podpis bezpośredniego przełożonego)</td><td class="podpis">(podpis Dyrektora Wydziału)</td></tr>'
             . '<tr><td colspan="2"></td><td>Katowice, dnia '.$data.'</td></tr>'
        . '</table>'; 
    
    }
}*/
?>

</body>
</html>