<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

     require_once 'connect.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $password = password_hash($password, PASSWORD_DEFAULT);


     $sql = "INSERT INTO user (nama, email, password) VALUES ('$nama','$email','$password')";

    if ( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>