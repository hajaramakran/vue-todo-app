<?php
    include "configDb.php";

    $data = json_decode(file_get_contents("php://input"));

    $request = $data->request;

// Fetch All records
    if($request == 1){
    $userData = mysqli_query($connexion,"SELECT * from tasks order by id desc");
    $response = array();
    while($row = mysqli_fetch_assoc($userData)){
        $response[] = $row;
    }

    echo json_encode($response);
    exit;
    }

// Add record
    if($request == 2){
    $task = $data->task;
    $date = $data->date;
   

    //$userData = mysqli_query($connexion,"SELECT * FROM tasks WHERE task='".$task."'");
    
        mysqli_query($connexion,"INSERT INTO tasks(task, date) VALUES('".$task."','".$date."')");
        echo "Insert successfully";
    

    exit;
    }


?>