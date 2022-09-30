<?php
require_once("db.php");
if (isset($_REQUEST['eid'])) {
        $id = $_REQUEST['eid'];
        $name = $_REQUEST['name'];
        $marks = $_REQUEST['marks'];
        $query = "update student set name='$name',marks='$marks' where id=$id";
        $result = $pdo_conn->prepare($query);
        $result->execute();
        if ($result) {
            echo "Record updated";
        }
        else{
        	echo "Not Updated";
        }
    }