<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <script src="../script/script.js"></script>
    <title>About</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f0015e972f.js" crossorigin="anonymous"></script>
    <!-- script JS -->
    <script src="../../script/script.js"></script>
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
            <li><a class="active" href="../about/about.php">About</a></li>
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
        <div class="container">
            <div class="info-box">
                <h2>About me</h2>
                <p>
                    My name is Joost van Ewijk, I'm
                    <span id="ageDisplay"></span> years old and I live close to The Hague. I attend Grafisch Lyceum Rotterdam and am currently in my 2nd year of Software Development MBO4.
                    I consider myself a problem-solver and a good team player, I enjoy organizing and planning things, and I am always looking for ways to improve myself. I am a fast learner and I am always eager to learn new things.
                    In my free time, I enjoy driving my car around (hopefully someday a motorcycle) and I enjoy playing video games with my friends.
                </p>
                <h2>Skills</h2>
                <div class="skills">
                    <div class="bar learning" data-skill="C++"></div>
                    <div class="bar learning" data-skill="C#"></div>
                    <div class="bar back basic" data-skill="Lua"></div>
                    <div class="bar back intermediate" data-skill="Python"></div>
                    <div class="bar front advanced" data-skill="CSS3"></div>
                    <div class="bar front advanced+" data-skill="collaboration"></div>
                    <div class="bar front expert" data-skill="HTML5"></div>
                    <div class="bar front expert+" data-skill="Teamwork"></div>
                </div>
                <h2>Download my CV below!</h2>
                <a href="../../media/files/CV.docx"><button class="button">Download CV</button></a>
                <br>
                <br>
                <video width="500px" height=auto controls="controls">
                    <source src="../../media/files/useless.mp4" type="video/mp4">
            </div>


        </div>
    </section>
</body>

</html>