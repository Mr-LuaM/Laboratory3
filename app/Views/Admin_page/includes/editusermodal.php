<!-- Edit User Modal -->
<div class="modal fade" id="editUserRolesModal" tabindex="-1" role="dialog" aria-labelledby="editUserRolesModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserRolesModalLabel">Edit User Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="editUserRolesForm" method="POST" action="<?= base_url('edituserrole') ?>">
                    <div class="form-group">
                        <input type="hidden" id="userid" name="userid">
                        <label for="newUserRole">New Role</label>
                        <select class="form-control" id="userrole" name="userrole">

                            <option value="admin">admin</option>
                            <option value="customer">customer</option>

                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveUserRole">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>