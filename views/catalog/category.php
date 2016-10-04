<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Каталог</h2>
                        <div class="panel-group category-products">
                            <?php foreach ($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?php echo $categoryItem['id']; ?>"
                                               class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
                                            >
                                                <?php echo $categoryItem['name']; ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->

<!--                        <form action="#">-->
<!--                            <p>-->
<!--                                <label class="label">Количество на странице:</label>-->
<!--                                <select class="turnintodropdown">-->
<!--                                    <option>5</option>-->
<!--                                    <option>10</option>-->
<!--                                    <option>20</option>-->
<!--                                    <option>50</option>-->
<!--                                    <option>100</option>-->
<!--                                </select>-->
<!--                            </p>-->
<!--                        </form>-->

                        <form method="get" action="/models/Temp.php" name="myForm">
                            <select name="namef" onChange="document.forms.myForm.submit ()">
                                <option value='10'  selected>10</option>
                                <option value='20' >20</option>
                                <option value='50' >50</option>
                                <option value='100' >100</option>
                            </select>
                        </form>

                        <h2 class="title text-center">Последние товары</h2>

                        <?php foreach ($categoryProducts as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="/template/images/home/product1.jpg" alt=""/>
                                            <h2><?php echo $product['price']; ?>$</h2>
                                            <p>
                                                <a href="/product/<?php echo $product['id']; ?>">
                                                    <?php echo 'id-' . $product['id'] . ' ' . $product['name']; ?>
                                                </a>
                                            </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($product['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt=""/>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div><!--features_items-->

                    <!-- Постраничная навигация -->
                    <?php if ($viewPaginatin): ?>
                        <?php echo $pagination->get(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>