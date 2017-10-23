
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-2">
	<title>Możliwości pluginu Autocomplete</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/datapicker.css" rel="stylesheet">
	<link rel="stylesheet" href="jquery.autocomplete.css" type="text/css" />
        <link rel="stylesheet" href="/resources/demos/style.css" />

        <script type="text/javascript" src="./lib/jquery.js"></script>
	<script type="text/javascript" src="./lib/jquery.bgiframe.min.js"></script>
  	<script type="text/javascript" src="jquery.autocomplete.js"></script>
        <script src="js/jquery-ui/ui/jquery-ui.js"></script>
        <script src="bootstrap/js/bootstrap-datepicker.js" charset="UTF-8"></script>
	<script type="text/javascript">
		$(document).ready( 
                                
			function(){
				$("input#pracownik").autocomplete("jq_urzadzenia.php", {
					width: 200,
					max: 10,
					selectFirst: false,
					cacheLength: 1
				});
                                		$("input#pracownik").result(function(event, arr_urzadzenie, formatted) {
					if(arr_urzadzenie){
						$("input#stanowisko").val(arr_urzadzenie[1]);
						$("input#jed_org").val(arr_urzadzenie[2]);
					}else{
						$("input#stanowisko").val('');
						$("ipnut#jed_org").val('wybrano wartość spoza listy');		
					}				
				});
			}

                                
		);
	</script>
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
nextText: 'NastÄ™pny>',
currentText: 'DziĹ›',
monthNames: ['StyczeĹ„','Luty','Marzec','KwiecieĹ„','Maj','Czerwiec',
'Lipiec','SierpieĹ„','WrzesieĹ„','PaĹşdziernik','Listopad','GrudzieĹ„'],
monthNamesShort: ['Sty','Lu','Mar','Kw','Maj','Cze',
'Lip','Sie','Wrz','Pa','Lis','Gru'],
dayNames: ['Niedziela','PoniedziaĹ‚ek','Wtorek','Ĺšroda','Czwartek','PiÄ…tek','Sobota'],
dayNamesShort: ['Nie','Pn','Wt','Ĺšr','Czw','Pt','So'],
dayNamesMin: ['N','Pn','Wt','Ĺšr','Cz','Pt','So'],
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


         <?php echo "<form id='formularz' method='POST' action='zapis_wniosek.php?typ=del&id_pracownik=".$_SESSION['pracownik_id']."'>"; ?>
           <!-- Wniosek o delegacje<br />
            <table>
            <tr><td>Data delegacji:</td><td><input name="data_del"  type="text" placeholder="Data delegacji" class="datepicker"  /></td></tr> 
            <tr><td>Cel delegacji:</td><td><textarea name="cel" class="form-control" rows="3" cols="30"></textarea></td></tr>
            <tr><td>Delegacja od:</td><td><input name="del_od" type="text" class="datepicker"  /></td></tr>
            <tr><td>Delegacja do:</td><td><input name="del_do" type="text" class="datepicker"  /></td></tr>
            <tr><td>Ĺšrodek lokomocji:</td><td><input name="sr_lok" type="text" /></td></tr>
            <tr><td><input type="text" class="form-control" placeholder="Username"></td></tr>
            <tr><td><input type="submit" value="Wyslij wniosek" /></td></tr>
            </table> -->
            <div style="width: 50%; margin-left: 25%;">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <h3 class="panel-title">Wniosek o delegacje</h3>
                </div>
                <div class="panel-body">
                    <table>
                     <tr>
                      <td> Imię i nazwisko </td>
                      <td> <input type="text" name="pracownik" id="pracownik" /> </td>
                     </tr>
                        <tr>
                         <td> Stanowisko </td>
                         <td><input type="text" name="stanowisko" id="stanowisko" readonly="readonly" /> </td>
                        </tr>
                        <tr>
                         <td style="visibility: hidden;">Jednostka organizacyjna</td>   
                         <td><input type="text" name="jed_org" id="jed_org" style="visibility: hidden;" readonly="readonly" /></td>
                        </tr>
                        <tr>
                         <td><input type="text" name="jed_org" id="jed_org" style="visibility: hidden;" /></td>
                        </tr>
                    </table>
                    <br />
                    
                    
                    Delegacja od <input name="del_od" placeholder="RRRR-MM-DD" type="text" class="datepicker"  />
                    Delegacja do <input name="del_do" placeholder="RRRR-MM-DD" type="text" class="datepicker"  />
                    <br /><br />
                    <p>Miejsce</p>
                    <input name="miejsce" type="text" style="width:100%" />
                    <br /><br />
                    <p>Cel wyjazdu:</p>
                    <textarea name="cel" class="form-control" rows="3" cols="30"></textarea>
                    <br />
                    <p>&#x015Arodek lokomocji:</p>
                    <input type="checkbox" name="sr_lok[]" value="Samoch&#243;d s&#322;u&#380;bowy" />Samoch&#243;d s&#322;u&#380;bowy <br />
                    <input type="checkbox" name="sr_lok[]" value="Samoch&#243;d prywatny do cel&#243;w s&#322;u&#380;bowych" />Samoch&#243;d prywatny do cel&#243;w s&#322;u&#380;bowych <br />
                    <input type="checkbox" name="sr_lok[]" value="PKP I KL" />PKP I KL<br />
                    <input type="checkbox" name="sr_lok[]" value="PKP II KL" />PKP II KL<br />
                    <input type="checkbox" name="sr_lok[]" value="Koleje Slaskie" />Koleje Slaskie<br />
                    <input type="checkbox" name="sr_lok[]" value="Bus" />Bus<br />
                    <input type="checkbox" name="sr_lok[]" value="Polski Bus" />Polski Bus<br />
                    <input type="checkbox" name="sr_lok[]" value="KZK GOP" />KZK GOP<br />
                    <input type="checkbox" name="sr_lok[]" value="PKM" />PKM<br />
                    <input type="checkbox" name="sr_lok[]" value="MZK" />MZK<br />
                    <input type="checkbox" name="sr_lok[]" value="PKS" />PKS<br />
                    <input type="checkbox" name="sr_lok[]" value="Samolot" />Samolot<br />
                    <input type="checkbox" name="sr_lok[]" value="Pieszo" />Pieszo<br />
                    
                    <!--<select class="form-control" name="sr_lok">
                        <option>PKP II kl.</option>
                        <option>Komunikacja miejska</option> 
                        <option>Komunikacja publiczna</option> 
                        <option>Samoch&#243;d s&#322;u&#380;bowy</option>    
                        <option>PKP II kl. + Samoch&#243;d s&#322;u&#380;bowy</option>
                        <option>PKP II kl. + Polski Bus</option>
                        <option>Bus + Samoch&#243;d s&#322;u&#380;bowy </option>
                        <option>Bus + Samoch&#243;d prywatny do cel&#243;w s&#322;u&#380;bowych </option>
                        <option>KZK GOP + Samoch&#243;d s&#322;u&#380;bowy </option>
                        <option>PKM + Samoch&#243;d s&#322;u&#380;bowy </option>
                        <option>Samoch&#243;d prywatny do cel&#243;w s&#322;u&#380;bowych + Samoch&#243;d s&#322;u&#380;bowy </option>
                        <option>Samoch&#243;d prywatny do cel&#243;w s&#322;u&#380;bowych</option>
                        <option>Samolot</option>
						<option>Samolot + poci&#x105;g</option>
						<option>Samoch&#243;d s&#322;u&#380;bowy + samolot + poci&#x105;g</option>
                        <option>Bus</option>
                        <option>Polski Bus</option>
                        <option>KZK GOP</option>
                        <option>PKM</option>
						<option>MZK</option>
						<option>PKS</option>
                    </select> -->
                                          <br /><br />
                    <p>Uwagi (np. samoch&#243;d prywatny Pani/Pana ...)</p>
                    <input name="uwaga" type="text" style="width:100%" />
                     <br />
                    <input class="btn btn-default" type="submit" value="Wy&#347;lij wniosek">
                </div>  
            </div>
            </div>    
        </form>

</body>
</html>