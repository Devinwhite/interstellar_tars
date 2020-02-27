<?php
	header('Content-Type: application/json');
    
    $output = shell_exec('git reset --hard origin/master');
    
    echo json_encode($output);
?>