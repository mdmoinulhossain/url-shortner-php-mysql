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
        // Insert user typed url into table with short url
        $sql2 = mysqli_query($conn, "INSERT INTO url (short_url, full_url, clicks)
                                    VALUES ('{$ran_url}', '{$full_url}', '0')");

        if($sql2){ // If inserted data successfully

            // selecting recently inserted short links            
            $sql3 = mysqli_query($conn, "SELECT short_url FROM url WHERE short_url = '{$ran_url}'");

            if(mysqli_num_rows($sql3) > 0){
                $shortener_url = mysqli_fetch_assoc($sql3);
                echo $shortener_url['short_url'];
            }
        } else {
            echo "Something is wrong";
        }
    }
} else {
    echo "$full_url - This is Invalid URL";
}

?>