<?php

// require_once '../../db/connection.php';
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../../db/db.db');
    }
}

$db = new MyDB();

// $ret = $db->query((sql));

$title = $_POST['title'];
$datum = $_POST['datum'];
$image = $_POST['image'];
$msg = $_POST['msg'];
$link = $_POST['link'];
$github = $_POST['github'];


$ret = $db->query("INSERT INTO `project` (`title`, `datum`, `image`, `msg`, `link`, `github`) VALUES ('$title', '$datum', '$image', '$msg', '$link', '$github')");

if (!headers_sent()) {
    header('Location: ../panel/admin_backend.php');
    exit;
}

$db->close();
