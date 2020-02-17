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
                    <span>Add Deacesed Person</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right"></div>
            </div>
        </div><!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">
             Add New Deceased Person
        </h1><!-- END PAGE TITLE-->
         <div> 
            <a href="<?php echo base_url(); ?>superadmin/view_owner">
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
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <div class="tab-pane" id="tab_1">
                        <div class="portlet box green-jungle">
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
                                    <?php echo form_open_multipart('superadmin/update_extend_deceased'); ?>
                                        <div class="form-body">
                                            <h3 class="form-section">Deceased Person Information</h3>
                                             <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName">First Name</label>
                                                        <input type="text" class="form-control" placeholder ="Enter first name"
                                                         name="occupant_firstname" required>
                                                        <?php echo form_error('occupant_firstname','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName"> MiddleName</label>
                                                        <input type="text" class="form-control" placeholder ="Enter middle name" 
                                                        name=" occupant_middlename" required>
                                                        <?php echo form_error('occupant_middlename','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName">Last Name</label>
                                                        <input type="text" class="form-control" placeholder ="Enter last name"
                                                         name="occupant_lastname" required>
                                                        <?php echo form_error(' occupant_lastname','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Birth Date:</label>
                                                        <input type="date" class="form-control" name="occupant_dateofbirth" required>
                                                        <?php echo form_error('occupant_dateofbirth ','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Death Date:</label>
                                                        <input type="date" class="form-control" name="occupant_dateofdeath" required>
                                                        <?php echo form_error('occupant_dateofdeath','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Birth Place</label>
                                                        <input type="text" class="form-control" placeholder ="Enter place of birth" 
                                                        name="occupant_birthplace" required>
                                                        <?php echo form_error('occupant_birthplace','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                   <div class="col-md-6">
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
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Death Place</label>
                                                        <input type="text" class="form-control" placeholder ="Enter place of death" 
                                                        name="occupant_deathplace" required>
                                                        <?php echo form_error('occupant_deathplace','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                   <div class="col-md-6">
                                                    <div class="form-group">
                                                          <label>Country</label>
                                                        <select name="countries_id" class="form-control"  >
                                                        <?php foreach ( $countries as $country_name) :?>
                                                            <option value="<?php echo $country_name['countries_id']; ?>"><?php echo  $country_name['occupant_countries']; ?></option>
                                                        <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!--/row-->
                                               <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Sex</label>
                                                        <select name="occupant_gender" class="form-control">
                                                            <option>Select</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Cause of Death</label>
                                                        <input type="text" class="form-control" placeholder ="Enter cause of death" 
                                                        name="occupant_causeofdeath" required>
                                                        <?php echo form_error('occupant_causeofdeath','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <br>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn green-jungle" style="float: right;">Next <i class="fa fa-chevron-right"></i></button>
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
 