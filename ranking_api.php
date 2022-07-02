<?php
header('Content-Type:Application/json');
$ranking = array(
    array("Name"=>"Kenny Lam" , "Duration"=>104),   
    array("Name"=>"Peter Kwong" , "Duration"=>25),
    array("Name"=>"John Chan" , "Duration"=>38),
    array("Name"=>"Johnny Kwong" , "Duration"=>117),
    array("Name"=>"Mary Lam" , "Duration"=>23),
    array("Name"=>"David Wong" , "Duration"=>49),
    array("Name"=>"Alan Ma" , "Duration"=>18),
    array("Name"=>"Carrie Lam" , "Duration"=>68),
    array("Name"=>"Chris Lam" , "Duration"=>93),
    array("Name"=>"Mary Cheung" , "Duration"=>78)
    );
echo json_encode($ranking);
?>