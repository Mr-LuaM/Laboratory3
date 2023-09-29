<div class="container">

    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10">
            <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <h2>Popular products</h2>
                <P>Take a look at our popular products</P>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="properties__button text-center">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <?php $firstCategoryActive = true; ?>
                        <?php foreach ($productsCategories as $category): ?>
                            <a class="nav-item nav-link<?= $firstCategoryActive ? ' active' : '' ?>"
                                id="nav-<?= $category['CategoryName'] ?>-tab" data-toggle="tab"
                                href="#nav-<?= $category['CategoryName'] ?>" role="tab"
                                aria-controls="nav-<?= $category['CategoryName'] ?>"
                                aria-selected="<?= $firstCategoryActive ? 'true' : 'false' ?>">
                                <?= esc($category['CategoryName']) ?>
                            </a>
                            <?php $firstCategoryActive = false; ?>
                        <?php endforeach; ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- app/Views/index.php -->

        <div class="tab-content" id="nav-tabContent">
            <?php $firstCategory = true; ?>
            <?php foreach ($productsCategories as $category): ?>
                <div class="tab-pane fade<?= $firstCategory ? ' show active' : '' ?>"
                    id="nav-<?= $category['CategoryName'] ?>" role="tabpanel"
                    aria-labelledby="nav-<?= $category['CategoryName'] ?>-tab">
                    <div class="row">
                        <?php foreach ($products as $product): ?>
                            <?php if ($product['CategoryID'] == $category['CategoryID']): ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="<?= base_url() ?>assets/img/gallery/<?= esc($product['ImageURL']) ?>"
                                                alt="<?= esc($product['ProductName']) ?>">
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="viewProducts/<?= $product['ProductID'] ?>">
                                                    <?= esc($product['ProductName']) ?>
                                                </a></h3>
                                            <span>₱
                                                <?= esc($product['Price']) ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php $firstCategory = false; ?>
            <?php endforeach; ?>
        </div>




    </div>
</div>