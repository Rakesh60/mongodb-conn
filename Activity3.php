<?php
//connecting to database
if($conn=new MongoDB\Driver\Manager("mongodb://localhost:27017"));
echo "Database Connected";

//creating document as array
$doc=array("_id"=>"127", "Name"=>"Jyotisana", "Age"=>"25", "Location"=>"India");

//creating write database object
$single_insert=new MongoDB\Driver\BulkWrite();
if($single_insert->insert($doc));

//preparing query statement for insert 
echo "<br>Document Insert Ready";
if($conn->executeBulkWrite("mydb.mycol", $single_insert));

 //executing write query 
echo "<br>Document Inserted";

?>