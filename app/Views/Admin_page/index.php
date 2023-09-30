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

                    <!-- Page Heading -->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary"> Products</h6>

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





</body>

</html>