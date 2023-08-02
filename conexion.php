<?php 
    /* You should enable error reporting for mysqli before attempting to make a connection */
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'seguridad2');

    /* Set the desired charset after establishing a connection */
    $mysqli->set_charset('utf8mb4');
?>