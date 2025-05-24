<?php
session_start();

$kullanici = $_POST['email'];
$sifre = $_POST['sifre'];

if (preg_match('/^g(\d{9})@sakarya\.edu\.tr$/', $kullanici, $eslesen)) {
    $numara = $eslesen[1];

    if ($sifre === "g" . $numara) {
        $_SESSION['kullanici'] = $sifre;
        echo "<h2>Hoşgeldiniz, $sifre</h2>";
        echo "<a href='index.html' style='
		display:inline-block;
		margin-top:20px;
		padding:10px 20px;
		background-color:#007bff;
		color:white;
		text-decoration:none;
		border-radius:5px;'>Ana Sayfaya Dön</a>";
    } else {
        echo "<h3 style='color:red;'>Şifre hatalı. Lütfen tekrar deneyin.</h3>";
        echo "<a href='login.html'>Giriş sayfasına dön</a>";
    }
} else {
    header("Location: login.html");
    exit();
}
?>
