<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title" style="margin-top: -10px;">
            Edit User Profile
        </h1><!-- END PAGE TITLE-->
        <div> 
            <a href="<?php echo base_url(); ?>superadmin/view">
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
                                    <i class="fa fa-gift"></i>USER PROFILE FORM</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                 <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <?php echo form_open_multipart('superadmin/update'); ?>
                                        <div class="form-body">
                                            <h3 class="form-section">Person Information</h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName">First Name</label>
                                                        <input type="text" class="form-control" name="firstname" value="<?php echo $user_records['firstname']; ?>" required>
                                                        <?php echo form_error('firstname','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName"> MiddleName</label>
                                                        <input type="text" class="form-control"  name="middlename" value="<?php echo $user_records['middlename']; ?>" required>
                                                        <?php echo form_error('middlename','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputName">Last Name</label>
                                                        <input type="text" class="form-control"name="lastname" value="<?php echo $user_records['lastname']; ?>"  required>
                                                        <?php echo form_error('lastname','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                       <label for="inputName">Contact No.</label>
                                                        <input type="text" class="form-control" name="contact_no" value="<?php echo $user_records['contact_no']; ?>" required>
                                                        <?php echo form_error('contactno','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName">Address</label>
                                                        <input type="text" class="form-control"  name="address" value="<?php echo $user_records['address']; ?>" required>
                                                        <?php echo form_error('address','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <h3 class="form-section">User Account</h3>
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="inputName">Username</label>
                                                        <input type="username" class="form-control"  name="username"   value="<?php echo $user_records['username']; ?>"  required>
                                                        <?php echo form_error('username','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6" >  
                                                    <div class="form-group"  >
                                                        <label>Authority</label>
                                                        <select name="user_level"  value="<?php echo   $user_records['user_level']; ?>"  class="form-control">
                                                            <option>Select</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="staff">Staff</option> 
                                                        </select>
                                                     </div>              
                                                 </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">  
                                                  <div class="form-group">
                                                    <label for="inputName">Enter New Password </label>
                                                    <input type="password" class="form-control"  name="password" id="myInput"  value="<?php echo $user_records['password']; ?>"   required>
                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                    <?php echo form_error('password','<div class="text-danger">'); ?>
                                                  </div>              
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">  
                                                  <div class="form-group">
                                                    <label for="inputName">Confirm Password </label>
                                                    <input type="password" class="form-control" name="password2" id="myInput1" required>
                                                    <input type="checkbox" onclick="myFunction_1()">Show Confirm Password
                                                    <?php echo form_error('password2','<div class="text-danger">'); ?>
                                                  </div>              
                                                </div> 
                                                <!--/span-->
                                            </div><!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputName"></label>
                                                        <input type="hidden"  name="user_id"  value="<?php echo $user_records['user_id']; ?>" required>
                                                    </div>
                                                </div>
                                            </div><!--/row-->
                                            <br>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn green" style="float: right;"> <i class="fa fa-check"></i> Save</button>
                                                <a href="<?php echo base_url(); ?>superadmin/view" class="btn dark" style="margin-right: 820px; "> <i class="fa fa-remove"></i> Cancel</a> 
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
<script type="text/javascript">
  function myFunction() 
  {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
  }  
</script>
<script type="text/javascript">
  function myFunction_1() 
  {
      var x = document.getElementById("myInput1");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }  
</script>
