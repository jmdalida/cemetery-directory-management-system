<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content">             
    <div>
      <?php if($this->session->flashdata('owner_lot_created')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('owner_lot_created').'</h4>' ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('updated')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('updated').'</h4>' ?>
      <?php endif; ?>
      <!-- reserved lot updated -->
      <?php if($this->session->flashdata('owner_lot_updated')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('owner_lot_updated').'</h4>' ?>
      <?php endif; ?>
      <!-- owner updated -->
      <?php if($this->session->flashdata('ownership_updated')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('ownership_updated').'</h4>' ?>
      <?php endif; ?>
    </div>
    <!-- END PAGE TITLE-->
    <div class="btn-group" style ="margin-bottom: 10px; ">
                    <a  class="btn sbold green-jungle" href="<?php echo site_url('superadmin/add_owner_lot');?>"> <i class="fa fa-plus"></i> Reserved Lot</a>
                </div>
    <!-- END PAGE TITLE-->
    <div class="row">
      <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green-jungle">
          <div class="portlet-title">
            <div class="caption font-light">
              <i class="fa fa-folder"></i>
              <span class="caption-subject uppercase">Reserved Lot List</span>
            </div>
          </div>
          <div class="portlet-body">
            <div class="table-toolbar">
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group">
                  </div>
                </div>
                <!--span-->
                <div class="col-md-5">
                  <div class="btn-group pull-right">
                  </div>
                </div>
              </div>
            </div>
            <table class="table table-bordered table-striped" id="sample_3">
              <thead>
                <tr>
                  <th>Owner Name</th>
                  <th>Garden</th>
                  <th>Block</th>
                  <th>Lot</th>
                  <th>Burial Type</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if( count($owner_lots)): ?>
                <?php foreach ($owner_lots as $records ): ?>
                <tr>
                  <td>
                    <?php echo $records ['owner_firstname']; ?>
                    <?php echo $records ['owner_middlename']; ?>
                    <?php echo $records ['owner_lastname']; ?>
                  </td>
                  <td><?php echo $records ['garden_name']; ?></td>
                  <td><?php echo $records ['block_name']; ?></td>
                  <td><?php echo $records ['lot_name']; ?></td>
                  <td><?php echo $records ['type_name']; ?></td>
                  <td class="clearfix">
                      <a class="btn btn-primary btn-sm" href="<?php echo site_url('superadmin/view_owner_details/'.$records['owner_lot_id']); ?>">
                        <i class="fa fa-folder"> View</i>
                      </a>
                      <a class="btn btn-primary btn-sm" href="<?php echo site_url('superadmin/view_deceased_owner_copy/'.$records['lot_id']); ?>">
                        <i class="fa fa-folder"> View Deceased</i>
                      </a>
                       <a class="btn sbold green-jungle btn-sm" href="<?php echo site_url('superadmin/add_deceased_copy/'.$records['owner_id'].'/'.$records['lot_id']); ?>">
                        <i class="fa fa-plus" > Add Deceased </i>   
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
                
               