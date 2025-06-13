<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Clock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container text-center py-5">
        <!-- Analog Clock -->
        <div class="clock mx-auto">
            <div class="center"></div>
            <div id="hour-hand" class="hand hour-hand"></div>
            <div id="minute-hand" class="hand minute-hand"></div>
            <div id="second-hand" class="hand second-hand"></div>
            <!-- Clock Numbers -->
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <div class="number" style="transform: rotate(<?= $i * 30 ?>deg)">
                    <span style="transform: rotate(-<?= $i * 30 ?>deg)"><?= $i ?></span>
                </div>
            <?php endfor; ?>
        </div>

        <!-- Digital Clock -->
        <div class="mt-4 display-4 text-danger" id="digital-clock">
            <?= date('H:i:s') ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
