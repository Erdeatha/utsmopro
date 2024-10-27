<?php 
    require_once('helper.php');

    $query ="Select * from coffee_list_data";
    $sql = mysqli_query($db_connect, $query);

    if($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)) {
            $result[] = array(
            "coffee_id" => $row['coffee_id'],
            "coffee_title" => $row['coffee_title'],
            "coffee_detail" => $row['coffee_detail'],
            "coffee_poster" => $row['coffee_poster']
            );
        }
        echo json_encode($result);
    }
?>