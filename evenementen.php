<?php 
	require "php/function.php";

	$pdo = connect();
	

	$events = makeQuery($pdo, "SELECT evenementen.evenement_id, evenementen.datum, evenementen.beschrijving, locaties.gebouw, locaties.plaatsnaam, evenementen.max_bezoekers, artiesten.naam, artiesten.statement
		FROM evenementen
		LEFT JOIN locaties
		ON evenementen.locatie_id = locaties.locatie_id
		LEFT JOIN artiesten
		ON evenementen.artiest_id = artiesten.artiest_id
		WHERE evenementen.evenement_id = '{$_GET['evenement']}'");
 ?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="language" constent="NL">
		<meta name="description" constent="events">
		<meta name="author" constent="Samsor Wiar">
		<meta name="keywords" constent="Evenementen">
		<title>Evenementen</title>
		<link rel="stylesheet" type="text/css" href="../css/event-id.css">
	</head>
	<body>
		<main>
			<?php foreach ($events as $event) {//begin foreacht ?>
				<section class="flip-box-front">
					<img class="foto" src="../img/<?= $event['gebouw']; ?>.png" alt="evenementen plaats  ">
					<ul class="datum">
						<li>Datum: <?= $event['datum']; ?></li>
						<li>plaatsnaam: <?= $event['plaatsnaam']; ?></li>
						<li>Gebouw: <?= $event['gebouw']; ?></li>
						<li>Aantal max bezoekers: <?= $event['max_bezoekers']; ?></li>
					</ul>

				</section>
				<section class="event">
					<article class="beschrijving">
						<h1>Evenement beschrijving</h1>

						<p><?= $event['beschrijving']; ?></p>
						<p><?= $event['beschrijving']; ?></p>
					</article>

					<article class="artiesten">
						<h1>Aanwezige artiesten</h1>
						<p>Voornaam: <?= $event['naam']; ?></p>
						<p>Artiest statement: "<?= $event['statement']; ?>"</p>
					</article>
				</section>
				<?php } ?>
			</main>

	
	</body>
</html>
