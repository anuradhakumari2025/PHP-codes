<?php
//echo " welcome to the stage where we are ready to get connected to a database<br>";
/*ways to connect to a MySQL database
1. MYSQLi extension
2. PDO
*/
//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbanu";

//Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was successfull";
    echo "<br>";
}

/*Create a database
$sql  = "CREATE DATABASE dbanu3";
$result = mysqli_query($conn , $sql);

//Check for the database creation success
if($result){
    echo "The db was created successfully";
}
else{
    echo "The db was not created successfully because of this error --> " . mysqli_connect_error($conn);
}
*/

/*Create a table in db
$sql = "CREATE TABLE `table` (`Sno` INT(11) NOT NULL , `Name` VARCHAR(11) NOT NULL , `Age` INT(11) NOT NULL , `Gender` VARCHAR(11) NOT NULL )";
$result = mysqli_query($conn , $sql);

//Check for table creation success
if($result){
    echo "The table was created successfully";
}
else{
    echo "The table was not created successfully because of this error --> " . mysqli_error($conn);
}
*/

//Sql query to be executed
$sql = "INSERT INTO `table` (`Sno`, `Name`, `Age`, `Gender`) VALUES ('4', 'Akanksha', '20', 'Female')";
$result = mysqli_query($conn , $sql);

//Add a new record in table in the db
if($result){
    echo "The record has been inserted successfully";
}
else{
    echo "The record has not been inserted successfully because of this error --> " . mysqli_error($conn);
}
?>