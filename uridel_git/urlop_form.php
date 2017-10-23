<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <link href="js/jquery-ui/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="/resources/demos/style.css" />
<script>
 $(function() {
 $( ".datepicker" ).datepicker( $.datepicker.regional[ "pl" ] );
 $( ".datepicker" ).datepicker();
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
minDate: -10000,
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
   //$id_pracownik = $_GET["id_pracownik"];
   //$data = date("Y-m-d");
   ?>          
         <?php echo "<form id='formularz' method='POST' action='zapis_wniosek.php'>" ?>     
                    <div style="width: 50%; margin-left: 25%;">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <h3 class="panel-title">Wniosek o urlop</h3>
                </div>
                <div class="panel-body">
                    <p>Rodzaj urlopu</p>
                   <p><select name="urlop_rodzaj" class="form-control">
                        <option value="wypoczynkowy">Wypoczynkowy</option>
                        <option value="szkolny">Szkolny</option>
                        <option value="okolicznosciowy">Okolicznościowy</option>
                        <option>Opieka nad dzieckiem</option>
                       </select>
    
                       <input type="checkbox" name="tel" value="1" />Urlop na telefon
                   </p>
                       <br />
                       <p><b>Urlop:</b></p> 
                    <input name="urlop_od" placeholder="Urlop od" type="text" class="datepicker"  />
                    <input name="urlop_do" placeholder="Urlop do" type="text" class="datepicker"  />
                    <br /><br />
                    <p><b>Opieka nad dzieckiem:</b></p>
                    <input name="im_nazw_dziecka" placeholder="Imię i nazwisko dziecka" type="text"  />
                     <input name="data_ur_dziecka" placeholder="Data urodzenia dziecka" type="text" class="datepicker"  />
                    <br /><br />
                    <input name="opieka_od" placeholder="Opieka od" type="text" class="datepicker" />
                    <input name="opieka_do" placeholder="Opieka do" type="text" class="datepicker"  />
                    <br /><br />
                    <p><b>Zastępować mnie będzie:</b></p>
                    <input name="zastepstwo" placeholder="Osoba zastępująca" type="text"  />
                     <br />
                    <input class="btn btn-default" type="submit" value="Wyślij wniosek">
                    <input class="ukryty" name="typ" value="url" /> 
                </div>  
            </div>
            </div>    
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
