<!DOCTYPE html>
<html lang="en">

<?= $this->include('Admin_page/includes/head') ?>


<body id="page-top">
    <?= $this->include('Admin_page/includes/addproductmodal') ?>
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
    <script>
        // JavaScript to populate the "Add Product" modal when it is shown
        $('#addProductModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var productId = button.data('productid');
            var productName = button.data('productname');
            var description = button.data('description');
            var price = button.data('price');
            var category = button.data('category');
            var stockQuantity = button.data('stockquantity');

            var modal = $(this);
            modal.find('#editProductId').val(productId);
            modal.find('#product_name').val(productName);
            modal.find('#description').val(description);
            modal.find('#price').val(price);

            // Iterate through the options and select the one with a matching category name
            modal.find('#category option').each(function () {
                if ($(this).text().trim() === category) {
                    $(this).prop('selected', true);
                } else {
                    $(this).prop('selected', false);
                }
            });

            modal.find('#stock_quantity').val(stockQuantity);
        });
    </script>




</body>

</html>