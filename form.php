<?php

// submiting values 
$ID =  $_REQUEST['id'];
$IMAGE = $_REQUEST['image'];
$DESCRIPTION =  $_REQUEST['description'];
$TITLE = $_REQUEST['title'];


$sql = "INSERT INTO college  VALUES ('$ID', 
            '$IMAGE','$DESCRIPTION','$TITLE')";
          






?>