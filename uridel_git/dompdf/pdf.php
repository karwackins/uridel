<?php
require_once("dompdf_config.inc.php");


$id_pracownik = $_GET["id_pracownik"];
$id_decydujacego = $_GET["id_decydujacego"];
$data_wniosku = $_GET["data_wniosku"];
$data_dec = $_GET["data_dec"];
$urlop_od = $_GET["urlop_od"];
$urlop_do = $_GET["urlop_do"];
$pracownik = $_GET["pracownik"];
$decydujacy = $_GET["decydujacy"];
$kategoria = $_GET["kategoria"];
$data_del = $_GET["data_del"];
$del_od = $_GET["del_od"];
$del_do = $_GET["del_do"];
$cel = $_GET["cel"];
$sr_lok = $_GET["sr_lok"];


if($kategoria == 'Urlop')
{    
$html = "<html>
    <head>
        <title></title>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>

    </head>
    <body>
    <div style='color: #006699;'>POTWIERDZENIE WYSLANIA WNIOSKU URLOPOWEGO</div><br><hr><br>Wniosek z dnia: <b>$data_wniosku</b><br><br>Imie i nazwisko: <b>$pracownik</b> <br><br>Urlop od:<b> $urlop_od </b> do: <b>$urlop_do </b><br><br>Zatwierdzony przez <b> $decydujacy </b>w dniu <b>$data_dec</b></body>
    </head>";

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");
} else 
    {
    $html = "<html>
    <head>
        <title></title>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>

    </head>
    <body>
    <div style='color: #006699; width: 1000px; height: 700px; background-image: url(del.jpg);'>POTWIERDZENIE WYSLANIA WNIOSKU O DELEGACJE</div><br><hr><br>Wniosek z dnia: <b>$data_wniosku</b><br><br>Imie i nazwisko: <b>$pracownik</b> <br><br>Data delegacji: <b>$data_del</b><br><br>Delegacja od:<b> $del_od </b> do: <b>$del_do </b><br><br>Cel delegacji: <b> $cel</b><br><br>Srodek lokomocji: <b> $sr_lok</b><br><br>Zatwierdzony przez <b> $decydujacy </b>w dniu <b>$data_dec</b></body>
    </head>";

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");
}
?>