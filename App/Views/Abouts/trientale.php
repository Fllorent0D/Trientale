<?php foreach($abouts as $about): ?>
<div class="container">
    <h3><?= $about->title; ?></h3>
    <p><?= htmlspecialchars_decode($about->text); ?></p>
</div>
<?php endforeach; ?>
