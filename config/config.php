<?php

    $conn = mysqli_connect('localhost', 'root', '', 'admin_credential');

    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

?>