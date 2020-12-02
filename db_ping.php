<?php
    $json_string = file_get_contents("data.json");
    $row = json_decode($json_string,true);
    $IP = $row['network'];
    $ID = $row['user'];
    $PASSWORD = $row['password'];
    $DATABASE = $row['database'];
    $PORT = $row['port'];
    $ping = array();
    $conn = mysqli_connect($IP,$ID,$PASSWORD,$DATABASE,$PORT);
    $sql = "select datetime, ping from PING";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {
        array_push($ping, $row);
    }
    mysqli_close($conn);
?>