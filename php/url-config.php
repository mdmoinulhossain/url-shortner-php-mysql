<?php 
include "config.php";
// let's get the value which are sending from js ajax

$full_url = mysqli_real_escape_string($conn, $_POST['fullUrl']);

if(!empty($full_url) && filter_var($full_url, FILTER_VALIDATE_URL)){

    $ran_url = substr(md5(microtime()), rand(0, 26), 5); //generating random 5 character url
    // checking random generated url is not existing or not
    $sql = mysqli_query($conn, "SELECT short_url FROM url WHERE short_url = '{$ran_url}'");

    if(mysqli_num_rows($sql) > 0) {
        echo "Something is wrong. Please Regenerate url Again!";
    } else {

    }
} else {
    echo "$full_url - This is Invalid URL";
}

?>