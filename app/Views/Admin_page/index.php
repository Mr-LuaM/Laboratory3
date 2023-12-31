<!DOCTYPE html>
<html lang="en">

<?= $this->include('Admin_page/includes/head') ?>


<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?= $this->include('Admin_page/includes/sidebar') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <?= $this->include('Admin_page/includes/navbar') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?= $this->include('Admin_page/includes/messages') ?>


                    <!-- DataTales Example -->

                    <?= $this->include('Admin_page/includes/usertables') ?>
                    <?= $this->include('Admin_page/includes/productstables') ?>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?= $this->include('Admin_page/includes/footer') ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <?= $this->include('Admin_page/includes/scrolltotop') ?>

    <?= $this->include('Admin_page/includes/logoutmodal') ?>

    <?= $this->include('Admin_page/includes/scripts') ?>





</body>

</html>