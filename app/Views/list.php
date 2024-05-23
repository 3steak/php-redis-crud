<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List Users</title>
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
        <h1>List of Users</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <a href="?controller=user&action=update&id=<?php echo $user['id']; ?>">Update</a>
                            <a href="?controller=user&action=confirmDelete&id=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>