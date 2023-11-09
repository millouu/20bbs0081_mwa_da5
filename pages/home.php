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
        <form action="/da5/pages/functions/submit.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="studentName">Name*</label>
                <input type="text" class="form-control" name="studentName" id="studentName" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="regno">Registration Number*</label>
                <input type="text" class="form-control" name="regno" id="regno" placeholder="Enter Registration Number">
            </div>
            <div class="form-group">
                <label for="school">Select School*</label>
                <select class="form-control" name="school" id="school">
                    <option>SCOPE</option>
                    <option>SCORE</option>
                    <option>SCHEME</option>
                    <option>SELECT</option>
                    <option>SMEC</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cgpa">CGPA*</label>
                <input type="number" step="any" class="form-control" name="cgpa" id="cgpa" placeholder="Enter CGPA">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        function validateForm() {
            // Remove previous validation alerts
            var previousAlert = document.querySelector(".alert.alert-danger");
            if (previousAlert) {
                previousAlert.remove();
            }

            var studentName = document.getElementById("studentName").value;
            var regno = document.getElementById("regno").value;
            var cgpa = document.getElementById("cgpa").value;

            if (studentName.trim() === "" || regno.trim() === "" || cgpa.trim() === "") {
                // Display a Bootstrap alert for validation error
                var alertDiv = document.createElement("div");
                alertDiv.className = "alert alert-danger";
                alertDiv.innerHTML = "Please fill in all required fields.";
                document.querySelector(".container").insertBefore(alertDiv, document.querySelector("form"));
                return false;
            }

            return true;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>