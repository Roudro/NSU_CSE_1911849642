<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Provider(
    sid INT(9) NOT NULL PRIMARY KEY,
    sname VARCHAR(30),
    address VARCHAR(40)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

$sql = "INSERT INTO Provider(
    sid,
    sname,
    address)
    VALUES
    (1,'Acme Widget Suppliers','1 Grub St.,Potemkin Village, IL 61801'),
(2,'Big Red Tool and Die','4 My Way, Bermuda Shorts, OR 90305'),
(3,'Perfunctory Parts','99999 Short Pier, Terra Del Fuego, TX 41299'),
(4,'Alien Aircaft Inc.','2 Groom Lake, Rachel, NV 51902')";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>