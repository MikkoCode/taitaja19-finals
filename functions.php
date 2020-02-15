<?php

function OpenCon()
 {
	 $conn = new mysqli($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbpass']) or die("Connect failed: %s\n". $conn -> error);
	 return $conn;
 }

function GetAllRows($conn,$table){

$result = mysqli_query($conn, "select * from test");
while ($row = mysqli_fetch_assoc($result))
   {
      printf ("%s\n", $row['id']);
      printf ("%s\n", $row['test']);
   }

}
 
function CloseCon($conn)
 {
	 $conn -> close();
 }
   
?>