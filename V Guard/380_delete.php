<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "neelesh@123";
    $database = "v_guard";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM emission_380 WHERE id=$id";
    $connection->query($sql);
}

header("location: 380.php");
exit;

?>