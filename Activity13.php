<?php
if($con=new MongoDB\Driver\Manager("mongodb://localhost:27017"));
    echo "Database connected"."<br><br>";

    $filter=[];
    $option=[];
    $ibm=0; //counter for Ibm course
    $adit=0; //counter for EF course
    $read=new MongoDB\Driver\Query($filter,$option);

    $single_user=$con->executeQuery("Nsti.nstidetail",$read);
    foreach($single_user as $user){
        if($user->Course=='IBM')
        $ibm++; //counter update if course is PHP
        else $adit++; //counter update if course is EF
    }
    if($ibm>$adit)
    echo('Maximum Trainees attended course IBM');
    else echo('Maximum Trainees attended course Adit');
?>