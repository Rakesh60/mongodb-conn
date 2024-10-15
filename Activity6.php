<?php
//connection to database
if($conn=new MongoDB\Driver\Manager("mongodb://localhost:27017"));
    echo "database connected";

$filter=['Name'=>'Priyanka'];
$option =[];
$read=new MongoDB\Driver\Query($filter,$option);
$single_user=$conn->executeQuery("mydb.mycol",$read);
foreach($single_user as $user){
echo "<br>".$user->Name." is ".$user->Age." year old";

}
?>