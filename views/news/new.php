<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <ul>
            <?php foreach($carArray as $index => $itemCar): ?>
                <li><?php echo $itemCar; ?></li>
            <?php endforeach; ?>
            <li>Mersedes</li>
        </ul>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>