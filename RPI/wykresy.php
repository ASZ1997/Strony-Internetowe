

<!DOCTYPE HTML>
<html lang="pl">
 <head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="Stacja Meteo Gniezno: />
	<meta name="Keywords" content="temperature","hudimity", "preassure", "gniezno" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="icon" sizes="180x180" href="obrazy/180.jpg">
	<link rel="icon" type="image/jpg" sizes="32x32" href="obrazy/32.jpg">
	<link rel="icon" type="image/jpg" sizes="16x16" href="obrazy/16.jpg">
	<title>Meteo Gniezno</title>

<SPAN id="Data" style="POSITION: absolute; LEFT: 0; TOP: 0; FONT-SIZE: 10pt;
FONT-WEIGHT: bold; COLOR: #012345; FONT-FAMILY: Verdana, Arial;"></SPAN>
<script>

function czas() {

 if (!document.layers&&!document.getElementById&&!document.all)
 return

  var godzina, minuty, sekundy, dzien, licz_dzien, miesiac, dzisiaj, rok, tekst_miesia$
  dzisiaj = new Date();
  godzina=dzisiaj.getHours();
  minuty=dzisiaj.getMinutes();
  sekundy=dzisiaj.getSeconds();
  rok=dzisiaj.getYear();
  dzien=dzisiaj.getDate();
  licz_dzien=dzisiaj.getDay();
  if (licz_dzien==0) {tekst_dzien="Niedziela"}
  if (licz_dzien==1) {tekst_dzien="Poniedzia³ek"}
  if (licz_dzien==2) {tekst_dzien="Wtorek"}
  if (licz_dzien==3) {tekst_dzien="roda"}
  if (licz_dzien==4) {tekst_dzien="Czwartek"}
  if (licz_dzien==5) {tekst_dzien="Pi¹tek"}
  if (licz_dzien==6) {tekst_dzien="Sobota"}
  miesiac=dzisiaj.getMonth()+1;
  if (miesiac==1) {tekst_miesiac="stycznia"}
  if (miesiac==2) {tekst_miesiac="lutego"}
  if (miesiac==3) {tekst_miesiac="marca"}
  if (miesiac==4) {tekst_miesiac="kwietnia"}
  if (miesiac==5) {tekst_miesiac="maja"}
  if (miesiac==6) {tekst_miesiac="czerwca"}
  if (miesiac==7) {tekst_miesiac="lipca"}
  if (miesiac==8) {tekst_miesiac="sierpnia"}
  if (miesiac==9) {tekst_miesiac="wrzenia"}
  if (miesiac==10) {tekst_miesiac="padziernika"}
  if (miesiac==11) {tekst_miesiac="listopada"}
  if (miesiac==12) {tekst_miesiac="grudnia"}
         if ((rok>=00) && (rok<=1900)) {rok=1900+rok;}
         if (miesiac < 10) {miesiac="0"+miesiac;}
         if (dzien < 10) {dzien="0"+dzien;}
         if (godzina < 10) {godzina="0"+godzina;}
         if (minuty < 10) {minuty="0"+minuty;}
         if (sekundy < 10) {sekundy="0"+sekundy;}
  pelnyczas=tekst_dzien + ", " + dzien + " " + tekst_miesiac + " "+rok+"<br>"
        + godzina+":"+minuty+":"+sekundy;


	if (document.getElementById){
		document.getElementById("Data").innerHTML=pelnyczas
		}
	else if (document.layers){
		document.layers.Data.document.write(pelnyczas)
		}
	else if (document.all)
		Data.innerHTML=pelnyczas

// Czestotliwosc odswiezania
setTimeout("czas()",500)
}
</script>     

 </head>
 <body>

<div id="simplecookienotification_v01" style="display: block; z-index: 99999; min-height: 35px; width: 100%; position: fixed; background: rgb(239, 235, 233); border-image: initial; border-top: 1px solid rgb(121, 85, 72); text-align: center; right: 0px; color: rgb(119, 119, 119); bottom: 0px; left: 0px; border-right-color: rgb(121, 85, 72); border-bottom-color: rgb(121, 85, 72); border-left-color: rgb(121, 85, 72); box-shadow: rgba(0, 0, 0, 0.8) 0px 0px 4px 1px;">
<div style="padding:10px; margin-left:15px; margin-right:15px; font-size:14px; font-weight:normal;">
<span id="simplecookienotification_v01_powiadomienie">Ta strona u¿ywa plik󷠣ookie w celu usprawnienia i u³atwienia dost갵 do serwisu oraz prowadzenia danych statystycznych. Dalsze korzystanie z tej witryny oznacza akceptacj꠴ego stanu rzeczy.</span><span id="br_pc_title_html"><br></span>
<a id="simplecookienotification_v01_polityka" href="http://jakwylaczyccookie.pl/polityka-cookie/" style="color: rgb(121, 85, 72);">Polityka Prywatnoci</a><span id="br_pc2_title_html"> &nbsp;&nbsp; </span>
<a id="simplecookienotification_v01_info" href="http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/" style="color: rgb(121, 85, 72);">Jak wy³¹czy栣ookies?</a><div id="jwc_hr1" style="height: 10px; display: none;"></div>
<a id="okbutton" href="javascript:simplecookienotification_v01_create_cookie('simplecookienotification_v01',1,7);" style="position: absolute; background: rgb(121, 85, 72); color: rgb(255, 255, 255); padding: 5px 15px; text-decoration: none; font-size: 12px; font-weight: normal; border: 0px solid rgb(239, 235, 233); border-radius: 0px; top: 5px; right: 5px;">AKCEPTUJʼ/a><div id="jwc_hr2" style="height: 10px; display: none;"></div>
</div>
</div>
<script type="text/javascript">var galTable= new Array(); var galx = 0;</script><script type="text/javascript">function simplecookienotification_v01_create_cookie(name,value,days) { if (days) { var date = new Date(); date.setTime(date.getTime()+(days*24*60*60*1000)); var expires = "; expires="+date.toGMTString(); } else var expires = ""; document.cookie = name+"="+value+expires+"; path=/"; document.getElementById("simplecookienotification_v01").style.display = "none"; } function simplecookienotification_v01_read_cookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(";"); for(var i=0;i < ca.length;i++) { var c = ca[i]; while (c.charAt(0)==" ") c = c.substring(1,c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length); }return null;}var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01");if(simplecookienotification_v01_jest==1){ document.getElementById("simplecookienotification_v01").style.display = "none"; }</script>

        <body onLoad="czas()">
                <div id="naglowek"><a href="index.php"><p>STACJA METEO GNIEZNO</p></a></div>
 

        <div class="kolumna_boczna lewa">
                        <div class="panel_menu">
                                        <p class="naglowek_boczny">Zakładki</p>

                                    <ul>
                                                        <li><a href="Dane.php">Dane bieżące</a></li>
													    <li><a href="wykresy.php">Wykresy</a>
															<ol type="i">
															  <li><a href="dzienny.php"> Dzienne</a></li>
															  <li><a href="tyg.php"> Tygodniowe</a></li>
															  <li><a href="msc.php"> Miesięczne</a></li>
															</ol></li>
                                                        <li><a href="info.php">Informacje</a></li>
                                                                                                     
                                        </ul>
                        </div>
        </div>

   <div class="kolumna_srodkowa">

                        <div class="panel_tresc">
                                        <p class="naglowek_srodkowy">Wykresy</p>
 
                        </div>
        </div>
 
        <div id="stopka">
                        <p>JS & AS </p>

        </div>


 </body>
 </html>
