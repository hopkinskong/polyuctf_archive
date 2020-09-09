<?php

$secret = "PUCTF{e2561f735bba70dcfa7260235199212c}";

$url = $_SERVER["REQUEST_URI"];

if(isset($_GET["secret_flag"])){
    if (strpos($url, 'secret_flag') === false && isset($_GET['secret_flag'])) {
        echo "Congra: " . $secret;
    }else{
        echo "secret_flag is not allowed";
    }
}else{
    echo "Please provide your secret_flag";
}
?>

