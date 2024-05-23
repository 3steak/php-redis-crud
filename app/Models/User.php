<?php

class User
{
    private $redis;

    public function __construct($redis)
    {
        $this->redis = $redis;
    }

    public function create($id, $name, $email)
    {
        $user = ['name' => $name, 'email' => $email];
        return $this->redis->hmset("user:$id", $user);
    }

    public function read($id)
    {
        return $this->redis->hgetall("user:$id");
    }
    public function listAll()
    {
        $keys = $this->redis->keys('user:*');
        $users = [];
        foreach ($keys as $key) {
            $id = str_replace('user:', '', $key);
            $user = $this->redis->hgetall($key);
            $user['id'] = $id;
            $users[] = $user;
        }
        return $users;
    }

    public function update($id, $name, $email)
    {
        $user = ['name' => $name, 'email' => $email];
        return $this->redis->hmset("user:$id", $user);
    }

    public function delete($id)
    {
        return $this->redis->del("user:$id");
    }
}
