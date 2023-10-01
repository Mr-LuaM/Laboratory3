<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            <?php if ($currentRoute == 'home'): ?>
                View Users
            <?php elseif ($currentRoute == 'products'): ?>
                Manage Users
            <?php endif; ?>
        </h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="userDataTable" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>UserID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <?php if ($currentRoute === 'users'): ?>
                            <th>Actions</th>
                        <?php endif ?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>UserID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <?php if ($currentRoute === 'users'): ?>
                            <th>Actions</th>
                        <?php endif ?>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <?= $user['UserID'] ?>
                            </td>
                            <td>
                                <?= $user['Username'] ?>
                            </td>
                            <td>
                                <?= $user['Email'] ?>
                            </td>
                            <td>
                                <?= $user['FirstName'] ?>
                            </td>
                            <td>
                                <?= $user['LastName'] ?>
                            </td>
                            <td>
                                <?= $user['Address'] ?>
                            </td>
                            <td>
                                <?= $user['Phone'] ?>
                            </td>
                            <td>
                                <?= $user['Role'] ?>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <?php if ($currentRoute == 'users'): ?>
                                        <button type="button" class="btn btn-primary edit-product" data-toggle="modal"
                                            data-target="#editUserRolesModal" data-userid="<?= $user['UserID'] ?>"
                                            data-userrole="<?= $user['Role'] ?>">Edit</button>
                                        <a href="delete_user/<?= $user['UserID'] ?>" class="btn btn-danger">Delete</a>
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