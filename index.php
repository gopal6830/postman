<?php
require_once("db.php");
?>
<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM student");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
	json_encode($result);
	print_r($result);
?>

