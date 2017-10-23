<?php
require 'connect.php';

//$id_pracownik = 32;
$ilosc_urlopu = 26;
$ile_dni = 0;

$query_ile_dni = mysql_query("SELECT w.urlop_od, w.urlop_do FROM wnioski w JOIN pracownicy p ON w.id_pracownik = p.id WHERE p.id = ".$_SESSION['pracownik_id']." AND w.status = 'Zaakceptowano' AND w.urlop_od >= '2017-01-01'");

function workDays($date3, $date4)
{
    //święta w postaci mm-dd, pominąłem Wielkanoc i Boże Ciało, gdyż są to święta ruchome
    $hol=array('01-01','05-01','05-03','08-15','11-11','12-25','12-26');
 
    $date1=strtotime($date3);
    $date2=strtotime($date4);
    if ($date2===$date1) return 1;
    $znak=1;//określa czy to będzie minus (gdy date1>date2) czy plus 
    if ($date1>$date2)// minusy
        {$datePom=$date1;$date1=$date2;$date2=$datePom;$znak=-1;}
    $ilosc=0;
    $date1=strtotime('+1 day',$date1);
    $date2=strtotime('+1 day',$date2);
    while ($date1<$date2)
    {
        $weekDay=date('w',$date1);
        if (!($weekDay==0 || $weekDay==6 || in_array(date('m-d',$date1),$hol)))
            $ilosc++;
        $date1=strtotime('+1 day',$date1);
    }
    $ilosc*=$znak;
    return $ilosc+1;
 
}
$i=0;
while ($row = mysql_fetch_array($query_ile_dni)) 
    {
           $ile_dni = $ile_dni + workDays($row[0], $row[1]);
           //echo $ile_dni."<br />";
    }
    $pozostało = $ilosc_urlopu - $ile_dni;
 echo "Ilość wykorzystanych dni urlopu: ".$ile_dni."<br />";
 echo "Ilość dni urlopu do wykorzystania: ".$pozostało."<br />";

 
 ?>