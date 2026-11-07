<?php include "theme.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <script>
document.documentElement.setAttribute('data-theme', '<?php echo $theme; ?>');
</script>
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>About Me</h1>

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
        <h2>Who Am I?</h2>

        <p>
            I am an Information Technology student currently studying
            at Mindanao State University Tawi-Tawi Campus.
        </p>

        <p>
            I am particularly interested in computer networking,
            web development, and software development.
        </p>

        <h2>Education</h2>

        <ul>
            <li>Mindanao State University - Tawi-Tawi Campus</li>
            <li>Bachelor of Science in Information Technology</li>
            <li>Networking Major</li>
        </ul>

        <h2>My Interests</h2>

        <ul>
            <li>Computer Networking</li>
            <li>Web Development</li>
            <li>Programming</li>
            <li>Cybersecurity</li>
            <li>Technology</li>
        </ul>
    </main>

    <hr>

    <footer>
        <p>&copy; 2026 My Jets</p>
    </footer>

</body>
</html>