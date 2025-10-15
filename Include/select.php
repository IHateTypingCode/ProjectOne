<?php
$sql_s = "SELECT * FROM users ORDER BY RAND() LIMIT 1";

$result = mysqli_query($conn, $sql_s);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>