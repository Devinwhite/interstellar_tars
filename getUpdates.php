<?php
	header('Content-Type: application/json');

    $output = shell_exec('sudo git reset --hard origin/master; sudo git clean -f -d');
    $response = array( 
        "response"=>$output); 

    echo json_encode($response);
?>