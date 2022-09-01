<?php


print_r($_POST);
// $name = $_POST['nm'];
// $battery =$_POST['btry'];
// $heart=$_POST['hrt'];


//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

//feedback from web bluetooth api
$name = "Infinix pro ";
$battery = 33;
$heart=22;


// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("<br>Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "<br>Connection was successful<br>";
}





// Create a db
$sql = "CREATE DATABASE test3";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<br>The db was created successfully!<br>";
}
else{
    echo "<br>The db was not created successfully because of this error ---> ". mysqli_error($conn);
}





//creating table
$database = "test3";
$conn = mysqli_connect($servername, $username, $password,$database);
// Create a table in the db (Here Table Name is DATA )
$sql = "CREATE TABLE `DATA` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "<br>The table was created successfully!<br>";
}
else{
    echo "<br>The table was not created successfully because of this error ---> ". mysqli_error($conn);
}




//inserting data

// Sql query to be executed
$sql = "INSERT INTO `data` (`Device No`, `Device Name`, `Battery Level`, `Heart Rate`) VALUES (NULL, '$name', '$battery', '$heart')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "<br>The record has been inserted successfully successfully!<br>";
}
else{
    echo "<br>The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}



?>


