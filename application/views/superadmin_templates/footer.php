            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
          <!--   <div class="page-footer">
                <div class="page-footer-inner" style="color: white;">Saint Michael Memorial Park
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div> -->
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!-- BEGIN CORE PLUGINS -->
        <!-- JQUERY  -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/jquery.min.js");?>" type="text/javascript"></script>
        <!-- BOOTSTRAP  -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/bootstrap/js/bootstrap.min.js");?>" type="text/javascript"></script>
        <!-- JS COOKIES -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/js.cookie.min.js");?>" type="text/javascript"></script>
        <!-- JQUERY  BLOCKUI -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/jquery.blockui.min.js");?>" type="text/javascript">
        </script>
        <!-- BOOTSTRAP SWITCH -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js");?>" type="text/javascript"></script>
        <!-- MOMENT -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/moment.min.js");?>" type="text/javascript"></script>
        <!-- DATE RANGE PICKER -->
       <script src="<?php echo base_url("admin_template/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js");?>" type="text/javascript"></script>
        <!-- MORRIS -->
       <script src="<?php echo base_url("admin_template/assets/global/plugins/morris/morris.min.js");?>" type="text/javascript"></script>
        <!-- RAPHAEL -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/morris/raphael-min.js");?>" type="text/javascript">
        </script>
        <!-- BOOTSTRAP FILEINPUT -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js");?>" type="text/javascript"></script>
        <!-- SELECT 2 FULL -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/select2/js/select2.full.min.js");?>"type="text/javascript"></script>
        <!-- JQUERY  VALIDATE -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/jquery-validation/js/jquery.validate.min.js");?>" type="text/javascript"></script>
        <!-- ADDITIONAL METHOD -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/jquery-validation/js/additional-methods.min.js");?>" type="text/javascript"></script>
        <!--JQUERY BOOTSTRAP WIZARD -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js");?>" type="text/javascript"></script>
        <!-- JQUERY  SPARKLINE -->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/jquery.sparkline.min.js");?>" type="text/javascript"></script>
        <!-- APP -->
        <script src="<?php echo base_url("admin_template/assets/global/scripts/app.min.js");?>" type="text/javascript"></script>
        <!-- FORM WIZARD -->
        <script src="<?php echo base_url("admin_template/assets/pages/scripts/form-wizard.min.js");?>" type="text/javascript"></script>
        <!-- PROFILE -->
        <script src="<?php echo base_url("admin_template/assets/pages/scripts/profile.min.js");?>" type="text/javascript"></script>
        <!-- LAYOUT -->
        <script src="<?php echo base_url("admin_template/assets/layouts/layout/scripts/layout.min.js");?>" type="text/javascript">
        </script>
        <!-- DEMO -->
        <script src="<?php echo base_url("admin_template/assets/layouts/layout/scripts/demo.min.js");?>" type="text/javascript"></script>
        <!-- QUICK SIDEBAR -->
        <script src="<?php echo base_url("admin_template/assets/layouts/global/scripts/quick-sidebar.min.js");?>" type="text/javascript"></script>
        <!-- QUICK NAVBAR -->
        <script src="<?php echo base_url("admin_template/assets/layouts/global/scripts/quick-nav.min.js");?>" type="text/javascript"></script>
        


        <!-- <script src="<?php //echo base_url("admin_template/assets/pages/scripts/dashboard.min.js");?>" type="text/javascript"></script> -->
        
        
       
       
        <!-- END CORE PLUGINS -->
         <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!--  <script src="<?php //echo base_url("admin_template/assets/global/scripts/datatable.js");?>../" type="text/javascript"></script>-->
        <script src="<?php echo base_url("admin_template/assets/global/plugins/datatables/datatables.min.js");?>" type="text/javascript"></script>
        <script src="<?php echo base_url("admin_template/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js");?>" type="text/javascript"></script>
       
        <script src="<?php echo base_url("admin_template/assets/pages/scripts/table-datatables-buttons.min.js");?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        
        
        
        <script src="<?php echo base_url("user_template/leaflet/leaflet.js"); ?>"></script> 
        <script src="<?php echo base_url("user_template/leaflet/Leaflet.Coordinates-0.1.5.min.js"); ?>"></script> 
        <script>
        
            var map = L.map('map').setView([-1.055588,2.109375],1); 
            var base_url = "<?=base_url()?>";

            L.tileLayer('<?php echo base_url("user_template/map/{z}/{x}/{y}.png"); ?>',
            {
                minZoom: 2,
                maxZoom: 4,
                continousWorld: false,
                noWrap: true,
            } ).addTo(map);
        </script>
    </body>
</html>


