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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manage</h1>
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Manage Products</h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#addProductModal">
                                Add Product
                            </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Stock Quantity</th>
                                            <th>Image</th>
                                            <th>Actions</th> <!-- Add a new column for actions -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Stock Quantity</th>
                                            <th>Image</th>
                                            <th>Actions</th> <!-- Add a new column for actions -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($products as $product): ?>
                                            <tr>
                                                <td>
                                                    <?= $product['ProductName'] ?>
                                                </td>
                                                <td>
                                                    <?= $product['Description'] ?>
                                                </td>
                                                <td>
                                                    <?= $product['Price'] ?>
                                                </td>
                                                <td>
                                                    <?= $product['CategoryName'] ?>
                                                </td>
                                                <td>
                                                    <?= $product['StockQuantity'] ?>
                                                </td>
                                                <td><img src="Userpage/assets/img/gallery/<?= $product['ImageURL'] ?>"
                                                        alt="" style="max-width: 100px; max-height: 100px;"></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary edit-product"
                                                            data-toggle="modal" data-target="#addProductModal"
                                                            data-productid="<?= $product['ProductID'] ?>"
                                                            data-productname="<?= $product['ProductName'] ?>"
                                                            data-description="<?= htmlspecialchars($product['Description']) ?>"
                                                            data-price="<?= $product['Price'] ?>"
                                                            data-category="<?= $product['CategoryName'] ?>"
                                                            data-stockquantity="<?= $product['StockQuantity'] ?>">Edit</button>


                                                        <a href="delete_product/<?= $product['ProductID'] ?>"
                                                            class="btn btn-danger">Delete</a>
                                                    </div>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

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