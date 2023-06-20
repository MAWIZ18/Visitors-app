<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Form</title>
    <link rel="stylesheet" href="registrationForm.css">
</head>
<body>
    <div class="main-div">
        <p>Clients enter in required information for verification </p><br><br>
<form method="POST" action="registration.php">
        <label> first Name*<br><input type="text" name="fname"></label><br><br>
        <label>last Name*<br><input type="text" name="lname"></label><br><br>
        <label>Contact*<br><input type="tel" required name="Contact"></label><br><br>
        <label>registration number*<br><input type="tel" required name="reGnumber"></label><br><br>

        
        <div class="parent">
            <div class="child-1">
                <button type="submit">Submit</button>
            </div>
            <div class="child-2">
                <button type="reset">Clear Form</button>
            </div>
        </div>

    </form>
    </div>
</body>
</html>