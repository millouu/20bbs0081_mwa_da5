<!DOCTYPE html>
<html>

<head>
    <title>Academix- Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    require './components/navbar.php'; // Include the navigation bar
    ?>

    <div class="container" style="margin-top: 50px;">
    <h2 style="margin-bottom: 30px;">🏫 Register Here</h2>
        <form >
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="studentName" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Registration Number</label>
                <input type="text" class="form-control" name="regno" placeholder="Enter Registration Number">
            </div>
            <div class="form-group">
                <label>Select School</label>
                <select class="form-control" name="school">
                    <option>SCOPE</option>
                    <option>SCORE</option>
                    <option>SCHEME</option>
                    <option>SELECT</option>
                    <option>SMEC</option>
                </select>
            </div>
            <div class="form-group">
                <label>CGPA</label>
                <input type="number" class="form-control" name="cgpa" placeholder="Enter CGPA">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>