
    <!-- jQuery -->
    <script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo constant('URL') ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="<?php echo constant('URL') ?>public/assets/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="<?php echo constant('URL') ?>public/assets/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo constant('URL') ?>public/assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo constant('URL') ?>public/assets/dist/js/pages/dashboard3.js"></script>

    <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script
        src="<?php echo constant('URL') ?>public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="<?php echo constant('URL') ?>public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js">
    </script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
    </script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/buttons.html5.min.js">
    </script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/buttons.print.min.js">
    </script>
    <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="<?php echo constant('URL') ?>public/assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo constant('URL') ?>public/assets/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            //hoa don
            $("#ordertable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#ordertable_wrapper .col-md-6:eq(0)');
            $("#orderdetailtable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#orderdetailtable_wrapper .col-md-6:eq(0)');

            //sanpham
            $("#producttable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#producttable_wrapper .col-md-6:eq(0)');

            //nhap hang
            $("#nhaphangtable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#nhaphangtable_wrapper .col-md-6:eq(0)');
            $("#chitietnhaphangtable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#chitietnhaphangtable_wrapper .col-md-6:eq(0)');

            //loai
            $("#categorytable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#categorytable_wrapper .col-md-6:eq(0)');

            //author
            $("#authortable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#authortable_wrapper .col-md-6:eq(0)');

            //nhanvien
            $("#employeetable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#employeetable_wrapper .col-md-6:eq(0)');



        });
    </script>