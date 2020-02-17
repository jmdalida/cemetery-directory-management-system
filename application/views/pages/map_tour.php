
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
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pages/map_tour">Map Tour</a></li>
              <li class="breadcrumb-item active">Map Tour</li>
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
                <h5 class="card-title m-0">CEMETERY MAP TOUR</h5>
              </div>
               <div class="card-body">                
                 <p class="text-justify"> Welcome to <strong>St. Michael Memorial Park Map Tour</strong>. St. Michael Memorial Park is located at Pala-o, Iligan City, Philippines. St. Michael Memorial Park is a semi-private cemetery handled by G. Lluch & Sons Incorporation. To learn more about the St. Michael Memorial Park take our map tour. Simply click on the different icon markers in the map for more information.</p> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-8">
            <div class="card card-teal card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">ABOUT US</h5>
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
<!-- Select2 -->
<script src="<?php echo base_url("user_template/plugins/select2/js/select2.full.min.js"); ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url("user_template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"); ?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url("user_template/plugins/moment/moment.min.js"); ?>"></script>
<script src="<?php echo base_url("user_template/plugins/inputmask/min/jquery.inputmask.bundle.min.js"); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url("user_template/plugins/daterangepicker/daterangepicker.js"); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url("user_template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url("user_template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"); ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url("user_template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("user_template/dist/js/demo.js"); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("user_template/dist/js/adminlte.min.js"); ?>"></script>
<!-- Leaflet -->
<script src="<?php echo base_url("user_template/leaflet/leaflet.js"); ?>"></script> 
<script src="<?php echo base_url("user_template/leaflet/leaflet-search.js"); ?>"></script> 
<script src="<?php echo base_url("user_template/leaflet/Leaflet.Coordinates-0.1.5.min.js"); ?>"></script> 
<script src="<?php echo base_url("user_template/leaflet/L.Polyline.SnakeAnim.js"); ?>"></script> 
<script src="<?php echo base_url("user_template/leaflet/leaflet-beautify-marker-icon.js"); ?>"></script> 
<script>  
    var map = L.map('map').setView([-1.055588,2.109375],1); 
    var base_url = "<?=base_url()?>";
   
    //Creating a Layer object
    L.tileLayer('<?php echo base_url("user_template/map/{z}/{x}/{y}.png"); ?>',
    {
      minZoom: 2,
      maxZoom: 4,
      continousWorld: false,
      noWrap: true,
    } ).addTo(map);

    var bounds = new L.LatLngBounds(new L.LatLng(-66.240094,-133.945313), new L.LatLng(55.982827,127.617188));

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

        var icon_gate = L.icon({
        iconUrl: base_url+'user_template/icons/main_entrance.png',
        iconSize: [30,30] });
              
        //Markers and Popups
        L.marker([-60.064840460104506,13.005095612485837], {icon:icon_gate})
        .bindPopup("This is the main gate")
        .openPopup().addTo(map);

        var icon_chapel = L.icon({
        iconUrl: base_url+'user_template/icons/chapel-2.png',
        iconSize: [30,30]  });
                
        //Markers and Popups
        L.marker([-48.249946,-8.789063], {icon:icon_chapel})
        .bindPopup(" This is the chapel ")
        .openPopup().addTo(map);
        
        options = {
        icon: 'leaf'
        , iconShape: 'marker'
        }; 

        L.marker([-36.315125,-73.125], { icon: L.BeautifyIcon.icon(options)})
        .bindPopup("popup")
        .bindPopup("This area is Garden of Love").addTo(map);

        options = {
        icon: 'leaf'
        , iconShape: 'marker'
        }; 
        
        L.marker([10.487812,28.47656], { icon: L.BeautifyIcon.icon(options)})
        .bindPopup("popup")
        .bindPopup("This area is Garden of Paradise").addTo(map);

        options = {
        icon: 'leaf'
        , iconShape: 'marker'
        }; 
        
        L.marker([25.165173,104.414063], { icon: L.BeautifyIcon.icon(options)})
        .bindPopup("popup")
        .bindPopup("This area is Garden of Resurrection").addTo(map);

        options = {
        icon: 'leaf'
        , iconShape: 'marker'
        }; 
        
        L.marker([-27.994401,70.664063], { icon: L.BeautifyIcon.icon(options)})
        .bindPopup("popup")
        .bindPopup("This area is Garden of Resurrection").addTo(map);

        options = {
        icon: 'leaf'
        , iconShape: 'marker'
        }; 
        
        L.marker([51.618017,28.828125], { icon: L.BeautifyIcon.icon(options)})
        .bindPopup("popup")
        .bindPopup("This area is Garden of Ascension").addTo(map);



  </script>
</body