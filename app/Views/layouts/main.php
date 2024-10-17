<!-- main.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Website RoadMap' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
    <header>
        <nav>
            <ul class="navname">
                <a class="logo">Rio's RoadMap</a>
            </ul>
            <ul class="navname">
                <li><a href="<?= base_url('/'); ?>">Home</a></li>
                <li><a href="<?= base_url('about'); ?>">About</a></li>
                <li>
                    <a href="#">Study Materials</a>
                    <ul class="dropdown">
                        <li><a href="<?= base_url('study_materials/view/1'); ?>">HTML</a></li>
                        <li><a href="<?= base_url('study_materials/view/2'); ?>">CSS</a></li>
                        <li><a href="<?= base_url('study_materials/view/3'); ?>">JavaScript</a></li>
                        <li><a href="<?= base_url('study_materials/view/4'); ?>">Python</a></li>
                        <li><a href="<?= base_url('study_materials/view/5'); ?>">AI</a></li>
                        <li><a href="<?= base_url('study_materials/view/6'); ?>">BackEnd</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="content-container"> <!-- Tambahkan class ini -->
            <?= $this->renderSection('content'); ?>
        </div>
    </main>

    <footer>
        <p>Dibuat dengan Code Igniter 4 Framework</p>
        <p>Dibuat oleh <a href="https://instagram.com/satriommw" target="_blank">@satriommw</a> pada 2024</p>
    </footer>

    <script src="<?= base_url('js/script.js'); ?>"></script>
</body>
</html>
