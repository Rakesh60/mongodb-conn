<?php
//connection database
if($con=new MongoDB\Driver\Manager("mongodb://localhost:27017"));
    echo "Database connected";

//create object for write
$del =new MongoDB\Driver\BulkWrite();

//creating delete query
$del->delete(['Name'=>"John"],['limit'=>0]);

//executing delete query
if($con->executeBulkWrite("mydb.mycol",$del));
echo "<br> Document deleted";
?>