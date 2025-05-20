<?php
$kullanici = $_POST['email'];
$sifre = $_POST['sifre'];

$dogruSifre = substr($kullanici, 1, 10);
$dogruKullanici = "g" . $dogruSifre . "@sakarya.edu.tr";

if ($kullanici === $dogruKullanici && $sifre === "g" . $dogruSifre) {
    echo "<h2>Hoşgeldiniz, $sifre</h2>";
} else {
    // Login sayfasına yönlendirme
    header("Location: login.html");
    exit();
}
?>
