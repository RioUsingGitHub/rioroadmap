<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2><?= $material['title'] ?></h2>
<p><?= $material['description'] ?></p>

<h3>Crucial Aspects</h3>
<ul>
    <?php foreach ($crucialAspects as $aspect): ?>
        <li><?= $aspect['aspect_point'] ?></li>
    <?php endforeach; ?>
</ul>

<h3>Challenges</h3>
<ul>
    <?php foreach ($challenges as $challenge): ?>
        <li><?= $challenge['challenge_point'] ?></li>
    <?php endforeach; ?>
</ul>

<h3>Learning Resources</h3>
<ul>
    <?php foreach ($resources as $resource): ?>
        <li><?= $resource['resource_point'] ?></li>
    <?php endforeach; ?>
</ul>

<?= $this->endSection() ?>