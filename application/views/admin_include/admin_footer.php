 <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2019 - Parikh & Associates.in </b>All rights reserved.
            </div>
        </div>
        <script src="<?php echo base_url();?>design_admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>design_admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>design_admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>design_admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>design_admin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>design_admin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>design_admin/scripts/common.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>design_admin/scripts/datatables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        } );
    </script>
</body>
