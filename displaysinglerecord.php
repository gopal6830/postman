<?php
require_once("db.php");
?>
<?php
if (isset($_REQUEST['didd'])) {
    $id = $_REQUEST['didd'];
    $query = "select * from student where id=$id";
    $result = $pdo_conn->prepare($query);
    $result->execute();
    $row = $result->fetchAll();
    foreach ($row as $data) {
        print_r($data);
    }
}
?>
