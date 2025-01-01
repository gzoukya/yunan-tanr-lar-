<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php if (!isset($noNavbar) || !$noNavbar): ?>
        <?= $this->include('partials/nav'); ?>
    <?php endif; ?>
    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <?php if (!isset($noFooter) || !$noFooter): ?>
        <?= $this->include('partials/footer'); ?>
    <?php endif; ?>
</body>
</html>
