<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Confirm Delete</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Confirm Delete</h1>
        <p>Are you sure you want to delete this user?</p>
        <a href="?controller=user&action=delete&id=<?php echo $_GET['id']; ?>">Yes</a>
        <a href="?controller=user&action=listAll">No</a>
    </div>
</body>

</html>