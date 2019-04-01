<!DOCTYPE HTML>	
<html lang="pl">
	<head>
	<link rel="stylesheet" href="style1.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Moja Strona</title>
	<meta charset="utf-8" />
	<meta name="description" content="Oto strona z moimi ulubionymi książkami!"/>
	<meta name="keywords" content="książki, fanstastyka, fantastyka naukowa, najlepsze książki Sci-Fi"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	</head>
	<body>
		<div id="conteiner">
			<div id="head"><h1>Moje Ulubione Książki</h1></div>
				<div id="menu">
					<div class="hcbutton"><a href="index.html">Strona Główna</a></div>
					<div class="hcbutton"><a href="spis_ksiazek.html">Spis książek</a></div>
					<div class="hcbutton"><a href="komentarze.php">A co Ty sądzisz?</a></div>
					<div class="hcbutton"><a href="O_mnie.html">O mnie</a></div>
					<div style="clear:both"></div>
				</div>
				<div id="content" >
				<div class="sconteiner">
				<h2>A co Ty sądzisz?</h2>A jakie są Twoje ulubine książki? Co sądzisz o przedstawionych tu pozycjach?<h3>Podziel się z innymi swoją opinią!</h3>
				</div>
					<div class="sconteiner">
<?php
	$link_do_bd = @mysql_connect('localhost', 'root', '');

	if (!$link_do_bd) {

		die('Nie można się poł±czyć z baz± danych. Spróbuj jeszcze raz póĽniej <br>');

	}
	
	mysql_select_db('komentarze');

	$sql_zapytanie = "SELECT * FROM tabela1 ORDER BY numer_wpisu ASC"; 
  
	$sql_wynik_zapytania = mysql_query($sql_zapytanie);
  
	while ($wiersz = mysql_fetch_array($sql_wynik_zapytania)) {

	echo '<div class="sconteiner">' . $wiersz['opinia'] ;
	echo"</br>~";
	echo $wiersz['nick'] ;
	echo '</div>';
	
	}
	
	mysql_free_result($sql_wynik_zapytania);
	mysql_close();      
	
?>
					</div>
				<div class="edit">
				<form action="dodales_komentarz.php" method="post">
				Twoja opinia: 
				<input type="text" name="opinia" maxlength="100" size="30"/></br>
				Twój nick: 
				<input type="text" name="nick" maxlength="100" size="30"/></br>
						<input type="submit" value="Dodaj Opinie"/>	
				</form>
				</div>
				</div>
				<div id="stopka">Moje Ulubione Książki &copy 2017</div>
		</div>
	<script src="jquery-1.11.3.min.js"></script>
	<script>

	$(document).ready(function() {
	var NavY = $('#menu').offset().top;
	 
	var stickyMenu = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('#menu').addClass('sticky');
	} else {
		$('#menu').removeClass('sticky'); 
	}
	};
	 
	stickyMenu();
	 
	$(window).scroll(function() {
		stickyMenu();
	});
	});
	
	</script>

	</body>
	</html>