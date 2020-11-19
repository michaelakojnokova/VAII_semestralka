<?php


$conn = mysqli_connect('localhost','root','','vaii_database');

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}