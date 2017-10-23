<?php

$query= mysql_query ("SELECT imie_nazwisko FROM pracownicy WHERE id = $id_pracownik");
        $id_tab=mysql_fetch_assoc($query);
        $pracownik=$id_tab['imie_nazwisko'];
?>
