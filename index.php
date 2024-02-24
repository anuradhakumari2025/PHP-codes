<?php
echo " welcome to the stage where we are ready to get connected to a database<br>";
/*ways to connect to a MySQL database
1. MYSQLi extension
2. PDO
*/
//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername,$username,$password);

//Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was successfull";
    echo "<br>";
}

//Create a database
$sql  = "CREATE DATABASE dbanu4";
$result = mysqli_query($conn , $sql);

//Check for the database creation success
if($result){
    echo "The db was created successfully";
}
else{
    echo "The db was not created successfully because of this error --> " . mysqli_error($conn);
}
?>