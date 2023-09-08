 <?php
    $db = new PDO('sqlite:../../db/db.db');

    // Set error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>