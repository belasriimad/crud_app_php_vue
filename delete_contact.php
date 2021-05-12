<?php

require './database/connection.php';

$id = ($_GET['id'] !== null) ? $_GET['id'] : false;


// Delete contact
$query = "DELETE FROM contacts WHERE id ='$id' LIMIT 1";

if (mysqli_query($con, $query)) {
    $message = [
        "deleted" => true
    ];
    echo json_encode($message);
}