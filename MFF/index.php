<?php

session_start();

?>


<!DOCTYPE HTML> 
<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="Description" content="poradnik do gry Marvel Future Fight" />
	<meta name="Keywords" content="marvel", "futurefight", "iron man", "captain ameryka" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>mffporadnik</title>
<SPAN id="Data" style="POSITION: absolute; LEFT: 0; TOP: 0; FONT-SIZE: 10pt;
FONT-WEIGHT: bold; COLOR: #012345; FONT-FAMILY: Verdana, Arial;"></SPAN>
<script>

function czas() {

 if (!document.layers&&!document.getElementById&&!document.all)
 return

  var godzina, minuty, sekundy, dzien, licz_dzien, miesiac, dzisiaj, rok, tekst_miesiac, tekst_dzien;
  dzisiaj = new Date();
  godzina=dzisiaj.getHours();
  minuty=dzisiaj.getMinutes();
  sekundy=dzisiaj.getSeconds();
  rok=dzisiaj.getYear();
  dzien=dzisiaj.getDate();
  licz_dzien=dzisiaj.getDay();
  if (licz_dzien==0) {tekst_dzien="Niedziela"}
  if (licz_dzien==1) {tekst_dzien="Poniedziałek"}
  if (licz_dzien==2) {tekst_dzien="Wtorek"}
  if (licz_dzien==3) {tekst_dzien="Środa"}
  if (licz_dzien==4) {tekst_dzien="Czwartek"}
  if (licz_dzien==5) {tekst_dzien="Piątek"}
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
  if (miesiac==9) {tekst_miesiac="września"}
  if (miesiac==10) {tekst_miesiac="października"}
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
<span id="simplecookienotification_v01_powiadomienie">Ta strona używa plików cookie w celu usprawnienia i ułatwienia dostępu do serwisu oraz prowadzenia danych statystycznych. Dalsze korzystanie z tej witryny oznacza akceptację tego stanu rzeczy.</span><span id="br_pc_title_html"><br></span>
<a id="simplecookienotification_v01_polityka" href="http://jakwylaczyccookie.pl/polityka-cookie/" style="color: rgb(121, 85, 72);">Polityka Prywatności</a><span id="br_pc2_title_html"> &nbsp;&nbsp; </span>
<a id="simplecookienotification_v01_info" href="http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/" style="color: rgb(121, 85, 72);">Jak wyłączyć cookies?</a><div id="jwc_hr1" style="height: 10px; display: none;"></div>
<a id="okbutton" href="javascript:simplecookienotification_v01_create_cookie('simplecookienotification_v01',1,7);" style="position: absolute; background: rgb(121, 85, 72); color: rgb(255, 255, 255); padding: 5px 15px; text-decoration: none; font-size: 12px; font-weight: normal; border: 0px solid rgb(239, 235, 233); border-radius: 0px; top: 5px; right: 5px;">AKCEPTUJĘ</a><div id="jwc_hr2" style="height: 10px; display: none;"></div>
</div>
</div>
<script type="text/javascript">var galTable= new Array(); var galx = 0;</script><script type="text/javascript">function simplecookienotification_v01_create_cookie(name,value,days) { if (days) { var date = new Date(); date.setTime(date.getTime()+(days*24*60*60*1000)); var expires = "; expires="+date.toGMTString(); } else var expires = ""; document.cookie = name+"="+value+expires+"; path=/"; document.getElementById("simplecookienotification_v01").style.display = "none"; } function simplecookienotification_v01_read_cookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(";"); for(var i=0;i < ca.length;i++) { var c = ca[i]; while (c.charAt(0)==" ") c = c.substring(1,c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length); }return null;}var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01");if(simplecookienotification_v01_jest==1){ document.getElementById("simplecookienotification_v01").style.display = "none"; }</script>
	<body onLoad="czas()">
		<div id="naglowek"><a href="index.php"><p>Poradnik Marvel Future Fight</p></a></div>
