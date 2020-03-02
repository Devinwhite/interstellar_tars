<?php
	header('Content-Type: application/json');
    //sudo git clean -f -d;
    $output = shell_exec('sudo git reset --hard origin/master; sudo git pull');
    $response = array( 
        "response"=>$output); 

    echo json_encode($response);
?>