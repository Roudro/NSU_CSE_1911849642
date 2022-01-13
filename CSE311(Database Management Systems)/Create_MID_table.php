<?php

$link = mysqli_connect('localhost','root','','cse311_mid');


$sql = "CREATE TABLE SOMETHING(
    Some_id INT(6) PRIMARY KEY,
    Some_name VARCHAR(60),
    Some_manId INT(4)
)";


mysqli_query($link,$sql);

mysqli_close($link);


?>