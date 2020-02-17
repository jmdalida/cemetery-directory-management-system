<style type="text/css">
    #gradient{
         background: red; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(right top, #027d3f, dimgray); /* For Safari 5.1 to 6.0 */
  
    }
</style>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-closed">
    <div class="page-wrapper" id="gradient">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top" id="gradient" style="height: 57px;">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                	<div class="page-logo">
                        <a href="index.html" style="margin-top: -12px; margin-left: ;">
                            <img src="<?php echo base_url();?>admin_template/img/logo.png" alt="logo" class="logo-default"  /> </a>
                    </div>
                    <div class="menu-toggler sidebar-toggler" style="float: left; margin-top: 32px;">
                            <span></span>
                    </div>

                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a><!-- END RESPONSIVE MENU TOGGLER -->
                    
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                        <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                          
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" style="color: silver;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <?php echo $this->session->userdata('username');?>
                                    <i class="fa fa-user"></i>
                                   <i class="fa fa-angle-down"></i>
                                   <!-- <span class="username username-hide-on-mobile"> Nick </span> -->
                                    <!-- <i class="fa fa-angle-down"></i>-->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?php echo base_url('superadmin/view_user_profile/'.$this->session->userdata('id'));?>">
                                    <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('login/logout');?>">
                                        <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div><!-- END TOP NAVIGATION MENU -->
            </div><!-- END HEADER INNER -->
        </div><!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px" id="gradient">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li><!-- END SIDEBAR TOGGLER BUTTON -->
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                        </li><!-- END RESPONSIVE QUICK SEARCH FORM -->
                        <?php if($this->session->userdata('level')==='admin'):?>
                            <li class="nav-item start ">
                                <a href="<?php echo base_url();?>superadmin/index" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('superadmin/view');?>" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">User  Manager</span>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a  class="nav-link nav-toggle">
                                    <i class="icon-pointer"></i>
                                    <span class="title">Lot Info</span>
                                    <span class="selected"></span>
                                    <span class="arrow"></span>
                                </a>
                               <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>superadmin/view_garden" class="nav-link nav-toggle">
                                        <span class="title">Garden Location</span>
                                        <span class="selected"></span>
                                       
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>superadmin/view_block" class="nav-link nav-toggle">
                                        <span class="title">Block Location</span>
                                        <span class="selected"></span>
                                       
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>superadmin/view_lot" class="nav-link nav-toggle">
                                        <span class="title">Available Lot</span>
                                        <span class="selected"></span>  
                                    </a>
                                </li>
                            </ul>
                            </li>
                            <li class="nav-item ">
                                <a href="<?php echo base_url();?>superadmin/view_lot_history" class="nav-link nav-toggle">
                                    <i class="icon-briefcase"></i>
                                    <span class="title">Lot History</span>
                                </a>
                            </li>
                           
                            <?php else:?>
                            <li class="nav-item start ">
                                <a href="<?php echo base_url();?>superadmin/staff" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('superadmin/add_reserved_or_occupied')?>" class="nav-link nav-toggle">
                                    <i class="icon-docs"></i>
                                    <span class="title">Add Reserved/Occupied</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="<?php echo base_url();?>superadmin/view_deceased" class="nav-link nav-toggle">
                                          <i class="icon-briefcase"></i>
                                    <span class="title">Deceased Person List</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="<?php echo base_url();?>superadmin/view_owner" class="nav-link nav-toggle">
                                    <i class="icon-briefcase"></i>
                                    <span class="title">Reserved Lot List</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="<?php echo base_url();?>superadmin/view_lot_history" class="nav-link nav-toggle">
                                    <i class="icon-briefcase"></i>
                                    <span class="title">Lot History</span>
                                </a>
                            </li>
                            <?php endif;?>
                    </ul>
                </div> <!-- END SIDEBAR MENU -->       
            </div><!-- END SIDEBAR -->
            <div class="page-content-wrapper">