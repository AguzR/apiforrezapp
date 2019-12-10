<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    # code...
    $response = array();
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];

    $cek = "SELECT * FROM users WHERE username='$username' ";
    $result = mysqli_fetch_array(mysqli_query($con, $cek));
    
    if (isset($result)) {
        # code...
        $response['value'] = 2;
        $response['message'] = "Username already used";
        echo json_encode($response);
    } else {
        # code...
        $query = "INSERT INTO users VALUES(NULL, '$username', '$password', '1', '$name', '1', Now())";

        if (mysqli_query($con, $query)) {
            # code...
            $response['value'] = 1;
            $response['message'] = "Register Success";
            echo json_encode($response);
        } else {
            # code...
            $response['value'] = 0;
            $response['message'] = "Register Failed";
            echo json_encode($response);
        }
    }
}

?>