<?php

$server="localhost";
$username="root";
$password="root";
$db="multi-tech";

$conn=mysqli_connect($server,$username,$password,$db);

if(!conn)
{
    echo "Connection failed".mysqli_connect_error();

}
echo "Connection Sucessful";

?>
