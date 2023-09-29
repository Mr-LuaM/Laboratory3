<div class="header-area">
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="row menu-wrapper align-items-center justify-content-between">
                <div class="header-left d-flex align-items-center">

                    <div class="logo">
                        <a href="index.html"><img src="<?= base_url() ?>assets/img/logo/logo.png" alt></a>
                    </div>

                    <div class="logo2">
                        <a href="index.html"><img src="<?= base_url() ?>assets/img/logo/logo2.png" alt></a>
                    </div>

                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a class="active" href="/">Home</a></li>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Page</a>
                                    <ul class="submenu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="card.html">Card</a></li>
                                        <li><a href="categories.html">Categories</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="product_details.html">Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right1 d-flex align-items-center main-menu  d-none d-lg-block">
                    <div class="search">
                        <ul class="d-flex align-items-center">
                            <li>

                                <form action="#" class="form-box f-right ">
                                    <input type="text" name="Search" placeholder="Search products">
                                    <div class="search-icon">
                                        <i class="ti-search"></i>
                                    </div>
                                </form>
                            </li>
                            <li>
                                <?php if (session()->get('isLoggedIn')): ?>
                                    <a href="profile" class="account-btn" target="_blank">
                                        <?= esc(session()->get('username')) ?>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="profile">Profile</a></li>
                                        <li><a href="logout">Logout</a></li>
                                    </ul>
                                <?php else: ?>
                                    <a href="login" class="account-btn" target="_blank">Login</a>
                                <?php endif; ?>
                            </li>




                            <li>
                                <div class="card-stor">
                                    <img src="<?= base_url() ?>assets/img/icon/card.svg" alt>
                                    <span>0</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>