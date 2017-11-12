<?php 
require_once 'vendor/autoload.php';


class Transports
{
	
	function __construct()
	{
		$this->vehicule = true;
		$this->capacite = 5;
	}
}

class Bus extends Transports
{
	
	function __construct($passagers)
	{
		$this->passagers = $passagers;
		$this->capacite = 50;
	}
}

$benz = new Bus(7);
dump_r($benz);

$transports = ['Bus', 'Voiture', 'Tram', 'Vélo', 'A Pied'];
dump_r($transports);

$json = json_encode($transports);
dump_r($json);

$base64 = base64_encode($json);
dump_r($base64);

$entier = 50005520;
dump_r($entier);

$float = 5254832515.215841;
dump_r($float);

$now = time();
dump_r($now);


 ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	</head>
	<body>
		<h1 class="text-center">Hello World</h1>
		<script src="//code.jquery.com/jquery.js"></script>

		<!-- jQuery -->

	</body>
</html>