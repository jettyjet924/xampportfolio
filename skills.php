<?php include "theme.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <script>
document.documentElement.setAttribute('data-theme', '<?php echo $theme; ?>');
</script>
    <title>My Skills</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>My Skills</h1>

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

        <h2>Technical Skills</h2>

        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Kotlin</li>
            <li>Python</li>
            <li>SQL</li>
            <li>Computer Networking</li>
            <li>Packet Tracer</li>
        </ul>

        <h2>Networking Skills</h2>

        <ul>
            <li>IP Addressing</li>
            <li>Subnetting</li>
            <li>VLAN Configuration</li>
            <li>Inter-VLAN Routing</li>
            <li>Routing Protocols</li>
            <li>Network Troubleshooting</li>
        </ul>

        <h2>Other Skills</h2>

        <ul>
            <li>Problem Solving</li>
            <li>Communication</li>
            <li>Teamwork</li>
            <li>Research</li>
        </ul>

    </main>

    <hr>

    <footer>
        <p>&copy; 2026 Jets</p>
    </footer>

</body>
</html>