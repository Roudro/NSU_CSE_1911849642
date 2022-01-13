<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Goodies(
    pid INT(9) NOT NULL PRIMARY KEY,
    pname VARCHAR(40),
    color VARCHAR(15)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

$sql = "INSERT INTO Goodies(
    pid,
    pname,
    color)
    VALUES
    (1,'Left Handed Bacon Stretcher Cover','Red'),
(2,'Smoke Shifter End','Black'),
(3,'Acme Widget Washer','Red'),
(4,'Acme Widget Washer','Silver'),
(5,'I Brake for Crop Circles Sticker','Translucent'),
(6,'Anti-Gravity Turbine Generator','Cyan'),
(7,'Anti-Gravity Turbine Generator','Magenta'),
(8,'Fire Hydrant Cap','Red'),
(9,'7 Segment Display','Green')";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>