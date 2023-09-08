<?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../../db/db.db');
    }
}

$db = new MyDB();

if (isset($_GET['title'])) {

    $title = urldecode($_GET['title']);

    try {
        $db->exec("DELETE FROM project WHERE title = '$title'");
    } catch (PDOException $e) {
        echo "Error deleting post: " . $e->getMessage();
    }

    header("Location: ./admin_backend.php");
} else {
    echo "invalid psot title";
}
