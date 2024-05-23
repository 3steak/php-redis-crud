<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create User</title>
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
                <li><a href="?controller=user&action=listAll">List All Users</a></li>
                <li><a href="?controller=user&action=delete">Delete User</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h1>Create User</h1>
        <form method="post" action="?controller=user&action=store">
            <label>Name:</label>
            <input type="text" name="name" required><br>
            <label>Email:</label>
            <input type="email" name="email" required><br>
            <input type="submit" value="Create">
        </form>
    </div>
</body>

</html>