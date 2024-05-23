<?php
// config/config.php

try {
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    if (!$redis->ping()) {
        throw new Exception("Could not connect to Redis server.");
    }
} catch (Exception $e) {
    die($e->getMessage());
}
