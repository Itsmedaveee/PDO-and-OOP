 <?php if (isset($_SESSION['flash_message'])) : ?>
        <?php 

        $error = $_SESSION['flash_message'];
        $level = key($error);

        unset($_SESSION['flash_message']);
        ?>
        <div class="alert alert-<?= $level; ?>" role="alert">
            <?= $error[$level]; ?>
        </div>
    <?php endif; ?>

