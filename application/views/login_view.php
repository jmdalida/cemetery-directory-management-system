        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
             <?php if($this->session->flashdata('msg')): ?>
            <?php echo '<div class="text-danger">'.$this->session->flashdata('msg').'</h4>' ?>
             <?php endif; ?>
            <form class="login-form" action="<?php echo site_url('login/auth');?>" method="post">
                <h3 class="form-title">Login to your Account</h3>
                 
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                         <input type="Username" name="username" class="form-control" placeholder="Username" required autofocus> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                       <input type="password" name="password" class="form-control" placeholder="Password" required> </div>
                </div>
                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" value="remember-me"> Remember me
                        <span></span>
                    </label>
                    <button type="submit" class="btn green-jungle pull-right"> Login </button>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <!-- END LOGIN -->
     