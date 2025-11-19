<?php
// Read the head section from index.html (lines 1-3047)
$htmlContent = file_get_contents('index.html');
$lines = explode("\n", $htmlContent);

// Output head section (lines 1-3047)
for ($i = 0; $i < 3047; $i++) {
    echo $lines[$i] . "\n";
}
?>
</head>
<body>
    <?php include "@components/header.php"; ?>
    <?php include "@components/navbar.php"; ?>
    <?php include "@components/trust-bar.php"; ?>

<?php
// Output main content (lines 3165-3554)
for ($i = 3164; $i < 3554; $i++) {
    if (isset($lines[$i])) {
        echo $lines[$i] . "\n";
    }
}
?>

    <?php include "@components/footer.php"; ?>

<?php
// Output scripts (lines 3695-4447)
for ($i = 3694; $i < 4447; $i++) {
    if (isset($lines[$i])) {
        echo $lines[$i] . "\n";
    }
}
?>
</body>
</html>

