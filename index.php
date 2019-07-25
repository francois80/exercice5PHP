<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Exercice 5 PHP</title>
	</head>
	<body>
		<h1>Créer un tableau qui contient tous les mois de l'année.</h1>
			<?php
			$monthList = ['janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre',
			 									'novembre', 'décembre'];
			foreach ($monthList as $value) { ?>
				<p><?php echo $value; ?></p>
<?php }?>
	</body>
</html>
