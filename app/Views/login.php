<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/furn/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:46 GMT -->

<?= $this->include('User_page/includes/head') ?>


<body>

    <?= $this->include('User_page/includes/preloader'); ?>

    <main class="login-bg">

        <div class="login-form-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="login-form">

                            <div class="login-heading">
                                <span>Login</span>
                                <p>Enter Login details to get access</p>
                            </div>

                            <!-- Display Flash Message (if any) -->
                            <?php if (session()->getFlashdata('msg')): ?>
                                <div class="alert alert-warning">
                                    <?= session()->getFlashdata('msg') ?>
                                </div>
                            <?php endif; ?>

                            <form action=" <?= base_url() ?>loginAuth" method="post">
                                <div class="input-box">
                                    <div class="single-input-fields">
                                        <label>Username or Email Address</label>
                                        <input type="text" name="usernameOrEmail" placeholder="Username / Email address"
                                            value="<?= set_value('email') ?>" class="form-control">
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Enter Password"
                                            class="form-control">
                                    </div>
                                    <div class="single-input-fields login-check">
                                        <input type="checkbox" id="fruit1" name="keep-log">
                                        <label for="fruit1">Keep me logged in</label>
                                        <a href="#" class="f-right">Forgot Password?</a>
                                    </div>
                                </div>

                                <!-- You can add CSRF token field here if needed -->

                                <div class="login-footer">
                                    <p>Don’t have an account? <a href="<?= base_url() ?>register">Sign Up</a> here</p>
                                    <button type="submit" class="submit-btn3">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <?= $this->include('User_page/includes/scripts'); ?>
</body>

<!-- Mirrored from preview.colorlib.com/theme/furn/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:46 GMT -->

</html>