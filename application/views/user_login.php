<?php if ($this->session->userdata('user_id')) { ?>
  <div id="login-box">
    <div style="padding-left: 20px; padding-top: 20px;">
      <div style="padding: 5px;">
        <b>Welcome : </b><?php echo $this->session->userdata('user_name'); ?>
      </div>
      <div style="padding: 5px;">
        <a href="my_account/property" style="color: #FFF;">Manage Your Property</a>
      </div>
      <div style="padding: 5px;">
        <a href="my_account" style="color: #FFF;">My Profile</a>&nbsp;&nbsp;<a href="login/logout" style="color: #FFF;">Logout</a>
      </div>
    </div>
  </div>
<?php } else { ?>
  <div id="login-box">
    <?php echo form_open('login'); ?>
    <H2>Login</H2>
    <br />
    <div id="login-box-name">Email:</div>
    <div id="login-box-field"><input name="email" type="text" class="form-login" title="Username" value="" maxlength="2048" /></div>
    <div id="login-box-name">Password:</div>
    <div id="login-box-field"><input name="password" type="password" class="form-login" title="Password" value="" maxlength="2048" /></div>
    <br />
    <span class="login-box-options">
      <input type="checkbox" name="1" value="1"> Remember Me<br />
      <a href="#" style="margin-left:10px;">Forgot password?</a>
    </span>
    <br />
    <div style="width: 100%; float: left; padding-top: 7px;">
      <div class="login-btn"><a href="home/register_1" title="Register">Register</a></div>
      <div class="login-btn"><a href="javascript:void(0);" onclick="$(this).closest('form').submit();">Login</a></div>
    </div>
    <?php echo form_close(); ?>
  </div>
<?php } ?>

