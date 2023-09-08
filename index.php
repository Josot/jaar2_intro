<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Index</title>
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
        <a href="#"><label class="logo">Portfolio</label></a>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="portfolio/project_pagina/project_pagina.php">Projects</a></li>
            <li><a href="portfolio/about/about.php">About</a></li>
            <li><a href="portfolio/contact/contact.php">Contact</a></li>
            <li><a href="portfolio/admin/admin.php">Admin</a></li>
            <!-- DE ADMIN PANEL WERKT NOG NIET VIA DE INLOG, DIT WORD MOGELIJKWIJS LATER NOG GEFIXED -->
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
    <div class="container">
        <div class="info-box">
            <img src="./media/pictures/me.jpeg" class="info_me" alt="Joost">
            <h2>Information</h2>
            <p>I am Joost van Ewijk and I am <span id="ageDisplay"></span> years old, I was born in the Netherlands and live close to The Hague.
                I am a student at Grafisch Lyceum Rotterdam and I am studying for MBO4 Software Development.
                I am currently in my second year of this study and I am enjoying learning new things about programming a lot. I am also learning a lot about the design of websites and applications.
            </p>
            <h2>Website navigation</h2>
            <p>
                This website is my personal portfolio, here you can find all the projects I am most proud of. You will also be able to read more about who I am and what I do. You can easily contact me through the contact form, and I will get back to you as soon as possible! You can navigate through the website by using the navigation bar at the top of the page or use the buttons below.
            </p>
            <a href="portfolio/about/about.php"><button type="button" class="button">About me</button></a>
            <a href="portfolio/project_pagina/project_pagina.php"><button type="button" class="button">Projects</button></a>
            <a href="portfolio/contact/contact.php"><button type="button" class="button">Contact</button></a>

        </div>

    </div>
    <script src="../script/script.js"></script>
</body>

</html>