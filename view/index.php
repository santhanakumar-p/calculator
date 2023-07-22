<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark List</title>
</head>

<body>
    <h3>Mark List</h3>
    <a href="../view/create.php">Create</a>
    <br><br>

    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>DoB</th>
                    <th>Tamil</th>
                    <th>English</th>
                    <th>Mathematics</th>
                    <th>Science</th>
                    <th>Social Science</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../core/db.php");
                $stmt = $conn->query("SELECT * FROM sslc_marks");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['roll_no'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['dob'] . '</td>';
                    echo '<td>' . $row['tamil'] . '</td>';
                    echo '<td>' . $row['english'] . '</td>';
                    echo '<td>' . $row['mathematics'] . '</td>';
                    echo '<td>' . $row['science'] . '</td>';
                    echo '<td>' . $row['social_science'] . '</td>';
                    echo '<td>' . $row['created_at'] . '</td>';
                    echo '<td><a href = "core/edit.php?id' . $row['id'] . '">Edit</a> | <a href = "core/destroy.php?id=' . $row['id'] . '">Delete</a></td>';
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>S.No</th>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>DoB</th>
                    <th>Tamil</th>
                    <th>English</th>
                    <th>Mathematics</th>
                    <th>Science</th>
                    <th>Social Science</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>