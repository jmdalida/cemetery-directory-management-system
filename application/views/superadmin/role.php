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
                    <a href="<?php echo base_url();?>superadmin/role">Role</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Add Role</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right"></div>
            </div>
        </div><!-- END PAGE BAR -->
          <br>
    <div>
      <?php if($this->session->flashdata('role_created')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('role_created').'</h4>' ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('role_updated')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('role_updated').'</h4>' ?>
      <?php endif; ?>
    </div>
        <!-- BEGIN PAGE TITLE-->
          <h1 class="page-title"> 
                   Add Role
                </h1> <!-- END PAGE TITLE-->  
                 <div> 
            <a href="<?php echo base_url(); ?>superadmin/view">
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
                    <div class="col-md-6 col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box green-jungle">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-cogs"></i>Role Form</div>
                                </div>  
                                <div class="portlet-body">
                                 <?php echo form_open_multipart('superadmin/add_role'); ?>
                                        <div class="form-body">
                                            <div class="row">
                                                <!--/span-->
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputName">Role Name</label>
                                                        <input type="text" class="form-control" placeholder ="Enter role name" name="role_name" required>
                                                        <?php echo form_error('type_name','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                         
                                            <br>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn green-jungle" style="float: right;"> <i class="fa fa-check"></i> Submit</button>
                                                <a href="<?php echo base_url(); ?>superadmin/view" class="btn dark" style="margin-right: 80px; "> <i class="fa fa-remove"></i> Cancel</a> 
                                            </div>
                                        </div>
                                        </form> <!-- END FORM-->    
                                </div>
                            </div>      
                        </div><!-- END EXAMPLE TABLE PORTLET--> 
                        <div class="col-md-6 col-sm-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green-jungle">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"> </i> Data Tables</div>
                                    </div>
                                    <div class="portlet-body">
                                     <table class="table table-bordered table-striped" id="sample_3">
                                      <thead>
                                        <tr>
                                          <th>Authority</th>
                                        
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php if( count($role)): ?>
                                        <?php foreach ($role as $records ): ?>
                                        <tr>
                                          <td><?php echo $records ['role_name']; ?></td>
                                          <td class="clearfix">
                                              <a class="btn btn-sbold green btn-sm" href="<?php echo site_url('superadmin/edit_role/'.$records['role_id']); ?>">
                                                <i class="fa fa-edit" > Edit</i>   
                                              </a>
                                          </td>
                                        </tr>
                                        <?php endforeach ; ?>
                                        <?php else: ?>
                                          <tr> No Records Found!</tr>
                                        <?php endif; ?>
                                      </tbody>
                                    </table>
                                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END CONTENT BODY -->
</div><!-- END CONTENT -->


