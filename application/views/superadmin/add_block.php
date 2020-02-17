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
                   Add Block Location
                </h1> <!-- END PAGE TITLE-->   
                 <div> 
                    <a href="<?php echo base_url(); ?>superadmin/view_block">
                        <button type="button" class="btn green-jungle"><i class="fa fa-arrow-left "></i> 
                         Back</button>
                    </a>
                    <a href="<?php echo base_url(); ?>superadmin/index">
                        <button type="button" class="btn green-jungle"><i class="fa fa-home" aria-hidden="true"> </i>
                         Home</button>
                    </a>
                </div>
                <br>           
                <div class="row">
                    <div class="col-md-9 col-sm-12">
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
                        <div class="col-md-3 col-sm-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green-jungle">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i> Block Location Form</div>
                                    </div>
                                    <div class="portlet-body">
                                    <?php echo form_open_multipart('superadmin/add_block'); ?>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                         <label>Garden</label>
                                                        <select name="garden_id" class="form-control"  >
                                                        <?php foreach ( $garden as $garden_name) :?>
                                                            <option value="<?php echo $garden_name['garden_id']; ?>"><?php echo  $garden_name['garden_name']; ?></option>
                                                        <?php endforeach; ?>
                                                        </select>
                                                        <?php echo form_error('garden_id','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputName">Block Name</label>
                                                        <input type="text" class="form-control" placeholder ="Enter block name" name="block_name" required>
                                                        <?php echo form_error('block_name','<div class="text-danger">'); ?>
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
                                                        <input type="text" class="form-control"  name="block_long1" id="Latitude_1"readonly>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="block_lat1" id="Longitude_1" readonly>
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
                                                        <input type="text" class="form-control" name="block_long2" id="Latitude_2" readonly>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="block_lat2" id="Longitude_2" readonly>
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
                                                        <input type="text" class="form-control"  name="block_long3" id="Latitude_3" readonly>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control" name="block_lat3" id="Longitude_3" readonly>
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
                                                        <input type="text" class="form-control" name="block_long4" id="Latitude_4" readonly>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Longitude</label>
                                                        <input type="text" class="form-control"  name="block_lat4" id="Longitude_4"readonly>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <br>
                                            <div class="form-actions right">
                                                <button class="btn green-jungle" style="float: right;"> <i class="fa fa-check"></i> Submit</button>
                                                <a href="<?php echo base_url(); ?>superadmin/view_block" class="btn dark" style="margin-right: 80px; "> <i class="fa fa-remove"></i> Cancel</a> 
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
         // div.innerHTML += '<i style="background: #dc3545"></i><span>Lot</span><br>';
          return div;
        };

      legend.addTo(map);

        var a = new L.LatLng(6.664607562172573,-14.735436070979338),
        b = new L.LatLng(22.59372606392931, 11.963998737467163),
        c = new L.LatLng(15.961329081596647, 24.973957369862003),
        d = new L.LatLng(-1.0546279422758742, 3.8671875000000004),
        e = new L.LatLng(6.664607562172573,-14.735436070979338);
        
                
        var marker_a = new L.Marker(a, { draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'green', spin:true}),}).addTo(map), 
        marker_b = new L.Marker(b, {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'red', spin:true}),}).addTo(map),
        marker_c = new L.Marker(c,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'orange', spin:true}),}).addTo(map),
        marker_d = new L.Marker(d,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'blue', spin:true}),}).addTo(map),
        marker_e = new L.Marker(e,  {draggable: true, icon: L.AwesomeMarkers.icon({icon: '', prefix: 'fa', markerColor: 'green', spin:true}),}).addTo(map);
        
       
        marker_b.bindPopup('<b>Drag the marker to see the coordinates</b>').openPopup();
        var polyline = new L.Polyline([a, b, c, d, e]).addTo(map);

       

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
