<?php
//read
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

    //post is like a box
    $name = $_POST["name"];
    $email = $_POST["email"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT student_information(name, email) VALUES('$name', '$email')";

    $result = mysqli_query($conn, $sql);

    
?>