<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
    header('Content-Type: application/json');
    echo "Testing";

    require_once('connection.php');

    $conn = new DbConnect();
    $db = $conn->connect();
    
    $sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";
    $stmt = $db->prepare($sql);

    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

echo json_encode($data);
?>



<?php

$externalCode = exec("zip -r compress.zip .");

echo "<pre>";print_r($externalCode);

$externalCode = exec("ls -alh");

echo "<pre>";print_r($externalCode);



