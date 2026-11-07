<?php include "theme.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <script>
document.documentElement.setAttribute('data-theme', '<?php echo $theme; ?>');
</script>
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Contact Me</h1>

        <nav>
            <a href="index.php">Home</a> |
            <a href="about.php">About Me</a> |
            <a href="skills.php">Skills</a> |
            <a href="projects.php">Projects</a> |
            <a href="contact.php">Contact</a>
            <?php themeToggleBtn($theme); ?>
        </nav>
    </header>

    <hr>

    <main>

        <h2>Get In Touch</h2>

        <p>
            If you would like to contact me, you can reach me through
            the following:
        </p>

        <ul>
            <li>Email: celestejetrille1973@gmail.com</li>
            <li>Facebook: Jetrille Celeste</li>
            <li>GitHub: jettyjets</li>
        </ul>

    

    </main>

    <hr>

    <footer>
        <p>&copy; 2026 Jets</p>
    </footer>

</body>
</html>