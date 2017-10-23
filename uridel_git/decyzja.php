<?php
require 'connect.php';
session_start();
$id = $_GET["id"];
$dec = $_GET["dec"];
//$id_decydujacego = $_GET["id_zatwierdzajacego"];
$akt_data = date("Y-m-d");



if($dec == 'T')
{
    $edit = mysql_query("UPDATE wnioski SET status = 'Zaakceptowano', data_dec = '$akt_data', id_decydujacego = ".$_SESSION['pracownik_id']." WHERE id = '$id'");
    header( "refresh:0;url=user.php");
} else if($dec == 'N')
{
    $edit = mysql_query("UPDATE wnioski SET status = 'Odrzucono', data_dec = '$akt_data', id_decydujacego = ".$_SESSION['pracownik_id']." WHERE id = '$id'");
    header( "refresh:0;url=user.php");
}
?>
