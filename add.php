<?php
require_once("db.php");
if ((isset($_REQUEST['name']) && (isset($_REQUEST['marks'])))) {
	$name = $_REQUEST['name'];
	$marks = $_REQUEST['marks'];
	$sql = "INSERT INTO student(name, marks) VALUES('$name', $marks)";
	$pdo_conn->exec($sql);
	if($pdo_conn)
	{
		echo "Record Inserted";
	}
	else{
		echo "not";
	}
}
?>
