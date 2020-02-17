<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?php echo base_url();?>superadmin/index">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Add Deacesed Person</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right"></div>
            </div>
        </div><!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">
           Add New Deacesed Person
        </h1><!-- END PAGE TITLE-->
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <div class="tab-pane" id="tab_1">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>DECEASED PERSON FORM</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                 <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <?php echo form_open_multipart('superadmin/extend_owner'); ?>
                                        <div class="form-body">
                                            <h3 class="block" style="color: royalblue;">Provide Owner Information</h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName">First Name</label>
                                                        <input type="text" class="form-control" placeholder ="Enter first name" name="owner_firstname" required>
                                                        <?php echo form_error('owner_firstname','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName"> MiddleName</label>
                                                        <input type="text" class="form-control" placeholder ="Enter middle name" name="owner_middlename" required>
                                                        <?php echo form_error('owner_middlename','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName">Last Name</label>
                                                        <input type="text" class="form-control" placeholder ="Enter last name" name="owner_lastname" required>
                                                        <?php echo form_error('owner_lastname','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="inputName">Street & Baranggay</label>
                                                        <input type="text" class="form-control" placeholder ="Enter street & baranggay" name="owner_street&brgy" required>
                                                        <?php echo form_error('owner_street&brgy','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="inputName">City/Municipality</label>
                                                        <input type="text" class="form-control" placeholder ="Enter city/municipality" name="owner_city/municipality" required>
                                                        <?php echo form_error('owner_city/municipality','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="inputName">Province</label>
                                                        <input type="text" class="form-control" placeholder ="Enter province" name="owner_province" required>
                                                        <?php echo form_error('owner_province','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                   <div class="col-md-3">
                                                    <div class="form-group">
                                                          <label>Country</label>
                                                        <select name="country_id" class="form-control"  >
                                                        <?php foreach ( $country as $country_name) :?>
                                                            <option value="<?php echo $country_name['country_id']; ?>"><?php echo  $country_name['occupant_country']; ?></option>
                                                        <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Sex</label>
                                                        <select name="owner_gender" class="form-control">
                                                            <option>Select</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName">Contact No.</label>
                                                        <input type="number" class="form-control" placeholder ="Enter contact no." name="owner_contactno" required>
                                                        <?php echo form_error('owner_contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email/Gmail Account</label>
                                                        <input type="text" class="form-control" placeholder ="Enter email/gmail account" name=" owner_email" required>
                                                        <?php echo form_error('owner_email','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                         <?php foreach ( $deceased as $name) :?> 
                                                        <input type="hidden" class="form-control" value="<?php echo $name['occupant_id']; ?>" required>
                                                        <!--  <?php endforeach; ?>-->
                                                    </div>
                                                </div>
                                            </div><!--/row-->
                                            <br>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn blue" style="float: right;">Next <i class="fa fa-chevron-right"></i></button>
                                             
                                                <a href="<?php echo site_url('superadmin/check_deceased/'.$name['occupant_id']); ?>" class="btn dark" style="margin-right: 820px; "> <i class="fa fa-chevron-left"></i> Back</a> 
                                               
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
 