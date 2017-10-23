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
        //$typ = $_GET["typ"];
        $data = date("Y-m-d");
        $typ = $_POST["typ"];
        
        if($typ == 'url')
        {
          //$id_pracownik = $_GET["id_pracownik"];
          $urlop_rodzaj = $_POST["urlop_rodzaj"];
          $urlop_od = $_POST["urlop_od"];
          $urlop_do = $_POST["urlop_do"];
          $opieka_od = $_POST["opieka_od"];
          $opieka_do = $_POST["opieka_do"];
          $im_nazw_dziecka = $_POST["im_nazw_dziecka"];
          $data_ur_dziecka = $_POST["data_ur_dziecka"];
          $zastepstwo = $_POST["zastepstwo"];
          $tel = $_POST["tel"];
         
          
          $query = @mysql_query("SELECT stanowisko FROM pracownicy WHERE id = ".$_SESSION['pracownik_id']."");
     
            $insert_form = @mysql_query("INSERT INTO wnioski (id_pracownik, data, urlop_rodzaj, urlop_od, urlop_do, opieka_od, opieka_do, imie_nazw_dziecka, data_ur_dziecka, zastepstwo, status, kategoria, tel) VALUES (".$_SESSION['pracownik_id'].", '$data','$urlop_rodzaj', '$urlop_od', '$urlop_do', '$opieka_od','$opieka_do','$im_nazw_dziecka','$data_ur_dziecka','$zastepstwo','Oczekuje na akceptacje', 'Urlop', '$tel')");
      
        } if($typ == 'del')
        {
            $id_pracownik = $_GET["id_pracownik"];
            $data_del = $_POST["data_del"];
            $del_od = $_POST["del_od"];
            $del_do = $_POST["del_do"];
            $cel = $_POST["cel"];
            $sr_lok = $_POST["sr_lok"];
            
            $insert_form = @mysql_query("INSERT INTO wnioski (id_pracownik, data, data_del, del_od, del_do, cel, sr_lok, status, kategoria) VALUES ('$id_pracownik', '$data', '$data_del', '$del_od', '$del_do', '$cel', '$sr_lok', 'Oczekuje na akceptacje', 'Delegacja')");
        }

                header( "refresh:0;url=user.php");
        
        ?>
    </body>
</html>
