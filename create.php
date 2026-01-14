
<?php
include 'db.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $conn->query("INSERT INTO students (name, email, course)
                  VALUES ('$name', '$email', '$course')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow col-md-6 mx-auto">
        <div class="card-header">
            <h4>Add Student</h4>
        </div>
        <div class="card-body">
            <form method="POST">
                <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>
                <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                <input type="text" name="course" class="form-control mb-3" placeholder="Course" required>
                <button name="save" class="btn btn-success w-100">Save</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
