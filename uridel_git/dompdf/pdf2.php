<?php

require 'connect.php';
$id_pracownik = $_GET["id_pracownik"];
$id_decydujacego = $_GET["id_decydujacego"];
$data_wniosku = $_GET["data_wniosku"];
$data_dec = $_GET["data_dec"];
$urlop_od = $_GET["urlop_od"];
$urlop_do = $_GET["urlop_do"];
$data_del = $_GET["data_del"];
$del_od = $_GET["del_od"];
$del_do = $_GET["del_do"];
$cel = $_GET["cel"];
$sr_lok = $_GET["sr_lok"];

$kategoria = $_GET["kategoria"];

$query= mysql_query ("SELECT imie_nazwisko FROM pracownicy WHERE id = $id_pracownik");
        $id_tab=mysql_fetch_assoc($query);
        $pracownik=$id_tab['imie_nazwisko'];

$query2= mysql_query ("SELECT imie_nazwisko FROM pracownicy WHERE id = $id_decydujacego");
        $id_tab2=mysql_fetch_assoc($query2);
        $decydujacy=$id_tab2['imie_nazwisko'];      

    header( "refresh:0;url=pdf.php?id_pracownik=$id_pracownik&pracownik=$pracownik&decydujacy=$decydujacy&data_wniosku=$data_wniosku&data_dec=$data_dec&urlop_od=$urlop_od&urlop_do=$urlop_do&kategoria=$kategoria&data_del=$data_del&del_od=$del_od&del_do=$del_do&cel=$cel&sr_lok=$sr_lok");

?>