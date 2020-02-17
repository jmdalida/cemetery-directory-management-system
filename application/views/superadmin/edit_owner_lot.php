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
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?php echo base_url(); ?>superadmin/index">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Edit Reserved Lot Information</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right"></div>
            </div>
        </div><!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">
            Edit Reserved Lot Information
        </h1><!-- END PAGE TITLE-->
        <div> 
            <a href="<?php echo base_url(); ?>superadmin/view_owner">
                <button type="button" class="btn green"><i class="fa fa-arrow-left "></i> 
                 Back</button>
            </a>
            <a href="<?php echo base_url(); ?>superadmin/index">
                <button type="button" class="btn green"><i class="fa fa-home" aria-hidden="true"> </i>
                 Home</button>
            </a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <div class="tab-pane" id="tab_1">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>RESERVED LOT FORM</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                 <div class="portlet-body form">
                                    <?php echo form_open_multipart('superadmin/update_owner_lot'); ?>
                                        <div class="form-body">
                                           <h3 class="form-section">Lot Reservation </h3>
                                            <div class="row">
                                             <div class="col-md-10" style ="margin-left: 100px;">
                                                 <div id = "map" style = "width: 100%; height:100%; "></div>
                                                 <br>
                                                 <br>        
                                            </div>
                                            </div>
                                             <div class="row">
                                                 <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Owner fullname</label>
                                                        <select name="owner_id" class="form-control"  >
                                                        <?php foreach ($records as $name) :?>
                                                            <option value="<?php echo $name['owner_id']; ?>">
                                                                <?php echo  $name['owner_firstname']; ?>
                                                                <?php echo  $name['owner_middlename']; ?>
                                                                <?php echo  $name['owner_lastname']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Available Lot</label>
                                                        <select name="lot_id" class="form-control"  >
                                                        <?php foreach ($lots as $names) :?>
                                                            <option value="<?php echo $names['lot_id']; ?>"> 
                                                                <?php echo $names['garden_name']; ?> ,
                                                                <?php echo $names['block_name']; ?> ,
                                                                <?php echo $names['lot_name']; ?>      
                                                            </option>
                                                        <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName">Date Availed</label>
                                                        <input type="date" class="form-control"  name="date_avail" value="<?php echo $owner_lots['date_avail']; ?>" required>
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName"></label>
                                                        <input type="hidden" class="form-control"  name="owner_lot_id" value="<?php echo $owner_lots['owner_lot_id']; ?>" required>
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName"></label>
                                                        <input type="hidden" class="form-control"  name="occupant_id" value="<?php echo $owner_lots['occupant_id']; ?>" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <br>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn green" style="float: right;"> <i class="fa fa-check"></i> Save</button>
                                                <a href="<?php echo base_url(); ?>superadmin/view_owner" class="btn dark" style="margin-right: 820px; "> <i class="fa fa-remove"></i> Cancel</a> 
                                            </div>
                                        </div>
                                    </form> <!-- END FORM-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END CONTENT BODY -->
</div><!-- END CONTENT -->
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
    <script src="<?php echo base_url("user_template/leaflet/leaflet.plotter.js"); ?>"></script> 
    <script src="<?php echo base_url("user_template/leaflet/leaflet-beautify-marker-icon.js"); ?>"></script> 
        
  

    <script>
        
         // Creating a map object
    var map = L.map('map').setView([-1.055588,2.109375],1); 
    var base_url = "<?=base_url()?>";

    // Creating a Layer object
    L.tileLayer('<?php echo base_url("user_template/map/{z}/{x}/{y}.png"); ?>',
    {
      minZoom: 2,
      maxZoom: 4,
      continousWorld: false,
      noWrap: true,
    }).addTo(map);

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
    }).addTo(map); //mao ni siya bert naa diay sa taas ang code adto

    /*Legend specific*/
    var legend = L.control({ position: "bottomright" });

    legend.onAdd = function(map) {
      var div = L.DomUtil.create("div", "legend");
      div.innerHTML += "<h5>Legend:</h5>";
      div.innerHTML += '<i style="background: #e8851e"></i><span>Garden</span><br>';
      div.innerHTML += '<i style="background: #448D40"></i><span>Block</span><br>';
      div.innerHTML += '<i style="background: #ff0000"></i><span>Available Lot</span><br>';
      div.innerHTML += '<i style="background: #fff300"></i><span>Reserved Lot</span><br>';
      div.innerHTML += '<i style="background: #6cff00"></i><span>Occupied Lot</span><br>';

      return div;
    };

    legend.addTo(map);
    
    $.getJSON(base_url+"pages/map_gardens", function(data) 
    {a
       $.each(data, function(i, field)
      {

         var mapgarden_longitude_1 = parseFloat(data[0].garden_longitude1);
         var mapgarden_latitude_1 = parseFloat(data[0].garden_latitude1);
         var mapgarden_longitude_2 = parseFloat(data[0].garden_longitude2);
         var mapgarden_latitude_2 = parseFloat(data[0].garden_latitude2);
         var mapgarden_longitude_3 = parseFloat(data[0].garden_longitude3);
         var mapgarden_latitude_3 = parseFloat(data[0].garden_latitude3);
         var mapgarden_longitude_4 = parseFloat(data[0].garden_longitude4);
         var mapgarden_latitude_4 = parseFloat(data[0].garden_latitude4);
                 
         var polylinePoints = [

         [mapgarden_longitude_1, mapgarden_latitude_1],
         [mapgarden_longitude_2, mapgarden_latitude_2],
        [mapgarden_longitude_3, mapgarden_latitude_3],
        [mapgarden_longitude_4, mapgarden_latitude_4],
        [mapgarden_longitude_1, mapgarden_latitude_1]];            
      
        var polyline = L.polyline(polylinePoints).addTo(map); 

      });

    });

    $.getJSON(base_url+"pages/map_gardens", function(data) 
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

   
    $.getJSON(base_url+"pages/map_blocks", function(data) 
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

    $.getJSON(base_url+"pages/map_lots", function(data) 
    {

     
        $.each(data, function(i, field)
          {

              options = {
              iconShape: 'circle-dot'
                 , borderWidth: 5
                 , borderColor: data[i].color_status
                ,  radius: 50.0
          };

          var marker = L.marker([data[i].lot_long , data[i].lot_lat], { icon: L.BeautifyIcon.icon(options)})
                  .bindPopup(
                    "</br>"+"<strong>Garden</strong>"+" "+data[i].garden_name+ "</br>"+
                  "<strong>Block:</strong>"+" " +data[i].block_name + "</br>"+
                   "<strong>Lot:</strong>"+" " +data[i].lot_name + "</br>"+
                    "<strong>Burial Type:</strong>"+" " +data[i].type_name + "</br>" 
                   
                  ).openPopup().addTo(map);
          });

    
       
    }); 
    </script>
</body>
</html>
