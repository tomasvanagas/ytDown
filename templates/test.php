<?php
//script('ytdownloader', 'script');
//style('ytdownloader', 'style');
?>


<?php
$url = htmlspecialchars($_GET["url"]);
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (preg_match('/^https{0,1}:\/\/www\.youtube\.com\/watch\?v=.*$/', $url) == 1) {
    echo "Yes. " . "<br>";
}
 echo "URL: " . htmlspecialchars($url) . "<br>"; 
 echo $actual_link . "<br>";
 
 ?>