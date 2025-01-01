<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Admin Paneli</h1>

    <!-- Eğer bir mesaj varsa, göster -->
    <?php if (!empty($message)): ?>
        <p style="color: green;"><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- Form -->
    <form action="<?php echo base_url("index.php/dashboard");?>" method="post">
    <label for="name">Ad:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Açıklama:</label>
    <input type="text" id="description" name="description" required><br><br>

    <label for="image">Resim URL:</label>
    <input type="text" id="image" name="image" required><br><br>

    <button type="submit">Veri Ekle</button>
</form>

</body>
</html>
