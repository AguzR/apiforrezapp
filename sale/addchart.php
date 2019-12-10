<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    # code...
    $response = array();
    $idUsers = $_POST['idUsers'];
    $idProduct = $_POST['idProduct'];
    $harga = $_POST['harga'];

    $insert = "INSERT INTO chart VALUES(NULL, '$idUsers', '$idProduct', '1', '$harga', NOW())";

    if (mysqli_query($con, $insert)) {
        # code...
        $response['value'] = 1;
        $response['message'] = "Add Chart - Success";
        echo json_encode($response);
    } else {
        # code...
        $response['value'] = 0;
        $response['message'] = "Add Chart - Failed";
        echo json_encode($response);
    }
    
}

?>