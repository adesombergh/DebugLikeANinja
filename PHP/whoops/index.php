<?php 
require_once 'vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

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
	
	function __construct()
	{
		$this->capacite = 50;
	}
}

$benz = new Bus();

$tansports = ['Bus', 'Voiture', 'Tram', 'Vélo', 'A Pied'];

$chiffre = 50005520;

$float = 5254832515.215841;





// $whoops = new Whoops\Run();
// // Configure the PrettyPageHandler:
// $errorPage = new Whoops\Handler\PrettyPageHandler();
 
// $errorPage->setPageTitle("It's broken!"); // Set the page's title
// $errorPage->setEditor("sublime");         // Set the editor used for the "Open" link
// $errorPage->addDataTable("Extra Info", array(
//       "stuff"     => 123,
//       "foo"       => "bar",
//       "useful-id" => "baloney"
// ));
 
// $whoops->pushHandler($errorPage);
// $whoops->register();
 
// throw new RuntimeException("Oopsie!");

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
		<?php echo $zander; ?>
		<!-- jQuery -->

	</body>
</html>