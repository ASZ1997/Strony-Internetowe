<?php

session_start();

?>

<!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=charset="utf-8" />
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
<body onLoad="czas()">
	<div id="naglowek_GENERAL"><a href="/moj/index.php"><p>Poradnik Marvel Future Fight</p></a></div>
	<div id="witaj">
<?php
	
	if(isset($_SESSION['zalogowany']))
	{
		echo "<p>Witaj ".$_SESSION['user'].'!</p>';
		
	}
	
	
	?></div> 	
<div id="top_menu">

	
<?php 
			echo '<a href="Ogolne informacje.php">Poradnik o kartach</a>&nbsp;&nbsp;|&nbsp';
			echo '<a href="Podstawowe informacje.php">Poradnik o obeliskach</a>&nbsp;&nbsp;|&nbsp';
			echo '<a href="ISO.php">Poradnik o ISO</a>&nbsp;&nbsp;|&nbsp';
			echo '<a href="InfoABX.php">Postacie pod ABX</a>&nbsp;&nbsp;|&nbsp';
			echo '<a href="ACINFO.php">Alliance Concuest</a>&nbsp;&nbsp;|&nbsp';
			
?>
			
			<div class="logowanie">

			<?php
		if (!isset($_SESSION['zalogowany'])) 
		{
	
		echo '<a href="zaloguj.php"  > Zaloguj </a>';
	
		}
 
else{
	
echo '<a href="logout.php" > Wyloguj </a>';
 
}
?>	
	</div></div>
	
	<div class="kolumna_boczna lewa">
			<div class="panel_menu">
					<p class="naglowek_boczny">Poradnik o kartach</p>
		
					<ul>
							<li><a href='Ogolne informacje.php'>Ogólne informacje</a></li>
							<li><a href="Najwazniejsze statystyki.php">Najważniejsze statystyki</a></li>
							<li><a href="Karty z scd.php">Karty z scd</a></li>
							<li><a href="Karty z id.php">Karty z ignore defense</a></li>
							<li><a href="Karty z a.php">Karty z atakiem</a></li>
							<li><a href="Karty z o.php">Karty z obrona</a></li>
							<li><a href="Kolekcje.php">Kolekcje</a></li>
										 
					</ul>
			</div>
			
			
			<div class="panel_menu">
					<p class="naglowek_boczny">Poradnik o obeliskach</p>
					
					<ul>
							<li><a href="Podstawowe informacje.php">Podstawowe informacje</a></li>
							<li><a href="Obeliski ABX.php">Obeliski pod ABX/WBU</a></li>
							<li><a href="Obeliski AC.php">Obeliski pod AC/TB</a></li>
							<li><a href="ctp1.php">C.T.P. of Refirement</a></li>
							<li><a href="ctp2.php">C.T.P. of Trancendense</a></li>
							<li><a href="ctp3.php">C.T.P. of Destruction</a></li>
							<li><a href="ctp4.php">C.T.P. of Authority</a></li>
							<li><a href="ctp5.php">C.T.P. of Regeneration</a></li>
							<li><a href="ctp6.php">C.T.P. of Rage</a></li>
							<li><a href="ctp7.php">C.T.P. of Energy</a></li>
							<li><a href="ctp8.php">C.T.P. of Patience</a></li>
							<li><a href="ctp9.php">C.T.P. of Veteran</a></li>							 
					</ul>
			</div>
			
			
			
	</div>
	
	
	<div class="kolumna_srodkowa">
	
			<div class="panel_tresc">
					<p class="naglowek_srodkowy">Karty-Ogólne informacje</p>
					<p class="tresc">
Karty to naprawdę bardzo ważny element gry, przez wiele osób olewany (specjalnie lub nie). Karty sa ogromnie istotne bowiem: <br>
wpływają na statystyki <b>WSZYSTKICH POSTACI</b>, a nie tylko jednej;<br>
podnosza kluczowe dla efektywnego grania STATYSTYKI: cooldown, attack speed, attack, crit dmg / rate czy HP
w przypadku zmiany kart wywraca statystyki postaci, co wymaga ponownego przestawiania postaci, by nie nadziewać się lub mocno przebijać limity cech.
<b>Słowem: karty to FUNDAMENT porzadnego konta</b>
					</p>
							
			</div>
	</div>
	
	
	
	
	<div class="kolumna_boczna prawa">
	
			<div class="panel_menu">
					<p class="naglowek_boczny">Postacie pod ABX</p>
					<ul>
							<li><a href="InfoABX.php">Podstawowe informacje o ABX</a></li>
					</ul>

					
				<p class="naglowek2">Tydzień pierwszy</p>
					
					<ul>
							<li><a href="1D1.php">Dzień1:Blast SuperVillain</a></li>
							<li><a href="1D2.php">Dzień2:OpenDay</a></li>
							<li><a href="1D3.php">Dzień3:Universal Superhero</a></li>
							<li><a href="1D4.php">Dzień4:Combat Superhero</a></li>
							<li><a href="1D5.php">Dzień5:Blast Male</a></li>
							<li><a href="1D6.php">Dzień6:Universal Supervillain</a></li>
							<li><a href="1D7.php">Dzień7:Speed Superhero</a></li>
							<li><a href="1D8.php">Dzień8:Combat Supervillain</a></li>						 
					</ul>


					<p class="naglowek2">tydzień drugi</p>
					
					<ul>
							<li><a href="1D8.php">Dzień1:Combat SuperVillain</a></li>
							<li><a href="2D2.php">Dzień2:OpenDay</a></li>
							<li><a href="2D3.php">Dzień3:Universal Superhero Female</a></li>
							<li><a href="2D4.php">Dzień4:Supervillain Female</a></li>
							<li><a href="2D5.php">Dzień5:Speed Superhero Female</a></li>
							<li><a href="2D6.php">Dzień6:Combat Female</a></li>
							<li><a href="2D7.php">Dzień7:Speed Supervillain</a></li>
							<li><a href="1D1.php">Dzień8:Blast Supervillain</a></li>								 
					</ul>

			</div>
			
			
			<div class="panel_menu">
					<p class="naglowek_boczny">Alliance Conquest</p>
					
					<ul>
							<li><a href="ACINFO.php">Najważniejsze informacje</a></li>
							<li><a href="Zasady dzialania.php">Zasady działania</a></li>
							<li><a href="Dobieranie zespolow">Dobieranie zespołów</a></li>
					
							 
					</ul>
			</div>
	</div>
	
	<div id="stopka">
			<p>Stronę wykonała Joanna Szewczyk, Informatyka sem. VI</p>
	</div>
</body>
</html>