<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content">             
    <!-- BEGIN PAGE BAR -->
    <div>
      <!-- occupied lot created  -->
      <?php if($this->session->flashdata('deceased_lot_created')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('deceased_lot_created').'</h4>' ?>
      <?php endif; ?>
      <!-- occupied lot created from reserved lot -->
      <?php if($this->session->flashdata('transfer_deceased_created')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&timesa;</button>'.$this->session->flashdata('transfer_deceased_created').'</h4>' ?>
      <?php endif; ?>
      <!-- deceased person updated -->
       <?php if($this->session->flashdata('deceased_updated')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('deceased_updated').'</h4>' ?>
      <?php endif; ?>
      <!-- occupied lot updated -->
       <?php if($this->session->flashdata('deceased_lot_updated')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('deceased_lot_updated').'</h4>' ?>
      <?php endif; ?>
      <!-- owner updated -->
      <?php if($this->session->flashdata('owner_transfer_updated')): ?>
      <?php echo '<div class="custom-alerts alert alert-success">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('owner_transfer_updated').'</h4>' ?>
      <?php endif; ?>
    </div>
     <div> 
      <a href="<?php echo base_url(); ?>superadmin/view_owner">
          <button type="button" class="btn blue"><i class="fa fa-arrow-left "></i> 
          Back</button>
      </a>
      <a href="<?php echo base_url(); ?>superadmin/index">
          <button type="button" class="btn blue"><i class="fa fa-home" aria-hidden="true"> </i>
          Home</button>
      </a>
  </div>
  <br>
    <div class="row">
      <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
          <div class="portlet-title">
            <div class="caption font-light">
              <i class="fa fa-folder"></i>
              <span class="caption-subject uppercase">Deceased Person List</span>
            </div>

          </div>
          <div class="portlet-body">
            <div class="table-toolbar">
              <div class="row">
                <div class="col-md-6">
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
                  <th>Date Avail</th>
                  <th>Date Transfered</th>
                  <th>Occupant Name</th>
                  <th>Date Avail</th>
                  <th>Owner Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if( count($owner_lots)): ?>
                <?php foreach ($owner_lots as $records ): ?>
                <tr>
                  <td><?php echo date('M-d-Y', strtotime($records['date_avail']));?></td>
                  <td><?php if ($records['date_transfered'] != null) {
                    echo date('M-d-Y', strtotime($records['date_transfered']));
                  } else {
                    echo '-';
                  } ?></td>
                  <td>
                    <?php echo $records ['occupant_firstname']; ?>
                    <?php echo $records ['occupant_middlename']; ?>
                    <?php echo $records ['occupant_lastname']; ?>
                  </td>
                  <td><?php echo $records['date_avail'];?></td>
                  <td>
                    <?php echo $records ['owner_firstname']; ?>
                    <?php echo $records ['owner_middlename']; ?>
                    <?php echo $records ['owner_lastname']; ?>
                  </td>
                  <td class="clearfix">
                      <a class="btn btn-primary btn-sm" href="<?php echo site_url('superadmin/view_deceased_details/'.$records['occupant_id']); ?>">
                        <i class="fa fa-folder"> View</i>
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
                
               