<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Read User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>PHP Redis CRUD</h1>
        <nav>
            <ul>
                <li><a href="?controller=user&action=create">Create User</a></li>
                <li><a href="?controller=user&action=read">Read User</a></li>
                <li><a href="?controller=user&action=update">Update User</a></li>
                <li><a href="?controller=user&action=delete">Delete User</a></li>
                <li><a href="?controller=user&action=listAll">List All Users</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h1>Read User</h1>
        <form method="get" action="index.php">
            <input type="hidden" name="controller" value="user">
            <input type="hidden" name="action" value="show">
            <label>User ID:</label>
            <input type="text" name="id" required><br>
            <input type="submit" value="Read">
        </form>
        <?php if (isset($user)) : ?>
            <p>Name: <?php echo $user['name']; ?></p>
            <p>Email: <?php echo $user['email']; ?></p>
        <?php elseif (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>

</html>