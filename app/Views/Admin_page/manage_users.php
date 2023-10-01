<!DOCTYPE html>
<html lang="en">

<?= $this->include('Admin_page/includes/head') ?>


<body id="page-top">
    <?= $this->include('Admin_page/includes/editusermodal') ?>
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
    <script>
        // JavaScript to populate the "Edit User Role" modal when it is shown
        $('#editUserRolesModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var userid = button.data('userid');
            var userrole = button.data('userrole');
            var modal = $(this);
            modal.find('#userid').val(userid); // Set the UserID as the input's value
            modal.find('#userrole').val(userrole);
        });
    </script>





</body>

</html>