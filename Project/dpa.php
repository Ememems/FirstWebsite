<!DOCTYPE HTML>	
<html lang="pl">
	<head>
	<link rel="stylesheet" href="style1.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Moja Strona</title>
	<meta charset=utf-8" />
	<meta name="description" content="Oto strona z moimi ulubionymi książkami!"/>
	<meta name="keywords" content="książki, fanstastyka, fantastyka naukowa, najlepsze książki Sci-Fi"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	</head>
	<body>
		<div id="conteiner">
			<div id="head"><h1>Moje Ulubione Książki</h1></div>
				<div id="menu">
					<div class="hcbutton"><a href="index.html"</a>Strona Główna</div>
					<div class="hcbutton"><a href="spis_ksiazek.html"</a>Spis książek</div>
					<div class="hcbutton"><a href="komentarze.php"<a/>A co Ty sądzisz?</div>
					<div class="hcbutton"><a href="O_mnie.html"</a>O mnie</div>
					<div style="clear:both"></div>
				</div>
				<div id="content" >
				<div class="sconteiner">
				<h2>A co Ty sądzisz?</h2>A jakie są Twoje ulubine książki? Co sądzisz o przedstawionych tu pozycjach?<h3>Podziel się z innymi swoją opinią!</h3>
				</div>
					<div class="sconteiner">
				<?php
	
  
	// -------------------------------------------------------------
	// Poł±czenie z serwerem baz danych MySQL
	// -------------------------------------------------------------
	
	$link_do_bd = @mysql_connect('localhost', 'root', '');

	if (!$link_do_bd) {
	
	  // Komunikat w przypadku gdy poł±czenie się nie powiodło
		die('Nie można się poł±czyć z baz± danych. Spróbuj jeszcze raz póĽniej <br>');
	
	}
	
	// -------------------------------------------------------------
	// Wybranie odpowiedniej bazy na serwerze baz danych MySQL
	// -------------------------------------------------------------
	
	mysql_select_db('komentarze');
	  
	// -------------------------------------------------------------
	// Wstawienie wporwadzonych przez użytkownika danych do odpowiedniej
	// tabeli w bazie danych MySQL
	// -------------------------------------------------------------
	
	// Zapytanie w SQL umieszczaj±ce w tabeli1 dane wprowadzone przez użytkownika
	
	$sql_zapytanie = "SELECT * FROM tabela1 ORDER BY numer_wpisu ASC"; 
  
	$sql_wynik_zapytania = mysql_query($sql_zapytanie);
  
	while ($wiersz = mysql_fetch_array($sql_wynik_zapytania)) {
	
	echo "<tr>";
	echo "<td>" . $wiersz['numer_wpisu'] . "</td>";
	echo "<td>" . $wiersz['opinia'] . "</td>";
	echo "<td>" . $wiersz['nick'] . "</td>";	
	echo "</tr>";
	
	}
	
	mysql_free_result($sql_wynik_zapytania);
	mysql_close();      
	
?>
					</div>
				<form action="dodales_komentarz.php" method="post">

    <table border="0">
      <tr><td>Imię : </td><td> <input type="text" name="imie" maxlength="60" size="30"><br /></td></tr>
      <tr><td>Nazwisko : </td><td> <input type="text" name="nazwisko" maxlength="30" size="30"><br /></td></tr>
      <tr><td colspan="2"><input type="submit" value="Dodaj"></td></tr>
    </table> 
  </form>
				<div id="stopka">Moje Ulubione Książki &copy 2017</div>
		</div>

	</body>
	</html>