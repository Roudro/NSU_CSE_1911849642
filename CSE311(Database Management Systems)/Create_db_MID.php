<?php


$link = mysqli_connect('localhost','root','');


$sql = "CREATE DATABASE Something";


mysqli_query($link,$sql);

mysqli_close($link);


?>