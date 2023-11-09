<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "academix");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<script>alert('Connection failed')</script>";
} else {
    echo "<script>console.log('Connection established')</script>";
}

if (isset($_GET['regno'])) {
    $regno = $_GET['regno'];
    $sql = "DELETE FROM STUDENTS WHERE regno='$regno';";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student record deleted succesfully!')</script>";
        //on pressing okay in the alert redirect to home.php
        echo "<script>window.location.href='/da5/pages/records.php'</script>";
        // header("Location: /da5/pages/home.php");
    } else {
        echo "<script>alert('Error deleting values: " . $conn->error . "')</script>";
    }
}
