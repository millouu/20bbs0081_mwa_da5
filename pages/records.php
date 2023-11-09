<!DOCTYPE html>
<html>

<head>
    <title>Academix- Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    require './components/navbar.php'; // Include the navigation bar
    ?>

    <div class="container" style="margin-top: 50px;">
        <h2 style="margin-bottom: 30px;">🧑‍🎓 Student Records</h2>
        <?php
        // Create connection
        $conn = new mysqli("localhost", "root", "", "academix");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "<script>alert('Connection failed')</script>";
        } else {
            echo "<script>console.log('Connection established')</script>";
        }
        $sql = "SELECT * FROM STUDENTS ORDER BY NAME;";
        $result = $conn->query($sql);
        //display the rows in a 
        if ($result->num_rows > 0) {
            echo "<table class='table table-hover'>
            <thead class='thead-dark'>
                <tr>
                    <th scope='col'>Name</th>
                    <th scope='col'>Registration Number</th>
                    <th scope='col'>School</th>
                    <th scope='col'>CGPA</th>
                    <th scope='col'>Operations</th>
                </tr>
            </thead>
            <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["regno"] . "</td>
                    <td>" . $row["school"] . "</td>
                    <td>" . $row["cgpa"] . "</td>
                    <td>
                        <button class='btn btn-primary'><a style='text-decoration:none; color:white;' href='/da5/pages/functions/update.php?regno=" . $row["regno"] . "'>Update</a></button>
                        <button class='btn btn-danger'><a style='text-decoration:none; color:white;' href='/da5/pages/functions/delete.php?regno=" . $row["regno"] . "'>Delete</a></button>
                    </td>

                </tr>";
            }
            echo "</tbody>
            </table>";
        } else {
            //create a bootstrap alert saying No records to display!
            echo "<div class='alert alert-danger' role='alert'>
            No records to display!
            </div>";
        }

        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>