<?php
session_start();

// 1. Handle toggle click
if(isset($_GET['theme'])){
   $newTheme = $_GET['theme'] == 'dark' ? 'dark' : 'light';
   setcookie("theme", $newTheme, time() + (86400 * 30), "/"); // save 30 days
  $_SESSION['theme'] = $newTheme;
   // Remove ?theme= from url para di mag-loop
   header("Location: " . strtok($_SERVER["REQUEST_URI"], '?')); 
    exit();
}

// 2. Get current theme
$theme = $_COOKIE['theme'] ?? $_SESSION['theme'] ?? 'light';

// 3. Function to print the toggle button. Call this anywhere in your navbar
function themeToggleBtn($theme){
    $newTheme = $theme == 'light' ? 'dark' : 'light';
   $icon = $theme == 'light' ? '🌙' : '☀️';
  $text = $theme == 'light' ? 'Dark' : 'Light';
  echo "<a href='?theme=$newTheme' style='text-decoration:none; padding:8px 12px; border-radius:8px; background:var(--btn-bg); color:var(--btn-text);'>$icon $text Mode</a>";
}
?>
