<?php
echo "hai";
$servername = "localhost";
$db = "newstemplate";
$username = "root";
$password = "Vonnue@1234#";
// create connection
$conn = mysqli_connect($servername,$db,$username, $password);
if(!$conn) {
    die('could not connect mysql:'.mysql_error());
}
?>