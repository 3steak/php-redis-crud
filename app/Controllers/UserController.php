<?php
include_once('/Code/php-redis-crud/app/Models/User.php');

class UserController
{
    private $redis;
    private $userModel;

    public function __construct($redis)
    {
        $this->redis = $redis;
        $this->userModel = new User($redis);
    }

    public function index()
    {
        require_once '/Code/php-redis-crud/app/Views/index.php';
    }

    public function create()
    {
        require_once '/Code/php-redis-crud/app/Views/create.php';
    }

    public function store()
    {
        $id = uniqid();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->userModel->create($id, $name, $email);
        echo "User created successfully with ID: $id";
    }

    public function read()
    {
        require_once '/Code/php-redis-crud/app/Views/read.php';
    }

    public function show()
    {
        $id = $_GET['id'];
        $user = $this->userModel->read($id);

        if ($user) {
            require_once '/Code/php-redis-crud/app/Views/read.php';
        } else {
            $error = "User not found.";
            require_once '/Code/php-redis-crud/app/Views/read.php';
        }
    }
    public function listAll()
    {
        $users = $this->userModel->listAll();
        require_once '/Code/php-redis-crud/app/Views/list.php';
    }

    public function update()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        require_once '/Code/php-redis-crud/app/Views/update.php';
    }

    public function edit()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->userModel->update($id, $name, $email);
        echo "User updated successfully.";
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->userModel->delete($id);
        echo "User deleted successfully.";
    }
    public function confirmDelete()
    {
        $id = $_GET['id'];
        require_once '/Code/php-redis-crud/app/Views/confirmDelete.php';
    }

    public function destroy()
    {
        $id = $_POST['id'];
        $this->userModel->delete($id);
        echo "User deleted successfully.";
    }
}
