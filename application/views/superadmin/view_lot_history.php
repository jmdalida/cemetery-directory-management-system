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
    <div class="row">
      <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green-jungle">
          <div class="portlet-title">
            <div class="caption font-light">
              <i class="fa fa-folder"></i>
              <span class="caption-subject uppercase">Lot History</span>
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
                  <th>Lot Name</th>
                  <th>Owner</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if( count($owner_lots)): ?>
                <?php foreach ($owner_lots as $records ): ?>
                <tr>
                   <td><?php echo $records ['lot_name']; ?></td>
                  <td>
                    <?php echo $records ['owner_firstname']; ?>
                    <?php echo $records ['owner_middlename']; ?>
                    <?php echo $records ['owner_lastname']; ?>
                  </td>
                  <td class="clearfix">
                      <a class="btn btn-primary btn-sm" href="<?php echo site_url('superadmin/view_owner_details_copy/'.$records['owner_lot_id']); ?>">
                        <i class="fa fa-folder"> View</i>
                      </a>
                      <a class="btn btn-primary btn-sm" href="<?php echo site_url('superadmin/view_deceased_owner/'.$records['lot_id']); ?>">
                        <i class="fa fa-folder"> View Deceased</i>
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

<script type="text/javascript">
  
</script>
                
               