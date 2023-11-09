<!-- here we'll create a database and table and insert some values into our table. -->
<?php
// Create connection
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<script>alert('Connection failed')</script>";
} else {
    echo "<script>console.log('Connection established')</script>";
}

//creating database
$sql = "CREATE DATABASE IF NOT EXISTS academix";
if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Database created successfully')</script>";
} else {
    echo "<script>console.log('Error creating database: " . $conn->error . "')</script>";
}

//use database
$sql = "USE academix;";
if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Database selected successfully')</script>";
} else {
    echo "<scrip>console.log('Error selecting database: " . $conn->error . "')</script>";
}

//creating table
$sql = "CREATE TABLE STUDENTS(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    regno VARCHAR(30) NOT NULL,
    school VARCHAR(30) NOT NULL,
    cgpa DECIMAL(4,2) NOT NULL
);";
if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Table created successfully')</script>";
} else {
    echo "<script>console.log('Error creating table: " . $conn->error . "')</script>";
}

// Inserting multiple values into the table
$sql = "INSERT INTO STUDENTS(name, regno, school, cgpa) VALUES('ABHAY N','20BCE2326','SCOPE',8.5);";
$sql .= "INSERT INTO STUDENTS(name, regno, school, cgpa) VALUES('SURYAKANT A','20BBS0054','SCOPE',8.7);";
$sql .= "INSERT INTO STUDENTS(name, regno, school, cgpa) VALUES('ANCHITHA A G','20BME0944','SMEC',9.3);";
$sql .= "INSERT INTO STUDENTS(name, regno, school, cgpa) VALUES('SAMRIDDHI A','20BBS0171','SCOPE',8.83);";

if ($conn->multi_query($sql) === TRUE) {
    echo "<script>console.log('Values inserted successfully')</script>";
} else {
    echo "<script>console.log('Error inserting values: " . $conn->error . "')</script>";
}

echo ("<script>console.log('Connection closed')</script>");
?>