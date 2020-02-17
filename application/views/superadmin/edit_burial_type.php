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
                    <a href="<?php echo base_url();?>superadmin/burial_type">Burial Type</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Edit Burial Type</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right"></div>
            </div>
        </div><!-- END PAGE BAR -->
   
        <!-- BEGIN PAGE TITLE-->
          <h1 class="page-title"> 
                  Edit  Burial Type
            </h1> <!-- END PAGE TITLE--> 
             <div> 
                    <a href="<?php echo base_url(); ?>superadmin/burial_type">
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
                    <div class="col-md-6 col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-cogs"></i>Burial Type Form</div>
                                </div>  
                                <div class="portlet-body">
                                 <?php echo form_open_multipart('superadmin/update_burial_type'); ?>
                                        <div class="form-body">
                                            <div class="row">
                                             <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputName"></label>
                                                        <input type="hidden" class="form-control" name="type_id"value="<?php echo $burial_type['type_id']; ?>"  required>
                                                        <?php echo form_error('type_id','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                               
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputName">Burial Type Name</label>
                                                        <input type="text" class="form-control" name="type_name" value="<?php echo  $burial_type['type_name']; ?>" required>
                                                        <?php echo form_error('type_name','<div class="text-danger">'); ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div><!--/row-->
                                         
                                            <br>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn green" style="float: right;"> <i class="fa fa-check"></i> Save</button>
                                                <a href="<?php echo base_url(); ?>superadmin/burial_type" class="btn dark" style="margin-right: 80px; "> <i class="fa fa-remove"></i> Cancel</a> 
                                            </div>
                                        </div>
                                        </form> <!-- END FORM-->    
                                </div>
                            </div>      
                        </div><!-- END EXAMPLE TABLE PORTLET--> 
                        <div class="col-md-6 col-sm-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"> </i> Data Tables</div>
                                    </div>
                                    <div class="portlet-body">
                                     <table class="table table-bordered table-striped" id="sample_3">
                                      <thead>
                                        <tr>
                                          <th>Burial Type</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php if( count($burial_records)): ?>
                                        <?php foreach ($burial_records as $records ): ?>
                                        <tr>
                                          <td><?php echo $records ['type_name']; ?></td>
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


