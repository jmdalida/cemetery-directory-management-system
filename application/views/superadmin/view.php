<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content">             
    <div>
      <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('user_registered').'</h4>' ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('updated')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('updated').'</h4>' ?>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
          <div class="portlet-title">
            <div class="caption font-light">
              <i class="fa fa-user"></i>
              <span class="caption-subject uppercase"> List of Users</span>
            </div>
          </div>
          <div class="portlet-body">
            <div class="table-toolbar">
              <div class="row">
                <div class="col-md-6">
               <div> 
                          <a href="<?php echo base_url(); ?>superadmin/add">
                            <button type="button" class="btn sbold green-jungle"><i class="fa fa-plus "></i> 
                            Add New </button>
                          </a>
                         
                      
                        </div>
                </div>
                <!--span-->
                <div class="col-md-6">
                  <div class="btn-group pull-right">
                  </div>
                </div>
              </div>
            </div>
            <table class="table table-bordered table-striped" id="sample_3">
              <thead>
                <tr>
                  <th>Fullname</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Authority</th>
                  <th>Created On</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if( count($records)): ?>
                <?php foreach ($records as $user_records ): ?>
                <tr>
                  <td>
                    <?php echo $user_records ['firstname']; ?>
                    <?php echo $user_records ['middlename']; ?>
                    <?php echo $user_records ['lastname']; ?>
                  </td>
                  <td><?php echo $user_records ['username']; ?></td>
                  <td>Restricted</td>
                  <td><?php echo $user_records ['user_level']; ?></td>
                  <td><?php echo $user_records ['created_on']; ?></td>
                  <td class="clearfix">
                      <a class="btn btn-primary btn-sm" href="<?php echo site_url('superadmin/view_user_details/'.$user_records['user_id']); ?>">
                        <i class="fa fa-folder"> View</i>
                      </a>
                     
                      <a class="btn btn-sbold green btn-sm" href="<?php echo site_url('superadmin/edit/'.$user_records['user_id']); ?>">
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
  </div><!-- END CONTENT BODY -->                   
</div><!-- END CONTENT -->
                
               