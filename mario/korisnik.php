<?php
include('config.php');

$stmt = $pdo->prepare("SELECT * FROM korisnici");
$stmt->execute();
$termini = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <!DOCTYPE html>
<html>
<head>
    <title>Casa del padel</title>
    <link rel="stylesheet" href="css_.css">

    <div class="link">
        <a class="linkovi" href="korisnik.php">Korisnik</a>
        <a class="linkovi" href="odjava.php">Odjava</a>
    </div>
</head>