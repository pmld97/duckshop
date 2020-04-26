<?php
require ("constants.php");
try {
    $connection = new PDO(DB_SERVER, DB_USER, DB_PASS);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}