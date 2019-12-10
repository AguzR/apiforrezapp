<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    # code...
    $response = array();
    $namaProduct = $_POST['namaProduct'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $idProduct = $_POST['idProduct'];
    $releasepro = $_POST['releasepro'];

    // $image = date('dmYHis').str_replace(" ", "", basename($_FILES(['image']['name'])));
    // $imagePath = "../upload/".$image;
    // move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $update = "UPDATE product SET namaProduct='$namaProduct', qty='$qty', harga='$harga', releasepro='$releasepro' WHERE id='$idProduct'";
    if (mysqli_query($con, $update)) {
        # code...
        $response['value'] = 1;
        $response['message'] = "Update Successfully";
        echo json_encode($response);
    } else {
        # code...
        $response['value'] = 0;
        $response['message'] = "Update Failed";
        echo json_encode($response);
    }
    
}

?>