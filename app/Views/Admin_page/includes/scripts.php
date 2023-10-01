<!-- Bootstrap core JavaScript-->
<script src="Adminpage/vendor/jquery/jquery.min.js"></script>
<script src="Adminpage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Core plugin JavaScript-->
<script src="Adminpage/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="Adminpage/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="Adminpage/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="Adminpage/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="Adminpage/js/demo/datatables-demo.js"></script>
<script>$(document).ready(function () {
        $('#userDataTable').DataTable(); // Initialize DataTable for userDataTable
    });
</script>
<script>
    $(document).ready(function () {
        var dataTable = $('#productDataTable').DataTable();

        <?php if ($currentRoute !== 'products'): ?>
            // Hide the "Actions" column when not on the 'products' route
            dataTable.column(6).visible(false);
        <?php endif; ?>
    });
</script>