<?php
    $ping = array();
    $conn = mysqli_connect($IP,$ID,$PASSWORD,$DATABASE,$PORT);
    $sql = "select datetime, ping from PING";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {
        array_push($ping, $row);
    }
    mysqli_close($conn);
?>