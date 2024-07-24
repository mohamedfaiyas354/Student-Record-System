
<!DOCTYPE html>
<html>
<head>
    <title>Student Record System</title>
</head>
<body>
    <h2>Add New Student</h2>
    <form action="add_student.php" method="post">
        Name: <input type="text" name="name" required><br>
        Age: <input type="number" name="age" required><br>
        Grade: <input type="text" name="grade" required><br>
        <input type="submit" value="Add Student">
    </form>
    <h2>Student Records</h2>
    <?php include 'list_students.php'; ?>
</body>
</html>