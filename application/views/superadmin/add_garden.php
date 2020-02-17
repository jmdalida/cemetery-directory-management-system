<style type="text/css">
    /*Legend specific*/
    .legend {
      padding: 6px 8px;
      font: 12px Arial, Helvetica, sans-serif;
      background: white;
      background: rgba(255, 255, 255, 0.8);
      /*box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);*/
      /*border-radius: 5px;*/
      line-height: 15px;
      color: #555;
    }
    .legend h5 {
      text-align: left;
      font-size: 14px;
      margin: 2px 12px 8px;
      color: #777;
    }

    .legend span {
      position: relative;
      bottom: 3px;
    }

    .legend i {
      width: 20px;
      height: 10px;
      float: left;
      margin: 0 8px 0 0;
      opacity: 0.7;
    }

    .legend i.icon {
      background-size: 10px;
      background-color: rgba(255, 255, 255, 1);
    }
</style> 
    
            
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title" style="margin-top: -10px;"> 
                    Add Garden Location
                </h1> <!-- END PAGE TITLE-->   
                <div> 
                    <a href="<?php echo base_url(); ?>superadmin/view_garden">
                        <button type="button" class="btn yellow-gold"><i class="fa fa-arrow-left "></i> 
                         Back</button>
                    </a>
                    <a href="<?php echo base_url(); ?>superadmin/index">
                        <button type="button" class="btn yellow-gold"><i class="fa fa-home" aria-hidden="true"> </i>
                         Home</button>
                    </a>
                </div>
                <br>           
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box yellow-gold">
                            <div class="portlet-title">
                                <div class="caption">
                                   Cemetery Map </div>
                                </div>  
                                <div class="portlet-body">
                                    <div id = "map" style = "width: 100%; height:100%; "></div>      
                                </div>
                            </div>      
                        </div><!-- END EXAMPLE TABLE PORTLET--> 
                        <div class="col-md-3 col-sm-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box yellow-gold">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Gaden Location Form</div>
                                    </div>
                                    <div class="portlet-body">
                                    <?php echo form_open_multipart('superadmin/add_garden'); ?>
                                        <div class="form-body">
                                            <div class="row">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputName">Garden Name</label>
                                                        <input type="text" class="form-control" placeholder ="Enter garden name" name="garden_name" required>
                                                        <?php echo form_error('garden_name','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: #40d419;" ></i> 1st Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long1" id="Latitude_1"  readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="garden_lat1" id="Longitude_1" readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: red;" ></i> 2nd Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control" name="garden_long2" id="Latitude_2"  readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="garden_lat2" id="Longitude_2"  readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: orange;" ></i> 3rd Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long3" id="Latitude_3"  readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="garden_lat3" id="Longitude_3"  readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: blue;" ></i> 4th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control" name="garden_long4" id="Latitude_4" readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="garden_lat4" id="Longitude_4"readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: #cc16cc;" ></i> 5th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control" name="garden_long5" id="Latitude_5" readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="garden_lat5" id="Longitude_5" readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: darkgreen;" ></i> 6th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control" name="garden_long6" id="Latitude_6"  readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="garden_lat6" id="Longitude_6"   readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: darkred;" ></i> 7th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long7"  id="Latitude_7" readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="garden_lat7"  id="Longitude_7"   readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: darkblue;" ></i> 8th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control" name="garden_long8" id="Latitude_8"  readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="garden_lat8" id="Longitude_8"  readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: purple;" ></i> 9th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long9" id="Latitude_9"  readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="garden_lat9" id="Longitude_9"   readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: black;" ></i> 10th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long10" id="Latitude_10" 
                                                        readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="garden_lat10" id="Longitude_10" readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: gray;" ></i> 11th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long11" id="Latitude_11"readonly>  
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="garden_lat11" id="Longitude_11" readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: #b3ff68;" ></i> 12th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long12" id="Latitude_12" readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="garden_lat12" id="Longitude_12"readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: #ff8c8c;" ></i> 13th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control" name="garden_long13"id="Latitude_13"readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="garden_lat13"  id="Longitude_13" readonly>  
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: #ff70ff;" ></i> 14th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long14" id="Latitude_14" readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="garden_lat14" id="Longitude_14"
                                                          readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color: ##81c5f5;" ></i> 15th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long15" id="Latitude_15" 
                                                        readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="garden_lat15" id="Longitude_15"  readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label><i class="fa fa-map-marker" style=" color:#d5ecce;" ></i> 16th Coordinates</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Latitude</label>
                                                        <input type="text" class="form-control"  name="garden_long16" id="Latitude_16" readonly> 
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="garden_lat16" id="Longitude_16" readonly> 
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <br>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn yellow-gold" style="float: right;"> <i class="fa fa-check"></i> Submit</button>
                                                <a href="<?php echo base_url();?>superadmin/view_garden" class="btn dark" style="margin-right: 80px; "> <i class="fa fa-remove"></i> Cancel</a> 
                                            </div>
                                        </div>
                                        </form> <!-- END FORM-->
                                    </div>
                                </div>
                            </div><!-- END EXAMPLE TABLE PORTLET-->
                        </div><!--COL-->
                    </div><!-- COL-->
                </div><!--ROW -->
            </div> <!-- CONTENT WRAPPER -->      
        </div><!-- END CONTAINER -->
    <div><!-- page-wrapper -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner" style="color: silver;"> Saint Michael Memorial Park
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div><!-- END FOOTER -->
            
    <div class="quick-nav-overlay"></div>
        
    <!-- BEGIN CORE PLUGINS -->
    <!-- JQUERY  -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/jquery.min.js");?>" 
    type="text/javascript"></script>
    <!-- BOOTSTRAP  -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/bootstrap/js/bootstrap.min.js");?>" type="text/javascript"></script>
    <!-- JS COOKIES -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/js.cookie.min.js");?>" type="text/javascript"></script>
    <!-- JQUERY  BLOCKUI -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/jquery.blockui.min.js");?>" type="text/javascript"></script>
    <!-- BOOTSTRAP SWITCH -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js");?>" type="text/javascript"></script>
    <!-- DATATABLE -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/datatables/datatables.min.js");?>" type="text/javascript"></script>
    <!-- DATATABLE BOOSTRAP -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js");?>" type="text/javascript"></script>
    <!-- BOOTSTRAP FILEINPUT -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js");?>" type="text/javascript"></script>
    <!-- SELECT 2 FULL -->
    <script src="<?php echo base_url("admin_template/assets/global/plugins/select2/js/select2.full.min.js");?>" type="text/javascript"></script>
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
    <script src="<?php echo base_url("admin_template/assets/layouts/layout/scripts/layout.min.js");?>" type="text/javascript"></script>
    <!-- DEMO -->
    <script src="<?php echo base_url("admin_template/assets/layouts/layout/scripts/demo.min.js");?>" type="text/javascript"></script>
    <!-- QUICK SIDEBAR -->
    <script src="<?php echo base_url("admin_template/assets/layouts/global/scripts/quick-sidebar.min.js");?>" type="text/javascript"></script>
    <!-- QUICK NAVBAR -->
    <script src="<?php echo base_url("admin_template/assets/layouts/global/scripts/quick-nav.min.js");?>" type="text/javascript"></script>
    <!-- LEAFLET -->
    <script src="<?php echo base_url("user_template/leaflet/leaflet.js"); ?>"></script> 
    <script src="<?php echo base_url("user_template/leaflet/Leaflet.Coordinates-0.1.5.min.js"); ?>">  </script>
    <script src="<?php echo base_url("user_template/leaflet/leaflet.awesome-markers.js"); ?>"></script> 
        
  

    <script>
        
        var map = L.map('map').setView([-1.055588,2.109375],1); 
        var base_url = "<?=base_url()?>";
  
        // Creating a Layer object

        L.tileLayer('<?php echo base_url("user_template/map/{z}/{x}/{y}.png"); ?>',
        {
            minZoom: 2,
            maxZoom: 4,
            continousWorld: false,
            noWrap: true,
        } ).addTo(map);

        var bounds = new L.LatLngBounds(new L.LatLng(-70.020587,-132.242584), new L.LatLng(69.900118,140.680943));

        map.fitBounds(bounds);
        //add standard controls
        L.control.coordinates().addTo(map);
        //add configured controls
        L.control.coordinates({
        position:"bottomleft",
        decimals:6,
        decimalSeperator:".",
        labelTemplateLat:"Latitude: {y}",
        labelTemplateLng:"Longitude: {x}"
        }).addTo(map);


        /*Legend specific*/
       var legend = L.control({ position: "bottomright" });

        legend.onAdd = function(map) {
          var div = L.DomUtil.create("div", "legend");
          div.innerHTML += "<h6>Legend:</h6>";
          div.innerHTML += '<i style="background: #e8851e"></i><span>Garden </span><br>';
          div.innerHTML += '<i style="background: #28a745"></i><span>Block</span><br>';
          div.innerHTML += '<i style="background: #dc3545"></i><span>Lot</span><br>';
          return div;
        };

      legend.addTo(map);

        var a = new L.LatLng(0.35156,-74.443359),
        b = new L.LatLng(26.74561, -40.078125),
        c = new L.LatLng(54.826008, -32.519531),
        d = new L.LatLng(40.245992, 10.283203),
        e = new L.LatLng(44.465151, 18.457031),
        f = new L.LatLng(46.073231, 56.689453),
        g = new L.LatLng(29.22889, 71.542969),
        h = new L.LatLng(28.921631, 75.146484),
        i = new L.LatLng(21.043491, 80.15625),
        j = new L.LatLng(21.698265, 83.759766),
        k = new L.LatLng(13.496473, 88.945313),
        l = new L.LatLng(-8.233237, 45.263672),
        m = new L.LatLng(-15.961329,49.042969),
        n = new L.LatLng(-34.813803, 9.404297),
        o = new L.LatLng(-40.84706,7.382813),
        p = new L.LatLng(-39.164141, -23.027344),
        q = new L.LatLng(0.35156,-74.443359);
       
                
        var marker_a = new L.Marker(a, { draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'green', spin:true}),}).addTo(map), 
        marker_b = new L.Marker(b, {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'red', spin:true}),}).addTo(map),
        marker_c = new L.Marker(c,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'orange', spin:true}),}).addTo(map),
        marker_d = new L.Marker(d,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'blue', spin:true}),}).addTo(map),
        marker_e = new L.Marker(e,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'purple', spin:true}),}).addTo(map),
         marker_f = new L.Marker(f, {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'darkgreen', spin:true}),}).addTo(map),
        marker_g = new L.Marker(g,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'darkred', spin:true}),}).addTo(map),
        marker_h = new L.Marker(h,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'darkblue', spin:true}),}).addTo(map),
        marker_i = new L.Marker(i,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'darkpurple', spin:true}),}).addTo(map),
         marker_j = new L.Marker(j, {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'black', spin:true}),}).addTo(map),
        marker_k = new L.Marker(k,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'gray', spin:true}),}).addTo(map),
        marker_l = new L.Marker(l,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'lightgreen', spin:true}),}).addTo(map),
        marker_m = new L.Marker(m,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'lightred', spin:true}),}).addTo(map),
         marker_n = new L.Marker(n, {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'pink', spin:true}),}).addTo(map),
        marker_o = new L.Marker(o,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'lightblue', spin:true}),}).addTo(map),
        marker_p = new L.Marker(p,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'white', spin:true}),}).addTo(map),
        marker_q = new L.Marker(q,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'green', spin:true}),}).addTo(map);
       
        marker_b.bindPopup('<b>Drag the marker to see the coordinates</b>').openPopup();
        var polyline = new L.Polyline([a, b, c, d, e,f,g,h,i,j,k,l,m,n,o,p,q]).addTo(map);

       

        marker_a
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_b
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_c
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_d
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_e
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);


        marker_f
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_g
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_h
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_i
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_j
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_k
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_l
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_m
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_n
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_o
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_p
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        marker_q
          .on('dragstart', dragStartHandler)
          .on('drag', dragHandler)
          .on('dragend', dragEndHandler);

        

        function dragStartHandler (e) 
        {
            // Get the polyline's latlngs
            var latlngs = polyline.getLatLngs(),

            // Get the marker's start latlng
            latlng = this.getLatLng();

            // Iterate the polyline's latlngs
            for (var i = 0; i < latlngs.length; i++)
          {
           // Compare each to the marker's latlng
           if (latlng.equals(latlngs[i])) 
            {
             // If equals store key in marker instance
             this.polylineLatlng = i;
            }
            }
         }

        function dragHandler (e) 
        {

          var latlngs = polyline.getLatLngs(),
         
          latlng = this.getLatLng();
          latlngs.splice(this.polylineLatlng, 1, latlng);

          polyline.setLatLngs(latlngs);

          var position_a = marker_a.getLatLng();
           
          marker_a.setLatLng(position_a, {draggable: 'true'}).bindPopup(position_a).update();
          $("#Latitude_1").val(position_a.lat);
          $("#Longitude_1").val(position_a.lng).keyup();

          $("#Latitude_1, #Longitude_1").change(function() {
          var position_a = [parseInt($("#Latitude_1").val()), parseInt($("#Longitude_1").val())];
             marker.setLatLng(position_a, {
             draggable: 'true', }).bindPopup(position_a).update();
             map.panTo(position_a);
          });

          var position_b = marker_b.getLatLng();

          marker_b.setLatLng(position_b, {draggable: 'true'}).bindPopup(position_b).update();
          $("#Latitude_2").val(position_b.lat);
          $("#Longitude_2").val(position_b.lng).keyup();

          $("#Latitude_2, #Longitude_2").change(function() {
          var position_b = [parseInt($("#Latitude_2").val()), parseInt($("#Longitude_2").val())];
          marker.setLatLng(position_b, {
          draggable: 'true',}).bindPopup(position_b).update();
          map.panTo(position_b);
          });


          var position_c = marker_c.getLatLng();

          marker_c.setLatLng(position_c, {draggable: 'true'}).bindPopup(position_c).update();
          $("#Latitude_3").val(position_c.lat);
          $("#Longitude_3").val(position_c.lng).keyup();

          $("#Latitude_3, #Longitude_3").change(function() {
          var position_c = [parseInt($("#Latitude_3").val()), parseInt($("#Longitude_3").val())];
          marker.setLatLng(position_c, {
          draggable: 'true',}).bindPopup(position_c).update();
          map.panTo(position_c);
          });

          var position_d = marker_d.getLatLng(); 

          marker_d.setLatLng(position_d, {
          draggable: 'true'
          }).bindPopup(position_d).update();
          $("#Latitude_4").val(position_d.lat);
          $("#Longitude_4").val(position_d.lng).keyup();

          $("#Latitude_4, #Longitude_4").change(function() {
          var position_d = [parseInt($("#Latitude_4").val()), parseInt($("#Longitude_4").val())];
          marker.setLatLng(position_d, {
          draggable: 'true',}).bindPopup(position_d).update();
          map.panTo(position_d);
          });

          var position_e = marker_e.getLatLng(); 

          marker_e.setLatLng(position_e, {
          draggable: 'true'
          }).bindPopup(position_e).update();
          $("#Latitude_5").val(position_e.lat);
          $("#Longitude_5").val(position_e.lng).keyup();

          $("#Latitude_5, #Longitude_5").change(function() {
          var position_e = [parseInt($("#Latitude_5").val()), parseInt($("#Longitude_5").val())];
          marker.setLatLng(position_e, {
          draggable: 'true',}).bindPopup(position_e).update();
          map.panTo(position_e);
          });

         var position_f = marker_f.getLatLng(); 

          marker_f.setLatLng(position_f, {
          draggable: 'true'
          }).bindPopup(position_f).update();
          $("#Latitude_6").val(position_f.lat);
          $("#Longitude_6").val(position_f.lng).keyup();

          $("#Latitude_6, #Longitude_6").change(function() {
          var position_f = [parseInt($("#Latitude_6").val()), parseInt($("#Longitude_6").val())];
          marker.setLatLng(position_f, {
          draggable: 'true',}).bindPopup(position_f).update();
          map.panTo(position_f);
          });

        var position_g = marker_g.getLatLng(); 

          marker_g.setLatLng(position_g, {
          draggable: 'true'
          }).bindPopup(position_g).update();
          $("#Latitude_7").val(position_g.lat);
          $("#Longitude_7").val(position_g.lng).keyup();

          $("#Latitude_7, #Longitude_7").change(function() {
          var position_g = [parseInt($("#Latitude_7").val()), parseInt($("#Longitude_7").val())];
          marker.setLatLng(position_g, {
          draggable: 'true',}).bindPopup(position_g).update();
          map.panTo(position_g);
          });

           var position_h = marker_h.getLatLng(); 

          marker_h.setLatLng(position_h, {
          draggable: 'true'
          }).bindPopup(position_h).update();
          $("#Latitude_8").val(position_h.lat);
          $("#Longitude_8").val(position_h.lng).keyup();

          $("#Latitude_8, #Longitude_8").change(function() {
          var position_h = [parseInt($("#Latitude_8").val()), parseInt($("#Longitude_8").val())];
          marker.setLatLng(position_f, {
          draggable: 'true',}).bindPopup(position_h).update();
          map.panTo(position_h);
          });

        var position_i = marker_i.getLatLng(); 

          marker_i.setLatLng(position_i, {
          draggable: 'true'
          }).bindPopup(position_i).update();
          $("#Latitude_9").val(position_i.lat);
          $("#Longitude_9").val(position_i.lng).keyup();

          $("#Latitude_9, #Longitude_9").change(function() {
          var position_i = [parseInt($("#Latitude_9").val()), parseInt($("#Longitude_9").val())];
          marker.setLatLng(position_i, {
          draggable: 'true',}).bindPopup(position_i).update();
          map.panTo(position_i);
          });

        var position_j = marker_j.getLatLng(); 

          marker_j.setLatLng(position_j, {
          draggable: 'true'
          }).bindPopup(position_j).update();
          $("#Latitude_10").val(position_j.lat);
          $("#Longitude_10").val(position_j.lng).keyup();

          $("#Latitude_10, #Longitude_10").change(function() {
          var position_j = [parseInt($("#Latitude_10").val()), parseInt($("#Longitude_10").val())];
          marker.setLatLng(position_j, {
          draggable: 'true',}).bindPopup(position_j).update();
          map.panTo(position_j);
          });

          var position_k = marker_k.getLatLng(); 

          marker_k.setLatLng(position_k, {
          draggable: 'true'
          }).bindPopup(position_k).update();
          $("#Latitude_11").val(position_k.lat);
          $("#Longitude_11").val(position_k.lng).keyup();

          $("#Latitude_11, #Longitude_11").change(function() {
          var position_k = [parseInt($("#Latitude_11").val()), parseInt($("#Longitude_11").val())];
          marker.setLatLng(position_k, {
          draggable: 'true',}).bindPopup(position_k).update();
          map.panTo(position_k);
          });

          var position_l = marker_l.getLatLng(); 

          marker_l.setLatLng(position_l, {
          draggable: 'true'
          }).bindPopup(position_l).update();
          $("#Latitude_12").val(position_l.lat);
          $("#Longitude_12").val(position_l.lng).keyup();

          $("#Latitude_12, #Longitude_12").change(function() {
          var position_l = [parseInt($("#Latitude_12").val()), parseInt($("#Longitude_12").val())];
          marker.setLatLng(position_l, {
          draggable: 'true',}).bindPopup(position_l).update();
          map.panTo(position_l);
          });

          var position_m = marker_m.getLatLng(); 

          marker_m.setLatLng(position_m, {
          draggable: 'true'
          }).bindPopup(position_i).update();
          $("#Latitude_13").val(position_m.lat);
          $("#Longitude_13").val(position_m.lng).keyup();

          $("#Latitude_13, #Longitude_13").change(function() {
          var position_m = [parseInt($("#Latitude_13").val()), parseInt($("#Longitude_13").val())];
          marker.setLatLng(position_m, {
          draggable: 'true',}).bindPopup(position_m).update();
          map.panTo(position_m);
          });

          var position_n = marker_n.getLatLng(); 

          marker_n.setLatLng(position_n, {
          draggable: 'true'
          }).bindPopup(position_n).update();
          $("#Latitude_14").val(position_n.lat);
          $("#Longitude_14").val(position_n.lng).keyup();

          $("#Latitude_14, #Longitude_14").change(function() {
          var position_n = [parseInt($("#Latitude_14").val()), parseInt($("#Longitude_14").val())];
          marker.setLatLng(position_n, {
          draggable: 'true',}).bindPopup(position_n).update();
          map.panTo(position_n);
          });

          var position_o = marker_o.getLatLng(); 

          marker_o.setLatLng(position_o, {
          draggable: 'true'
          }).bindPopup(position_o).update();
          $("#Latitude_15").val(position_o.lat);
          $("#Longitude_15").val(position_o.lng).keyup();

          $("#Latitude_15, #Longitude_15").change(function() {
          var position_o = [parseInt($("#Latitude_15").val()), parseInt($("#Longitude_15").val())];
          marker.setLatLng(position_o, {
          draggable: 'true',}).bindPopup(position_o).update();
          map.panTo(position_o);
          });

          var position_p = marker_p.getLatLng(); 

          marker_p.setLatLng(position_p, {
          draggable: 'true'
          }).bindPopup(position_p).update();
          $("#Latitude_16").val(position_p.lat);
          $("#Longitude_16").val(position_p.lng).keyup();

          $("#Latitude_16, #Longitude_16").change(function() {
          var position_p = [parseInt($("#Latitude_16").val()), parseInt($("#Longitude_16").val())];
          marker.setLatLng(position_p, {
          draggable: 'true',}).bindPopup(position_p).update();
          map.panTo(position_p);
          });
        }

        function dragEndHandler (e) 
        {
          delete this.polylineLatlng;
        }

        $.getJSON(base_url+"superadmin/map_gardens", function(data) 
    {
      $.each(data, function(i, field)
      {
        var mapgarden_longitude_1 = parseFloat(data[i].garden_long1);
        var mapgarden_latitude_1 = parseFloat(data[i].garden_lat1);
        var mapgarden_longitude_2 = parseFloat(data[i].garden_long2);
        var mapgarden_latitude_2 = parseFloat(data[i].garden_lat2);
        var mapgarden_longitude_3 = parseFloat(data[i].garden_long3);
        var mapgarden_latitude_3 = parseFloat(data[i].garden_lat3);
        var mapgarden_longitude_4 = parseFloat(data[i].garden_long4);
        var mapgarden_latitude_4 = parseFloat(data[i].garden_lat4);
        var mapgarden_longitude_5 = parseFloat(data[i].garden_long5);
        var mapgarden_latitude_5 = parseFloat(data[i].garden_lat5);
        var mapgarden_longitude_6 = parseFloat(data[i].garden_long6);
        var mapgarden_latitude_6 = parseFloat(data[i].garden_lat6);
        var mapgarden_longitude_7 = parseFloat(data[i].garden_long7);
        var mapgarden_latitude_7 = parseFloat(data[i].garden_lat7);
        var mapgarden_longitude_8 = parseFloat(data[i].garden_long8);
        var mapgarden_latitude_8 = parseFloat(data[i].garden_lat8);
        var mapgarden_longitude_9 = parseFloat(data[i].garden_long9);
        var mapgarden_latitude_9 = parseFloat(data[i].garden_lat9);
        var mapgarden_longitude_10 = parseFloat(data[i].garden_long10);
        var mapgarden_latitude_10 = parseFloat(data[i].garden_lat10);
        var mapgarden_longitude_11 = parseFloat(data[i].garden_long11);
        var mapgarden_latitude_11 = parseFloat(data[i].garden_lat11);
        var mapgarden_longitude_12 = parseFloat(data[i].garden_long12);
        var mapgarden_latitude_12 = parseFloat(data[i].garden_lat12);
        var mapgarden_longitude_13 = parseFloat(data[i].garden_long13);
        var mapgarden_latitude_13 = parseFloat(data[i].garden_lat13);
        var mapgarden_longitude_14 = parseFloat(data[i].garden_long14);
        var mapgarden_latitude_14 = parseFloat(data[i].garden_lat14);
        var mapgarden_longitude_15 = parseFloat(data[i].garden_long15);
        var mapgarden_latitude_15 = parseFloat(data[i].garden_lat15);
        var mapgarden_longitude_16 = parseFloat(data[i].garden_long16);
        var mapgarden_latitude_16 = parseFloat(data[i].garden_lat16);
                 
        var polylinePoints_2 = [
        
        [mapgarden_longitude_1, mapgarden_latitude_1],
        [mapgarden_longitude_2, mapgarden_latitude_2],
        [mapgarden_longitude_3, mapgarden_latitude_3],
        [mapgarden_longitude_4, mapgarden_latitude_4],
        [mapgarden_longitude_5, mapgarden_latitude_5],
        [mapgarden_longitude_6, mapgarden_latitude_6],
        [mapgarden_longitude_7, mapgarden_latitude_7],
        [mapgarden_longitude_8, mapgarden_latitude_8],
        [mapgarden_longitude_9, mapgarden_latitude_9], 
        [mapgarden_longitude_10, mapgarden_latitude_10],
        [mapgarden_longitude_11, mapgarden_latitude_11],
        [mapgarden_longitude_12, mapgarden_latitude_12],
        [mapgarden_longitude_13, mapgarden_latitude_13],
        [mapgarden_longitude_14, mapgarden_latitude_14],
        [mapgarden_longitude_15, mapgarden_latitude_15],
        [mapgarden_longitude_16, mapgarden_latitude_16],
        [mapgarden_longitude_1, mapgarden_latitude_1]];            
      
        var polyline = L.polyline(polylinePoints_2, {
        color: "#e8851e",
        
        }).addTo(map);
         polyline.bindPopup( "</br>"+"This is"+" "+data[i].garden_name+ "</br>"); 
      });             
    });

        </script>
    </body>

</html>
