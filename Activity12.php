<?php
if($con=new MongoDB\Driver\Manager("mongodb://localhost:27017"));
    echo "Database connected";

    $filter=['Lab'=>'Mongodb','End_Date'=>2021];
    $option=[];
    $read=new MongoDB\Driver\Query($filter,$option);
    $single_user=$con->executeQuery("Nsti.nstidetail",$read);
    echo "<table border=2 cellspacing=5 cellpadding=8><thead><th>ID<th>Name<th>Course<th>Lab<th>Start_Date<th>End_Date</th><thead>";

    foreach($single_user as $user){
        echo "<tr>";
        echo "<td>".$user->id."<td>".$user->Name."<td>".$user->Course."<td>".$user->Lab."<td>".$user->Start_Date."<td>".$user->End_Date."</td>";
    }
    echo "</table>";
?>