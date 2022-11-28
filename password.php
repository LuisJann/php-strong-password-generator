<?php
session_start();
$set_pw = $_SESSION["password"];
?>
<h3 class="pt-5">La tua password è: <?php echo $set_pw ?></h3>
<?php
?>

<a href="logout.php">torna alla home </a>