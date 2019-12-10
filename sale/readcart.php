<?php

require '../config/connect.php';

$idUsers = $_GET['idUsers'];
$response = array();

$sql = "SELECT COUNT(*) jumlah FROM `chart` WHERE idUsers = '$idUsers'";
$query = mysqli_query($con, $sql);

while ($product = mysqli_fetch_array($query)) {
    # code...
    $data['jumlah'] = $product['jumlah'];
    
    array_push($response, $data);
}

echo json_encode($response);
?>