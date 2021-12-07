<?php
 $servername = "localhost";
 $db = "newstemplate";
 $username = "root";
 $password = "Vonnue@1234#";
// connection
 $conn = mysqli_connect($servername,$username,$password,$db);
 if(!$conn) {
     echo "not connected";
 
 } 
 
 
// submiting values 
$ID =  $_POST['id'];
$IMAGE = $_POST['image'];
$DESCRIPTION =  $_POST['description'];
$TITLE = $_POST['title'];

$sql = "INSERT INTO NEWS (ID, IMAGE, DESCRIPTION, TITLE)  VALUES ('1','2','3','4')";
IF (mysqli_query($conn,$sql)) {
    echo "Recordes added successfully";
} else {
    echo "Not inserted";
}
    $conn->close();      
?>
 