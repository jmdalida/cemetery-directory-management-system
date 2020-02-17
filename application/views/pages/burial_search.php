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
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"><small>WELCOME TO ST. MICHEAL MEMORIAL PARK </small></h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pages/burial_search">Burial Search</a></li>
              <li class="breadcrumb-item active">Burial Search</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-teal card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">SEARCH YOUR LOVE ONE'S</h5>
              </div>
               <div class="card-body">                
               <div class="form-group">
                    <label for="inputName">First Name</label>
                    <input type="type" placeholder ="First name "class="form-control" name="deceased_firstname" required>
                    <?php echo form_error('deceased_firstname','<div class="text-danger">'); ?>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Last Name</label>
                    <input type="type" placeholder ="Last name "class="form-control" name="deceased_lastname" required>
                    <?php echo form_error('deceased_lastname','<div class="text-danger">'); ?>
                  </div>
                  <div class="form-group">
                      <button type="submit"  class="btn btn-success btn-block btn_search" >Search</button>     
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-8">
            <div class="card card-teal card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">CEMETERY MAP</h5>
              </div>
              <div class="card-body">
                <div  id="map"style = "width: 100%; height: 90%; "  > 
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                 <br>
                <br>
                <br>
                <br>
                <br>
                
              </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
<!-- ./wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url("user_template/plugins/jquery/jquery.min.js"); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url("user_template/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("user_template/dist/js/adminlte.min.js"); ?>"></script>
<!-- Leaflet -->
<script src="<?php echo base_url("user_template/leaflet/leaflet.js"); ?>"></script> 
<script src="<?php echo base_url("user_template/leaflet/leaflet-search.js"); ?>"></script> 
<script src="<?php echo base_url("user_template/leaflet/Leaflet.Coordinates-0.1.5.min.js"); ?>"></script> 
<script src="<?php echo base_url("user_template/leaflet/L.Polyline.SnakeAnim.js"); ?>"></script>
 <script >
    $(document).ready(function(){
      var prev_path = prev_marker = null;

      $('.btn_search').on('click',function(){

        var firstname = $('input[name="deceased_firstname"]').val();
        var lastname = $('input[name="deceased_lastname"]').val();
      /*  var f_firstname = firstname.replace(/ /g, '%20');
        var l_lastname = lastname.replace(/ /g, '%20');
*/
        var url = '<?=base_url()?>/pages/search_burial/'+firstname+'/'+lastname;
        console.log(url);
      
        $.getJSON(url, function(data){
          if (data == null) { alert("no results found!"); }
          
        console.log(data);
        
        
          var icon_grave = L.icon({

          iconUrl:  "<?=base_url()?>" +'user_template/icons/catholicgrave.png',
          iconSize: [30,30] });
                            
          var latlngs = []
          if(data != null || data != undefined) {
          var route = JSON.parse(data.lot_coordinates);         
          for (var i = 0, len = route.length; i < len; i++) {
             latlngs.push(new L.LatLng(route[i][0], route[i][1]));
           }
          } else {            
            latlngs = [];
            
          }          

          var path = L.polyline(latlngs);
          var marker = L.marker(latlngs[len - 1]).addTo(map).bindPopup("</br>"+"<strong>Fullname:</strong>"+" "+data.occupant_firstname+" "+data.occupant_middlename+" "+ data.occupant_lastname +"</br>" +
            "<strong>Date of Birth:</strong>"+" " +data.occupant_dateofbirth + "</br>"+
            "<strong>Date of Death:</strong>"+" " +data.occupant_dateofdeath + "</br>"+
            "<strong>Garden:</strong>"+" " +data.garden_name + "</br>"+
           "<strong>Block:</strong>"+" " +data.block_name + "</br>"+
           "<strong>Lot:</strong>"+" " +data.lot_name + "</br>"+
           "<strong>Longitude:</strong>"+" "+data.lot_long + "</br>"+
           "<strong>Latitude:</strong>"+" "+data.lot_lat ).openPopup();

          if (prev_path != null){
            map.removeLayer(prev_path);
          }

          if(prev_marker != null){
            map.removeLayer(prev_marker); 
          }
            
          prev_path = path;
          prev_marker = marker;

          //map.removeLayer(path)
          //map.addLayer(L.marker(latlngs[0]));
          if(latlngs.length > 0) {
            map.addLayer(marker);
          }          
          map.addLayer(path);
          setTimeout(function(){ path.snakeIn(); }, 3000);
          //path.snakeIn();
        
        });
      });
    });
  </script>
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
      div.innerHTML += '<i style="background: #ff0000"></i><span>Lot</span><br>';
      return div;
    };

    legend.addTo(map);
    var marker_1 = L.marker([-60.064840460104506,13.005095612485837]).addTo(map).bindPopup("Gate is here").openPopup();
    map.addLayer(marker_1);
    
    $.getJSON(base_url+"pages/map_gardens", function(data) 
    {
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

       });

    });

    $.getJSON(base_url+"pages/map_lots", function(data) 
    {
       $.each(data, function(i, field)
        {

         var mapLots_longitude = parseFloat(data[i].lot_long);
         var mapLots_latitude = parseFloat(data[i].lot_lat);

         var circle = L.circle([mapLots_longitude,  mapLots_latitude], {
        color: "red",
        fillColor: "#f03",
         fillOpacity: 1.5,
       radius: 50.0
        }).addTo(map);  

       });
    });
    
  </script> 
</body>
</html>