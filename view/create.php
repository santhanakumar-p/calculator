<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSLC Marks</title>
</head>

<body>
    <h3>Create</h3>
    <a href="../view/index.php">Back</a>
    <br><br>
    <div>
        <form action="../core/store.php" method="POST">
            <div>
                <label for="rollNo">Roll No</label><br>
                <input type="number" name="roll_no" id="rollNo"><br><br>
            </div>
            <div>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name"><br><br>
            </div>
            <div>
                <label for="dob">DoB</label><br>
                <input type="date" name="dob" id="dob"><br><br>
            </div>
            <div>
                <label for="tamil">Tamil</label><br>
                <input type="number" name="tamil" id="tamil"><br><br>
            </div>
            <div>
                <label for="english">English</label><br>
                <input type="number" name="english" id="english"><br><br>
            </div>
            <div>
                <label for="mathematics">Mathematics</label><br>
                <input type="number" name="mathematics" id="mathematics"><br><br>
            </div>
            <div>
                <label for="science">Science</label><br>
                <input type="number" name="science" id="science"><br><br>
            </div>
            <div>
                <label for="socialScience">Socialscience</label><br>
                <input type="number" name="social_science" id="socialScience"><br><br>
            </div>
            <div>
                <button type="submit">Submit</button>
                <button type="reset">Clear</button>
            </div>

        </form>
    </div>

</body>

</html>