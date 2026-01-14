<?php
include 'db.php';

$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $conn->query("UPDATE students SET
                  name='$name',
                  email='$email',
                  course='$course'
                  WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow col-md-6 mx-auto">
        <div class="card-header">
            <h4>Edit Student</h4>
        </div>
        <div class="card-body">
            <form method="POST">
                <input type="text" name="name" value="<?= $student['name'] ?>" class="form-control mb-3">
                <input type="email" name="email" value="<?= $student['email'] ?>" class="form-control mb-3">
                <input type="text" name="course" value="<?= $student['course'] ?>" class="form-control mb-3">
                <button name="update" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
