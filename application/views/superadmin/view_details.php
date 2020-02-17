

                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper" >
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" style="background: #eef1f5;">
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> User Profile Account
                            
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                          <div> 
                              <a href="<?php echo base_url(); ?>superadmin/view">
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
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                             <img src="<?php echo site_url();?>admin_template/images/posts/<?php echo $user_records['post_image']; ?>" class="img-responsive" alt="" style="height: 25%"> </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name bold uppercase">
                                                <?php echo $user_records ['firstname']; ?> 
                                                <?php echo $user_records ['lastname']; ?>
                                            </div>
                                            <div class="profile-usertitle-job">  <?php echo $user_records ['user_level']; ?></div>
                                        </div>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                                        
                                        <!-- END SIDEBAR BUTTONS -->
                                        <!-- SIDEBAR MENU -->
                                        <div class="profile-usermenu">
                                            
                                        </div>
                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->
                                    
                                    <!-- END PORTLET MAIN -->
                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                                                            <form role="form" action="#">
                                                                <div class="form-group">
                                                                    <label class="control-label">First Name</label>
                                                                    <input type="text" placeholder="<?php echo $user_records ['firstname']; ?>" class="form-control" readonly /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Middle Name</label>
                                                                    <input type="text" placeholder="<?php echo $user_records ['middlename']; ?>" class="form-control" readonly /> </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Last Name</label>
                                                                    <input type="text" placeholder="<?php echo $user_records ['lastname']; ?>" class="form-control" readonly /> </div>


                                                                <div class="form-group">
                                                                    <label class="control-label">Mobile Number</label>
                                                                    <input type="text" placeholder="<?php echo $user_records ['contact_no']; ?>" class="form-control" readonly /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Address</label>
                                                                    <input type="text" placeholder="<?php echo $user_records ['address']; ?>" class="form-control" readonly  /> </div>
                                                                </div>
                                                          
                                                                <div class="form-group">
                                                                    <label class="control-label">Usename</label>
                                                                    <input type="text" placeholder="<?php echo $user_records ['username']; ?>" class="form-control" readonly /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Password</label>
                                                                    <input type="text" placeholder="Restricted" class="form-control" readonly /> </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Created On</label>
                                                                    <input type="text" placeholder="<?php echo $user_records ['created_on']; ?>" class="form-control" readonly /> </div>

                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE AVATAR TAB -->
                                                        
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->