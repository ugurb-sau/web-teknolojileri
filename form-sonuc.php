<?php
$ad = $_POST['ad'] ?? '';
$soyad = $_POST['soyad'] ?? '';
$email = $_POST['email'] ?? '';
$telefon = $_POST['telefon'] ?? '';
$konu = $_POST['konu'] ?? '';
$mesaj = $_POST['mesaj'] ?? '';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Bilgileri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container mt-5">
    <h2>Gönderilen Form Bilgileri</h2>
    <ul class="list-group">
      <li class="list-group-item"><strong>Ad:</strong> <?= htmlspecialchars($ad) ?></li>
      <li class="list-group-item"><strong>Soyad:</strong> <?= htmlspecialchars($soyad) ?></li>
      <li class="list-group-item"><strong>E-posta:</strong> <?= htmlspecialchars($email) ?></li>
      <li class="list-group-item"><strong>Telefon:</strong> <?= htmlspecialchars($telefon) ?></li>
      <li class="list-group-item"><strong>Konu:</strong> <?= htmlspecialchars($konu) ?></li>
      <li class="list-group-item"><strong>Mesaj:</strong><br> <?= nl2br(htmlspecialchars($mesaj)) ?></li>
    </ul>
    <a href="iletisim.html" class="btn btn-primary mt-4">Forma Geri Dön</a>
  </div>

</body>
</html>
