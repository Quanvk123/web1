<?php
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $user_password = $_POST ['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "thuchanh";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO thanhvien (name, email, password)
    VALUES ('$name', '$email', '$user_password ')";

    if ($conn->query($sql) === TRUE) {
        echo "Đăng nhập thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>