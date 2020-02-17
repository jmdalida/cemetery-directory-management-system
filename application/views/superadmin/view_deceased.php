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
    <div class="btn-group" style ="margin-bottom: 10px; ">
                    <a  class="btn sbold blue" href="<?php echo site_url('superadmin/add_deceased_owner');?>"> <i class="fa fa-plus"></i> Deceased Person </a>
                </div>
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
                  <th>Occupant Name</th>
                  <th>Date of Birth</th>
                  <th>Date of Death</th>
                    <th>Owner Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if( count($owner_lots)): ?>
                <?php foreach ($owner_lots as $records ): 
                  if($records['date_transfered'] == null) { ?>
                <tr>
                  <td>
                    <?php echo $records ['occupant_firstname']; ?>
                    <?php echo $records ['occupant_middlename']; ?>
                    <?php echo $records ['occupant_lastname']; ?>
                  </td>
                  <td><?php echo $records ['occupant_dateofbirth']; ?></td>
                  <td><?php echo $records ['occupant_dateofdeath']; ?></td>
                  <td>
                    <?php echo $records ['owner_firstname']; ?>
                    <?php echo $records ['owner_middlename']; ?>
                    <?php echo $records ['owner_lastname']; ?>
                  </td>
                  <td class="clearfix">
                      <a class="btn blue btn-sm" href="<?php echo site_url('superadmin/view_deceased_details/'.$records['occupant_id']); ?>">
                        <i class="fa fa-folder"> View</i>
                      </a>
                      <!-- <a class="btn blue btn-sm" href="<?php echo site_url('superadmin/edit_deceased/'.$records['occupant_id']); ?>">
                        <i class="fa fa-folder"> Edit</i>
                      </a> -->
                      <a class="btn red btn-sm" onclick="pasadata('<?php echo $records['owner_lot_id']?>')" data-toggle="modal"><i class="fa fa-eraser">Transfer</i></a>
                  </td>
                </tr>
                <?php } endforeach ; ?>
                <?php else: ?>
                  <tr> No Records Found!</tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
            <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <?php echo form_open('superadmin/transfer_deceased'); ?>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                          <h4>Date Transferred</h4>
                          <p><input type="hidden" id="no" class="form-control" name="id"></p>
                          <p><input type="date" class="form-control" name="date" style="margin-bottom: 5px;"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                            <button type="submit" class="btn green">Save changes</button>
                        </div>
                      <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div><!-- END CONTENT BODY -->                   
</div><!-- END CONTENT -->

<script type="text/javascript">
  function pasadata(no) 
  {
      $("#no").val(no);
      $("#responsive").modal('show');
  }
</script>>
               