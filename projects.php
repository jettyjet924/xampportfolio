<?php include "theme.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
document.documentElement.setAttribute('data-theme', '<?php echo $theme; ?>');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>My Projects</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="about.php">About Me</a> |
            <a href="skills.php">Skills</a> |
            <!-- Added the active class to highlight the current page -->
            <a href="projects.php" class="active">Projects</a> |
            <a href="contact.php">Contact</a>
            <?php themeToggleBtn($theme); ?>
        </nav>
    </header>

    <hr>

    <main>
        <h2>My Projects</h2>

        <div class="projects-grid">
            
            <!-- Project 1 Card Container -->
           <div class="project-card">

    <img src="cyber.jpg"
         alt="Cyber Awareness Game Screen"
         class="project-image">

    <h3>1. Cyber Awareness Game</h3>

    <p>
        An educational game designed to teach users about common
        online threats such as phishing, oversharing, and unsafe
        downloads.
    </p>

</div>


<div class="project-card">

    <img src="quiz.jpg"
         alt="Kotlin Multiplatform Quiz App Screen"
         class="project-image">

    <h3>2. Kotlin Multiplatform Quiz App</h3>

    <p>
        A quiz application developed using Kotlin Multiplatform,
        with an administrator system for managing students and
        questions.
    </p>

</div>


<div class="project-card">

    <img src="packet.jpg"
         alt="Cisco Packet Tracer Network Simulation"
         class="project-image">

    <h3>3. Network Simulation</h3>

    <p>
        A computer network simulation created using Cisco Packet
        Tracer to practice routing, switching, VLANs, and IP
        addressing.
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
