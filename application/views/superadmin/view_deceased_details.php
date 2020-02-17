<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
            <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title" style="margin-top: -10px;">
           Occupied Lot Information Details
        </h1><!-- END PAGE TITLE-->
        <div> 
                              <a href="<?php echo base_url(); ?>superadmin/view_deceased">
                                <button type="button" class="btn blue"><i class="fa fa-arrow-left "></i> 
                                Back</button>
                              </a>
                              <a href="<?php echo base_url(); ?>superadmin/index">
                                <button type="button" class="btn blue"><i class="fa fa-home" aria-hidden="true"> </i>
                                Home
                              </button>
                              </a>
                             
                              
                          </div>
                           <br>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <div class="tab-pane" id="tab_1">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>OCCUPIED LOT INFORMATION </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                 <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                   <form class="form-horizontal" role="form">
                                                        <div class="form-body">
                                                            <h3 class="form-section">Deceased Person Information</h3>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Fullname:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static"><?php echo $owner_records['occupant_firstname']; ?> <?php echo $owner_records['occupant_middlename']; ?> <?php echo $owner_records['occupant_lastname']; ?>   
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                 <div class="form-group">
                                                                        <label class="control-label col-md-3">Birth Place: </label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['occupant_birthplace']; ?>,
                                                                                <?php echo $owner_records['bcoun']; ?> 
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <!--/span-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['occupant_gender']; ?> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Death Place: </label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['occupant_deathplace']; ?>,
                                                                                <?php echo $owner_records['dcoun']; ?> 
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static"> 
                                                                                <?php echo $owner_records['occupant_dateofbirth']; ?>  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">CauseofDeath:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static"> 
                                                                                <?php echo $owner_records['occupant_causeofdeath']; ?>  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <div class="row">
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Death:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['occupant_dateofdeath']; ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                            
                                                            </div>
                                                            <!--/row-->
                                                            <h3 class="form-section">Owner Information</h3>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Fullname:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static"><?php echo $owner_records ['owner_firstname']; ?> <?php echo $owner_records ['owner_middlename']; ?> <?php echo $owner_records ['owner_lastname']; ?>   
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Contact No:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static"> 
                                                                                <?php echo $owner_records['owner_contactno']; ?>  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['owner_gender']; ?> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Email:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['owner_email']; ?>, </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                          
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Address:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['owner_street&brgy']; ?>,
                                                                                <?php echo $owner_records['owner_city/municipality']; ?>,<?php echo $owner_records['owner_province']; ?>, 
                                                                                <?php echo $owner_records['occupant_country']; ?>      
                                                                            </p>  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <h3 class="form-section">Lot Information</h3>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Burial Type:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static"> 
                                                                                <?php echo $owner_records['type_name']; ?>  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Garden Name:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['garden_name']; ?>  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                       
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Block Name:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['block_name']; ?> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                             </div>
                                                              <div class="row">
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Lot Name:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['lot_name']; ?>  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                             <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date Availed:</label>
                                                                        <div class="col-md-9">
                                                                            <p class="form-control-static">
                                                                                <?php echo $owner_records['date_avail']; ?>  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                       
                                                            </div>
                                                            <!--/row-->
                                                        </div>
                                                        
                                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END CONTENT BODY -->
</div><!-- END CONTENT -->
 