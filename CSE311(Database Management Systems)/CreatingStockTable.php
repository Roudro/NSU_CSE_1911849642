<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Stock(
    sid INT(9) NOT NULL PRIMARY KEY,
    pid INT(9) NOT NULL FOREIGN KEY,
    cost INT(10)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

$sql = "INSERT INTO Stock(
    sid,
    pid,
    cost)
    VALUES
    (1,3,0.50),
(1,4,0.50),
(1,8,11.70),
(2,3,0.55),
(2,8,7.95),
(2,1,16.50),
(3,8,12.50),
(3,9,1.00),
(4,5,2.20),
(4,6,1247548.23),
(4,7,1247548.23)";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>