<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <link href="js/jquery-ui/style.css" rel="stylesheet" type="text/css" media="screen" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui/ui/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css" />
<script>
 $(function() {
 $( ".datepicker" ).datepicker( $.datepicker.regional[ "pl" ] );
 $( ".datepicker" ).datepicker();
 $( ".selector" ).datepicker({ minDate: new Date(2007, 1 - 1, 1) });
});

    jQuery(function($){
$.datepicker.regional['pl'] = {
closeText: 'Zamknij',
prevText: '<Poprzedni',
nextText: 'Następny>',
currentText: 'Dziś',
monthNames: ['Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec',
'Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień'],
monthNamesShort: ['Sty','Lu','Mar','Kw','Maj','Cze',
'Lip','Sie','Wrz','Pa','Lis','Gru'],
dayNames: ['Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota'],
dayNamesShort: ['Nie','Pn','Wt','Śr','Czw','Pt','So'],
dayNamesMin: ['N','Pn','Wt','Śr','Cz','Pt','So'],
weekHeader: 'Tydz',
dateFormat: 'yy-mm-dd',
minDate: 0,
firstDay: 1,
isRTL: false,
showMonthAfterYear: false,
yearSuffix: ''};
$.datepicker.setDefaults($.datepicker.regional['pl']);
});
</script>
    </head>
    <body>
        
        
           <?php
          require 'connect.php';
          $id_pracownik = $_GET["id_pracownik"];
          $data = date("Y-m-d");

   
        ?>
        
        
    
         <?php echo "<form id='formularz' method='POST' action='zapis_wniosek.php?typ=del&data=".$data."&id_pracownik=".$id_pracownik."'>" ?>
           <!-- Wniosek o delegacje<br />
            <table>
            <tr><td>Data delegacji:</td><td><input name="data_del"  type="text" placeholder="Data delegacji" class="datepicker"  /></td></tr> 
            <tr><td>Cel delegacji:</td><td><textarea name="cel" class="form-control" rows="3" cols="30"></textarea></td></tr>
            <tr><td>Delegacja od:</td><td><input name="del_od" type="text" class="datepicker"  /></td></tr>
            <tr><td>Delegacja do:</td><td><input name="del_do" type="text" class="datepicker"  /></td></tr>
            <tr><td>Środek lokomocji:</td><td><input name="sr_lok" type="text" /></td></tr>
            <tr><td><input type="text" class="form-control" placeholder="Username"></td></tr>
            <tr><td><input type="submit" value="Wyslij wniosek" /></td></tr>
            </table> -->
            <div style="width: 50%; margin-left: 25%;">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <h3 class="panel-title">Wniosek o delegacje</h3>
                </div>
                <div class="panel-body">
                    <input name="data_del"  type="text" placeholder="Data delegacji" class="datepicker"  />
                    <input name="del_od" placeholder="Delegacja od" type="text" class="datepicker"  />
                    <input name="del_do" placeholder="Delegacja do" type="text" class="datepicker"  />
                    <br /><br />
                    <p>Cel wyjazdu:</p>
                    <textarea name="cel" class="form-control" rows="3" cols="30"></textarea>
                    <br />
                    <p>Środek lokomocji:</p>
                    <select class="form-control" name="sr_lok">
                        <option>PKP</option>
                        <option>Komunikacja miejska</option>
                        <option>Samochód służbowy</option>
                        <option>Samochód prywatny</option>
                    </select>
                     <br />
                    <input class="btn btn-default" type="submit" value="Wyślij wniosek">
                </div>  
            </div>
            </div>    
        </form>
            
        <?php
        // put your code here
        ?>
    </body>
</html>
