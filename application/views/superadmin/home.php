<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
           
            <div class="fa fa-clock-o" style="margin-top: 15px;  float: right;" >
                <span id="demotime"></span>
            </div>
            <script>
                var myVar = setInterval(myTimer, 1000);
                function myTimer() 
                {
                    var d = new Date();
                    document.getElementById("demotime").innerHTML = d.toLocaleTimeString();
                }
            </script>
            <div class="page-toolbar"></div>
        </div><!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">Lot Status Report<small></small></h1> <!-- END PAGE TITLE-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <?php echo number_format($available) ?>     
                        </div>
                        <div class="desc">Available Lot</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 yellow-saffron" href="#">
                     <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <?php echo number_format($reserved) ?>
                        </div>
                        <div class="desc">Reserved Lot</div>
                    </div>    
                </a>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green-jungle" href="#">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <?php echo number_format($occupied) ?>
                        </div>
                        <div class="desc">Occupied Lot</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div><!-- END CONTENT BODY -->
</div><!-- END CONTENT --> 