<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO Course(snum,cname)
    VALUES
    (112348546,'Database Systems'),
(115987938,'Database Systems'),
(348121549,'Database Systems'),
(322654189,'Database Systems'),
(552455317,'Database Systems'),
(455798412,'Operating System Design'),
(567354613,'Operating System Design'),
(112348545,'Operating System Design'),
(115987937,'Operating System Design'),
(322654188,'Operating System Design'),
(567354612,'Data Structures'),
(552455318,'Communication Networks'),
(455798411,'Optical Electronics'),
(301221822,'Perception'),
(301221823,'Social Cognition'),
(301221821,'American Political Parties'),
(556784565,'Air Quality Engineering'),
(099354543,'Patent Law'),
(574489456,'Urban Economics')";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>