<?php
session_start();

$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='covid-19';
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$conn)
{
    echo mysqli_error($conn) or die("connection failed.");
}

?>