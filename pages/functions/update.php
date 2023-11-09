<?php
// Create connection
$conn=new mysqli("localhost","root","","academix");
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
    echo "<script>alert('Connection failed')</script>";
}
else{
    echo "<script>console.log('Connection established')</script>";
}

//create a function to convert string to uppercase
function toUpper($str){
    return strtoupper($str);
}

//getting values from the form and pass through toUpper function
$name=toUpper($_POST["studentName"]);
$regno=toUpper($_POST["regno"]);
$school=toUpper($_POST["school"]);
$cgpa=$_POST["cgpa"];

//inserting values into the table
$sql="UPDATE STUDENTS SET name='$name',school='$school',cgpa=$cgpa WHERE regno='$regno';";
if($conn->query($sql)===TRUE){
    echo "<script>alert('Record updated successfully')</script>";
    //on pressing okay in the alert redirect to home.php
    echo "<script>window.location.href='/da5/pages/records.php'</script>";
    // header("Location: /da5/pages/home.php");
}
else{
    echo "<script>alert('Error updating values: ".$conn->error."')</script>";
}
