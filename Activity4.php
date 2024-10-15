<?php
//connecting database
if($conn=new MongoDB\Driver\Manager("mongodb://localhost:27017"));
    echo "Database is connected";

//creating write for update 
$single_update=new MongoDB\Driver\BulkWrite();

//creating query for update
$single_update->update(["_id"=>"124"],["Name"=>"Priyanka","Age"=>"21"],["multi"=>false,"upsert"=>false]);

//executing query for update
if($conn->executeBulkWrite("mydb.mycol",$single_update));
echo "<br>Document Update";


?>