<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <script src="../script/script.js"></script>
    <title>Contact</title>
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
        <a href="../../index.php"><label class="logo">Portfolio</label></a>
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../project_pagina/project_pagina.php">Projects</a></li>
            <li><a href="../about/about.php">About</a></li>
            <li><a class="active" href="#">Contact</a></li>
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
                <h2>Contact</h2>
                <p>Feel free to contact me!<i class="fas fa-envelope"></i></p>

                <form action="../contact/process_form.php  " method="POST">
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" placeholder="Write your name here" required><br>

                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Write your email here" required><br>

                    <label for="message">Message</label><br>
                    <textarea id="message" name="message" placeholder="Write the message you would like to leave here" rows="auto" required></textarea><br>

                    <input class="button" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
</body>

</html>