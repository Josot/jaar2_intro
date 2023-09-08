<?php
require_once '../../db/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <script src="../script/script.js"></script>
    <title>Project Pagina</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f0015e972f.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="../../index.phpp"><label class="logo">Portfolio admin</label></a>
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../project_pagina/project_pagina.php">Project pagina</a></li>
            <li><a href="../about/about.php">About</a></li>
            <li><a href="../contact/contact.php">Contact</a></li>
            <li><a href="../admin/admin.php">Admin</a></li>
        </ul>
    </nav>
    <div class="wrapper">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <section>
        <div class="contact">
            <div class="contact_form">
                <h2>Add projects</h2>

                <form action="verwerken.php" method="POST">
                    <label for="titel">Title</label><br>
                    <input type="text" name="title" id="title" required><br>

                    <label for="datum">Date</label><br>
                    <input type="text" name="datum" id="datum" required><br>

                    <label for="image">Image name</label><br>
                    <input type="text" name="image" id="image" required><br>

                    <label for="msg">Description</label><br>
                    <textarea name="msg" id="msg" cols="30" rows="10" required></textarea><br>

                    <label for="link">Link</label><br>
                    <input type="text" name="link" id="link" required><br>

                    <label for="github">Github</label><br>
                    <input type="text" name="github" id="github" required><br>

                    <input class="button" type="submit" value="submit">
                </form>
            </div>
        </div>
    </section>
    <div class="container_projects">
        <?php try {
            // Connect to the SQLite database

            // Perform a SELECT query
            $query = "SELECT * FROM project";
            $stmt = $db->query($query);

            // Fetch data and display results
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<project>";
                echo "<img class='img-project' src='../../media/pictures/projects/{$row['image']}'>";
                echo "<h1>" . $row['title'] . "</h1><br>";
                echo "<p>" . $row['msg'] . "</p><br>";
                echo "Datum: " . $row['datum'] . "<br>";
                echo "<a href='{$row['github']}' target='_blank'><img class='btn_github' src='../../media/pictures/github1.png'></a>";
                echo "<a class='btn_site' href='{$row['link']}' target='_target'>Site</a>";
                echo '<button><a href="delete.php?title=' . urlencode($row['title']) . '">Delete</a></button>';
                echo "</project>";
                // Add more fields as needed
            }

            // Close the database connection
            $db = null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>
</body>

</html>