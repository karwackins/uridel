<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            
            #nr_del
            {
                padding-top: 80px;
                height: 30px;
            }

            #zap_data
            {
               font-size: 10px;
              // height: 7px;
               padding-bottom: 10px; 
            }
            
            #zap_data td, .dla_imie_nazw td, #do td, #stanowisko td
            {
                padding-left: 85px;
            }
            
            .dla_imie_nazw, #stanowisko, #od_do
            {
               height: 1px;
               font-size: 14px;
               margin-top: 10px;
               
            }
            
            #do
            {
                height:50px;
                font-size: 10px;
            }
            
            #cel td
            {
                height:50px;
                padding-left: 70px;
                font-size: 10px;
                width: 50px;
            }
            
            #srodek_lok td
            {
                padding-left: 90px;
                height:50px;
            }
            
            #content
            {
                width: 1000px;
                height: 700px;
                background-image: url("del.jpg");
            }
            
            
        </style>
    </head>
    <body>
   <div id="content">    
    <table style="width: 1000px;" border="0px">
    <tr>	<td rowspan="3" width="190px">		</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
    <tr>	<td>		</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
    <tr>	<td height="30px">		</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
    <tr>	<td height="7px">		</td>	<td id="nr_del">	1234	</td>	<td>		</td>	<td>		</td>	</tr>
    <tr>	<td height="7px">		</td>	<td id="nr_zap">	18878	</td>	<td>		</td>	<td>		</td>	</tr>
    <tr id="zap_data">	<td>	Zap z dnia	</td>	<td>		</td>	<td>	</td>	<td>		</td>	</tr>
    <tr class="dla_imie_nazw">	<td colspan="2"><b>	Damian Karwacki</b>	</td>	<td></td>	<td>		</td>	<td>		</td>	</tr>
    <tr class="dla_imie_nazw">	<td colspan="2">		</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
    <tr id="stanowisko">	<td colspan="2"> St. Informatyk	</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
    <tr id="do">	<td colspan="2">	DK-Rybnik	</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
    <tr id="od_do">	<td style="padding-left: 110px;">	2014-05-22	</td>	<td>	2014-05-22	</td>	<td>		</td>	<td>		</td>	</tr>
    <tr id="cel"> <td colspan="2"> Dołączanie komputerów do domeny,<br /> rozwiązywanie problemów informatycznych		</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
    <tr id="srodek_lok">	<td colspan="2">Samochód służbowy	</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
    
</table>
    </body>
</html>
