<?php
    $json_string = file_get_contents("data.json");
    $row = json_decode($json_string,true);
    $IP = $row['network'];
    $ID = $row['user'];
    $PASSWORD = $row['password'];
    $DATABASE = $row['database'];
    $PORT = $row['port'];
    $conn = mysqli_connect($IP,$ID,$PASSWORD,$DATABASE,$PORT);
    $sql = "select server_count, member_count, channel_count, voice_channel_count, text_channel_count from DASHBOARD";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $guild_count = $row['server_count'];
    $member_count = $row['member_count'];
    $channel_count = $row['channel_count'];
    $voice_channel_count = $row['voice_channel_count'];
    $text_channel_count = $row['text_channel_count'];
    mysqli_close($conn);
?>