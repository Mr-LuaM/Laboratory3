<?php if ($context === 'Home'): ?>
    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider hero-overly1 slider-height d-flex align-items-center slider-bg1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="hero__caption">
                                <span>70% Sale off </span>
                                <h1 data-animation="fadeInUp" data-delay=".4s">Furniture at Cost</h1>
                                <p data-animation="fadeInUp" data-delay=".6s">Buy now</p>

                                <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="product" class="btn hero-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>

    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider hero-overly2  slider-height2 d-flex align-items-center slider-bg2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="fadeInUp" data-delay=".4s">Products</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <?php if ($context === 'Products'): ?>
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>product">Products</a></li>
                                        <?php elseif ($context === 'View'): ?>
                                            <li class="breadcrumb-item"><a href="#">Product Details</a></li>
                                        <?php elseif ($context === 'About'): ?>
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>about">About</a></li>
                                        <?php endif ?>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>