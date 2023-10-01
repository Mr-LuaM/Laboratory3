<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            <?php if ($currentRoute == 'home'): ?>
                View Products
            <?php elseif ($currentRoute == 'products'): ?>
                Manage Products
            <?php endif; ?>
        </h6>

        <?php if ($currentRoute === 'products'): ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                Add Product
            </button>
        <?php endif ?>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="productDataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Stock Quantity</th>
                        <th>Image</th>
                        <th>Actions</th><!--nag js script nalang ako sir para mawala to pag nasa home page, di nagana
                        kapag php, bug ata-->

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
                        <?php if ($currentRoute === 'products'): ?>
                            <th>Actions</th>
                        <?php endif ?>
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
                            <td><img src="Userpage/assets/img/gallery/<?= $product['ImageURL'] ?>" alt=""
                                    style="max-width: 100px; max-height: 100px;"></td>
                            <td>
                                <div class="btn-group">
                                    <?php if ($currentRoute == 'products'): ?>
                                        <button type="button" class="btn btn-primary edit-product" data-toggle="modal"
                                            data-target="#addProductModal" data-productid="<?= $product['ProductID'] ?>"
                                            data-productname="<?= $product['ProductName'] ?>"
                                            data-description="<?= htmlspecialchars($product['Description']) ?>"
                                            data-price="<?= $product['Price'] ?>"
                                            data-category="<?= $product['CategoryName'] ?>"
                                            data-stockquantity="<?= $product['StockQuantity'] ?>">Edit</button>

                                        <a href="delete_product/<?= $product['ProductID'] ?>" class="btn btn-danger">Delete</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>