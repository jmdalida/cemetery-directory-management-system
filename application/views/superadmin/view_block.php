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
                <br>
                <div>
                  <?php if($this->session->flashdata('block_created')): ?>
                    <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('block_created').'</h4>' ?>
                  <?php endif; ?>

                  <?php if($this->session->flashdata('block_updated')): ?>
                    <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('block_updated').'</h4>' ?>
                  <?php endif; ?>
                </div>
                <h1 class="page-title" style="margin-top: -10px;"> 
                    Block Location
                </h1> <!-- END PAGE TITLE-->              
                <div class="btn-group">
                    <a  class="btn sbold green-jungle" href="<?php echo site_url('superadmin/add_block');?>"> <i class="fa fa-plus"></i> Add New </a>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box green-jungle">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-cogs"></i>Cemetery Map </div>
                                </div>  
                                <div class="portlet-body">
                                    <div id = "map" style = "width: 100%; height:100%; "></div>      
                                </div>
                            </div>      
                        </div><!-- END EXAMPLE TABLE PORTLET--> 
                        <div class="col-md-4 col-sm-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green-jungle">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i> Block Table </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-bordered table-striped" 
                                        id="sample_3">
                                            <thead>
                                                <tr>
                                                  <th>Garden </th>
                                                  <th>Block</th>
                                                  <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if( count($block_records)): ?>
                                                <?php foreach ($block_records as $records ): ?>
                                                <tr>
                                                    <td> <?php echo $records ['garden_name']; ?> </td>
                                                    <td> <?php echo $records ['block_name']; ?> </td>
                                                    <td class="clearfix">
                                                        <a class="btn btn-sbold green btn-sm" href="<?php echo site_url('superadmin/edit_block/'.$records['block_id']); ?>">
                                                            <i class="fa fa-edit" ></i> Edit   
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach ; ?>
                                                <?php else: ?>
                                                  <tr> No Records Found!</tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>   
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
        <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
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
    <!-- TABLE DATATABLES BUTTONS -->
    <script src="<?php echo base_url("admin_template/assets/pages/scripts/table-datatables-buttons.min.js");?>" type="text/javascript"></script>
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
    <script src="<?php echo base_url("user_template/leaflet/Leaflet.Coordinates-0.1.5.min.js"); ?>"></script> 

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
          //div.innerHTML += '<i style="background: #dc3545"></i><span>Lot</span><br>';
          return div;
        };

      legend.addTo(map);

        
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
        
       var polylinePoints_1 = [

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
      
        var polyline = L.polyline(polylinePoints_1, {
        color: "#e8851e",
        
        }).addTo(map); 

        polyline.bindPopup( "</br>"+"This is"+" "+data[i].garden_name+ "</br>");

       });
                  
    });

   
    $.getJSON(base_url+"superadmin/map_blocks", function(data) 
    {
       $.each(data, function(i, field)
       {

         var mapblocks_longitude_1 = parseFloat(data[i].block_long1);
         var mapblocks_latitude_1 = parseFloat(data[i].block_lat1);
         var mapblocks_longitude_2 = parseFloat(data[i].block_long2);
         var mapblocks_latitude_2 = parseFloat(data[i].block_lat2);
         var mapblocks_longitude_3 = parseFloat(data[i].block_long3);
        var mapblocks_latitude_3 = parseFloat(data[i].block_lat3);
         var mapblocks_longitude_4 = parseFloat(data[i].block_long4);
         var mapblocks_latitude_4 = parseFloat(data[i].block_lat4);

         var polygonPoints = [
         [mapblocks_longitude_1, mapblocks_latitude_1],
        [mapblocks_longitude_2, mapblocks_latitude_2],
         [mapblocks_longitude_3, mapblocks_latitude_3],
        [mapblocks_longitude_4, mapblocks_latitude_4]];

        var poly = L.polygon([polygonPoints],{
         color: "green"
         }).addTo(map);

        poly.bindPopup("</br>"+"This is"+" "+data[i].block_name+ "</br>");

       });

    });
        
    </script>
</body>
</html>