<div id="witaj">
			<?php
	
				if(isset($_SESSION['zalogowany']))
				{
					echo "<p>Witaj ".$_SESSION['user'].'!</p>';
		
				}
	
			?>
		</div>

	<div id="top_menu">
		
			<?php 
				echo '<a href="podstrony/Ogolne informacje.php">Poradnik o kartach</a>&nbsp;&nbsp;|&nbsp';
				echo '<a href="podstrony/Podstawowe informacje.php">Poradnik o obeliskach</a>&nbsp;&nbsp;|&nbsp';
				echo '<a href="podstrony/ISO.php">Poradnik o ISO</a>&nbsp;&nbsp;|&nbsp';
				echo '<a href="podstrony/InfoABX.php">Postacie pod ABX</a>&nbsp;&nbsp;|&nbsp';
				echo '<a href="podstrony/ACINFO.php">Alliance Concuest</a>&nbsp;&nbsp;|&nbsp';
				
			?>
			
		<div class="logowanie">

			<?php
				if (!isset($_SESSION['zalogowany'])) 
				{
	
		echo '<a href="zaloguj.php"  > Zaloguj </a>';
					
				}
 
				else{
	
					echo '<a href="logout.php"  > Wyloguj </a>';
 
				}
			?>
	</div></div>
	
	<div class="kolumna_boczna lewa">
			<div class="panel_menu">
					<p class="naglowek_boczny">Poradnik o kartach</p>
		
					<ul>
							<li><a href="podstrony/Ogolne informacje.php">Ogólne informacje</a></li>
							<li><a href="podstrony/Najwazniejsze statystyki.php">Najważniejsze statystyki</a></li>
							<li><a href="podstrony/Karty z scd.php">Karty z scd</a></li>
							<li><a href="podstrony/Karty z id.php">Karty z ignore defense</a></li>
							<li><a href="podstrony/Karty z a.php">Karty z atakiem</a></li>
							<li><a href="podstrony/Karty z o.php">Karty z obrona</a></li>
							<li><a href="podstrony/Kolekcje.php">Kolekcje</a></li>
										 
					</ul>
			</div>
			
			
			<div class="panel_menu">
					<p class="naglowek_boczny">Poradnik o obeliskach</p>
					
					<ul>
							<li><a href="podstrony/Podstawowe informacje.php">Podstawowe informacje</a></li>
							<li><a href="podstrony/Obeliski ABX.php">Obeliski pod ABX/WBU</a></li>
							<li><a href="podstrony/Obeliski AC.php">Obeliski pod AC/TB</a></li>
							<li><a href="podstrony/ctp1.php">C.T.P. of Refirement</a></li>
							<li><a href="podstrony/ctp2.php">C.T.P. of Trancendense</a></li>
							<li><a href="podstrony/ctp3.php">C.T.P. of Destruction</a></li>
							<li><a href="podstrony/ctp4.php">C.T.P. of Authority</a></li>
							<li><a href="podstrony/ctp5.php">C.T.P. of Regeneration</a></li>
							<li><a href="podstrony/ctp6.php">C.T.P. of Rage</a></li>
							<li><a href="podstrony/ctp7.php">C.T.P. of Energy</a></li>
							<li><a href="podstrony/ctp8.php">C.T.P. of Patience</a></li>
							<li><a href="podstrony/ctp9.php">C.T.P. of Veteran</a></li>								 
					</ul>
			</div>
			
			
			
	</div>
	
	
	<div class="kolumna_srodkowa">
	
			<div class="panel_tresc">
					<p class="naglowek_srodkowy">MarvelFutureFight</p>
					<p class="tresc">
Witajcie na stronie poświęconej grze Marvel Future Fight. Znajdziecie tu informacje jak najlepiej zbudować swoje postacie, aby móc czerpiac przyjemność i satysfakcje z gry.
					</p>					
			</div>
	</div>
	
	
	
	
	<div class="kolumna_boczna prawa">
	 
			<div class="panel_menu">
					<p class="naglowek_boczny">Postacie pod ABX</p>
					<ul>
							<li><a href="podstrony/InfoABX.php">Podstawowe informacje o ABX</a></li>
					</ul>

					
					<p class="naglowek2">Tydzień pierwszy</p>
					
					<ul>
							<li><a href="podstrony/1D1.php">Dzień1:Blast SuperVillain</a></li>
							<li><a href="podstrony/1D2.php">Dzień2:OpenDay</a></li>
							<li><a href="podstrony/1D3.php">Dzień3:Universal Superhero</a></li>
							<li><a href="podstrony/1D4.php">Dzień4:Combat Superhero</a></li>
							<li><a href="podstrony/1D5.php">Dzień5:Blast Male</a></li>
							<li><a href="podstrony/1D6.php">Dzień6:Universal Supervillain</a></li>
							<li><a href="podstrony/1D7.php">Dzień7:Speed Superhero</a></li>
							<li><a href="podstrony/1D8.php">Dzień8:Combat Supervillain</a></li>						 
					</ul>


					<p class="naglowek2">tydzień drugi</p>
					
					<ul>
							<li><a href="podstrony/1D8.php">Dzień1:Combat SuperVillain</a></li>
							<li><a href="podstrony/2D2.php">Dzień2:OpenDay</a></li>
							<li><a href="podstrony/2D3.php">Dzień3:Universal Superhero Female</a></li>
							<li><a href="podstrony/2D4.php">Dzień4:Supervillain Female</a></li>
							<li><a href="podstrony/2D5.php">Dzień5:Speed Superhero Female</a></li>
							<li><a href="podstrony/2D6.php">Dzień6:Combat Female</a></li>
							<li><a href="podstrony/2D7.php">Dzień7:Speed Supervillain</a></li>
							<li><a href="podstrony/1D1.php">Dzień8:Blast Supervillain</a></li>								 
					</ul>

			</div>
			
			
			<div class="panel_menu">
					<p class="naglowek_boczny">Alliance Conquest</p>
					
					<ul>
							<li><a href="podstrony/ACINFO.php">Najważniejsze informacje</a></li>
							<li><a href="podstrony/Zasady dzia�ania.php">Zasady działania</a></li>
							<li><a href="podstrony/Dobieranie zespo��w.php">Dobieranie zespołów</a></li>
					
							 
					</ul>
			</div>
	</div>
	
	<div id="stopka">
			<p>Stronę wykonała Joanna Szewczyk, Informatyka sem. VI</p>
	</div>
</body>
</html>