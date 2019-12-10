<?php

require '../config/connect.php';

$response = array();

$sql = "SELECT product.*, users.name FROM product product left JOIN users users on product.idUsers = users.id";
$query = mysqli_query($con, $sql);

while ($product = mysqli_fetch_array($query)) {
    # code...
    $data['id'] = $product['id'];
    $data['namaProduct'] = $product['namaProduct'];
    $data['qty'] = $product['qty'];
    $data['harga'] = $product['harga'];
    $data['created_at'] = $product['created_at'];
    $data['idUsers'] = $product['idUsers'];
    $data['name'] = $product['name'];
    $data['image'] = $product['image'];
    $data['releasepro'] = $product['releasepro'];

    array_push($response, $data);
}

echo json_encode($response);
?>