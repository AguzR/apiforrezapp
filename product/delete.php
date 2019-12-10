<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    # code...
    $response = array();
    $idProduct = $_POST['idProduct'];

    $delete = "DELETE FROM product WHERE id='$idProduct'";

    if (mysqli_query($con, $delete)) {
        # code...
        $response['value'] = 1;
        $response['message'] = "Data terhapus";
        echo json_encode($response);
    } else {
        # code...
        $response['value'] = 1;
        $response['message'] = "Data terhapus";
        echo json_encode($response);
    }
    
}

?>