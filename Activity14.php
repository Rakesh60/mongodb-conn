<?php
if($con=new MongoDB\Driver\Manager("mongodb://localhost:27017"));
    echo "Database connected";

$filter=[];
$option=['sort'=>['Lab'=>1]];
$read=new MongoDB\Driver\Query($filter, $option);
$single_user=$con->executeQuery("Nsti.nstidetail",$read);
echo "<table border=3 cellspacing=5 cellpadding=7><thead><th>ID</th><th>Name</th><th>Course</th><th>Lab</th><th>Start_Date</th><th>End_Date</th></thead>";
foreach($single_user as $user){
    echo "<tr>";
   echo 
   "<td>".$user->id."<td>".$user->Name."<td>".$user->Course."<td>".$user->Lab."<td>".$user->Start_Date."<td>".$user->End_Date."</td>";

}
echo "</table>";
?>