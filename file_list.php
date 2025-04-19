<?php
$uploadDir = "uploads/"; // Your upload folder


$files = array_diff(scandir($uploadDir), array('.', '..'));
?>

<div class="file-box">
    <h3>Uploaded Files</h3>
    <ul>
        <?php foreach ($files as $file): ?>
            <li>
            <a href="<?= $uploadDir . htmlspecialchars($file); ?>">
    <?= htmlspecialchars($file); ?>
</a>

            </li>
        <?php endforeach; ?>
    </ul>
</div>
