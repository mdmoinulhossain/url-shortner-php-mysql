<?php

$conn = mysqli_connect("localhost", "root", "", "urlshortener");

if(!$conn) {
    echo "Database Connection ERROR!".mysqli_connect_error();
}


?>