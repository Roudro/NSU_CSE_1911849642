<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Student(
    snum DECIMAL(9.0) NOT NULL PRIMARY KEY,
    sname VARCHAR(30),
    major VARCHAR(25),
    level VARCHAR(2),
    age DECIMAL(3.0)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>