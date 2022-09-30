<?php
require_once("db.php");
if (!empty($_REQUEST['did'])) {
        $id = $_REQUEST['did'];
        $query = "delete from student where id=$id";
        $result = $pdo_conn->prepare($query);
        $result->execute();
        if ($result) {
            echo "Record deleted";
        }
    }
?>