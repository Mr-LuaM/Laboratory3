<!doctype html>
<html class="no-js" lang="zxx">
<?= $this->include('User_page/includes/head') ?>

<body>

  <?= $this->include('User_page/includes/preloader'); ?>
  <?= $this->include('User_page/includes/navbar'); ?>

  <main>


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
                    <a href="Products" class="btn hero-btn">Discover More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="properties new-arrival fix">
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
                            <img src="<?= base_url() ?>Userpage/assets/img/gallery/<?= esc($product['ImageURL']) ?>"
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
    </section>


    <div class="visit-tailor-area fix">

      <div class="tailor-offers"></div>

      <div class="tailor-details">
        <h2>Best Furniture<br> manufacturer</h2>
        <p>We care about your needs.</p>
        <p class="pera-bottom">All are made with love.</p>
        <a href="products.php" class="btn">Discover More</a>
      </div>
    </div>


    <div class="new-arrival new-arrival2">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 col-md-10">
            <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
              <h2>Products you may like</h2>
              <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                interdum nulla.</P>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
              <div class="popular-img">
                <img src="assets/img/gallery/popular4.png" alt>
              </div>
              <div class="popular-caption">
                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                <span>$367</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
              <div class="popular-img">
                <img src="assets/img/gallery/popular5.png" alt>
              </div>
              <div class="popular-caption">
                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                <span>$367</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
              <div class="popular-img">
                <img src="assets/img/gallery/popular6.png" alt>
              </div>
              <div class="popular-caption">
                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                <span>$367</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="room-btn">
            <a href="product.html" class="border-btn">Discover More</a>
          </div>
        </div>
      </div>
    </div>


    <div class="instagram-area">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="instra-tittle mb-40">
              <div class="section-tittle">
                <img src="assets/img/gallery/insta.png" alt>
                <h2>Get Inspired with Instagram</h2>
                <P class="mb-35">Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra
                  ornare, eros dolor interdum nulla.</P>
                <a href="product.html" class="border-btn">Discover More</a>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-8">
            <div class="row no-gutters">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="single-instagram">
                  <img src="assets/img/gallery/instra1.png" alt class="w-100">
                  <a href="#"><i class="ti-instagram"></i></a>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="single-instagram">
                  <img src="assets/img/gallery/instra2.png" alt class="w-100">
                  <a href="#"><i class="ti-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="new-arrival new-arrival2">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8 col-md-10">
            <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
              <h2>Top Pick</h2>
              <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                interdum nulla.</P>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
              <div class="popular-img">
                <img src="assets/img/gallery/popular7.png" alt>
              </div>
              <div class="popular-caption">
                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                <span>$367</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
              <div class="popular-img">
                <img src="assets/img/gallery/popular8.png" alt>
              </div>
              <div class="popular-caption">
                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                <span>$367</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
              <div class="popular-img">
                <img src="assets/img/gallery/popular9.png" alt>
              </div>
              <div class="popular-caption">
                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                <span>$367</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="room-btn">
            <a href="product.html" class="border-btn">Discover More</a>
          </div>
        </div>
      </div>
    </div>




    <?= $this->include('User_page/includes/categoriesArea'); ?>
  </main>
  <?= $this->include('User_page/includes/foot'); ?>
  <?= $this->include('User_page/includes/back2top'); ?>
  <?= $this->include('User_page/includes/scripts'); ?>
</body>

<!-- Mirrored from preview.colorlib.com/theme/furn/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:28 GMT -->

</html>