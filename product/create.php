<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    # code...
    $response = array();
    $namaProduct = $_POST['namaProduct'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $idUsers = $_POST['idUsers'];
    $releasepro = $_POST['releasepro'];
    
    $image = date('dmYHis').str_replace(" ","", basename($_FILES['image']['name']));
    $imagePath = "../upload/".$image;
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $create = "INSERT INTO product VALUES(NULL, '$namaProduct', '$qty', '$harga', '$releasepro','$image',NOW(), '$idUsers')";
    if (mysqli_query($con, $create)) {
        # code...
        $response['value'] = 1;
        $response['message'] = "Berhasil ditambahkan";
        echo json_encode($response);
    } else {
        # code...
        $response['value'] = 0;
        $response['message'] = "Gagal ditambahkan";
        echo json_encode($response);
    }
    
}

?>