<?php include "theme.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<script>
document.documentElement.setAttribute('data-theme', '<?php echo $theme; ?>');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <div class="starfield"></div> 

    <header>
        <h1>Jet | Network & Tech</h1>
        <nav>
            <a href="index.php" class="active">Home</a> |
            <a href="about.php">About Me</a> |
            <a href="skills.php">Skills</a> |
            <a href="projects.php">Projects</a> |
            <a href="contact.php">Contact</a>
            <?php themeToggleBtn($theme); ?>
        </nav>
    </header>

    <hr>

    <main>
        <h2>Building, Connecting, Learning.</h2>

        <div class="profile-container">
            
            <div class="profile-aside">
                <div class="avatar-wrapper">
                    <img src="profile.jpg" alt="My Profile Photo" class="profile">
                    <span class="status-dot"></span>
                </div>
            </div>

            <div class="profile-text">
                <p>
                    Hello! My name is Jet. I am an Information Technology
                    student interested in networking, programming, and technology.
                </p>

                <p>
                    Welcome to my personal portfolio website where you can learn
                    more about me, my skills, and the projects I have worked on.
                </p>
            </div>

        </div>
    </main>

    <hr>

    <footer>
        <p>&copy; 2026 Jets</p>
    </footer>

</body>
</html>
