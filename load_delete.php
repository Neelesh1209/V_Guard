<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "debian-sys-maint";
    $password = "jfXNcikwy19a0moq";
    $database = "v_guard";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM load1 WHERE id=$id";
    $connection->query($sql);
}

header("location: load.php");
exit;

?>