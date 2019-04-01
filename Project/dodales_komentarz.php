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
					<div class="hcbutton"><a href="index.html"</a>Strona Główna</div>
					<div class="hcbutton"><a href="spis_ksiazek.html"</a>Spis książek</div>
					<div class="hcbutton"><a href="komentarze.php"<a/>A co Ty sądzisz?</div>
					<div class="hcbutton"><a href="O_mnie.html"</a>O mnie</div>
					<div style="clear:both"></div>
				</div>
				<div id="content" style="background-color:white; margin-bottom:0px; height:150px">
				
<?php

		$opinia=$_POST['opinia'];
		$nick = $_POST['nick'];

	if (!$opinia || !$nick) {
  
		echo '<h2>Któreś z pól zostawiłeś puste!<br>'
          .'Popraw to!</h2>';
  
	} else {
				echo '<h2>Twój komentarz został dodany!</h2></br>Jeżeli chcesz go zobaczyć wróc do sekcji "A co Ty sądzisz?"';
	
		$link_do_bd = @mysql_connect('localhost', 'root');

		if (!$link_do_bd) {

			die('Nie można się poł±czyć z baz± danych. Spróbuj jeszcze raz póĽniej <br>');
	
		}

		mysql_select_db('komentarze');
	
		$sql_zapytanie = "INSERT tabela1 (opinia, nick) VALUES ('$opinia', '$nick')"; 
  
		$sql_wynik_zapytania = mysql_query($sql_zapytanie);
 
	}
	
?>
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