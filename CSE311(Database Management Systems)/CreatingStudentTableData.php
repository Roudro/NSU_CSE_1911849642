<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO Student(snum,sname,major,level,age)
    VALUES
    (051135593,'Maria White','English','SR',21),
(060839453,'Charles Harris','Architecture','SR',22),
(099354543,'Susan Martin','Law','JR',20),
(112348546,'Joseph Thompson','Computer Science','SO',19),
(115987938,'Christopher Garcia','Computer Science','JR',20),
(132977562,'Angela Martinez','History','SR',20),
(269734834,'Thomas Robinson','Psychology','SO',18),
(280158572,'Margaret Clark','Animal Science','FR',18),
(301221823,'Juan Rodriguez','Psychology','JR',20),
(318548912,'Dorthy Lewis','Finance','FR',18),
(320874981,'Daniel Lee','Electrical Engineering','FR',17),
(322654189,'Lisa Walker','Computer Science','SO',17),
(348121549,'Paul Hall','Computer Science','JR',18),
(351565322,'Nancy Allen','Accounting','JR',19),
(451519864,'Mark Young','Finance','FR',18),
(455798411,'Luis Hernandez','Electrical Engineering','FR',17),
(462156489,'Donald King','Mechanical Engineering','SO',19),
(550156548,'George Wright','Education','SR',21),
(552455318,'Ana Lopez','Computer Engineering','SR',19),
(556784565,'Kenneth Hill','Civil Engineering','SR',21),
(567354612,'Karen Scott','Computer Engineering','FR',18),
(573284895,'Steven Green','Kinesiology','SO',19),
(574489456,'Betty Adams','Economics','JR',20),
(578875478,'Edward Baker','Veterinary Medicine','SR',21)";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>