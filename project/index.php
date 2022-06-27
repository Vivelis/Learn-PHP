<?php
    include_once 'includes/header.php'
?>

<?php
    if (isset($_SESSION['sessionId'])) {
        echo $_SESSION['sessionId'];
        echo "You are logged in.<br>";
    } else {
        echo "Home.<br>";
    }
?>

<?php
    include_once 'includes/footer.php';
?>
