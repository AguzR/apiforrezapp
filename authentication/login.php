<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    # code...
    $response = array();
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek = "SELECT * FROM users WHERE username='$username' and password='$password' ";
    $result = mysqli_fetch_array(mysqli_query($con, $cek));

    if (isset($result)) {
        # code...
        $response['value'] = 1;
        $response['message'] = "Login Success";
        $response['username'] = $result['username'];
        $response['name'] = $result['name'];
        $response['id'] = $result['id'];
        $response['level'] = $result['level'];
        echo json_encode($response);
    } else {
        # code...
        $response['value'] = 0;
        $response['message'] = "Login Failed";
        echo json_encode($response);
    }
}

?>