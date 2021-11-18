<?php
//read
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

    //predefined
    //post is like a box
    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "UPDATE student_information SET name = '$name', email = '$email' WHERE id = $id;";

    $result = mysqli_query($conn, $sql);

    header ("Location: read.php");
?>