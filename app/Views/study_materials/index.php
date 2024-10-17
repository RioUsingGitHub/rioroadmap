<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Study Materials</h1>
<ul>
    <?php foreach ($materials as $material): ?>
        <li>
            <a href="/study_materials/view/<?= $material['id'] ?>">
                <?= $material['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?= $this->endSection() ?>