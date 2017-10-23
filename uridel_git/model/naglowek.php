<?php        
echo "<div id='naglowek'>"; 
        echo "<div id='naglowek_logo' style='float:left;'> </div>";
        echo "<div style='float:right;'>";
        echo "Dzisiaj jest: ".$akt_data; 
        echo "<br />Zalogowany użytkownik: ".$_SESSION['pracownik'];
        echo "<br /><a href='http://uridel.kuratorium.katowice.pl/'>wyloguj</a>";
        echo "</div>";
        echo "</div>";
?>