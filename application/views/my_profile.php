<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div class="title-bg">
      <div class="title-featured">
        <span id="">My Profile</span>            
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1">
        <?php echo form_open_multipart('my_account'); ?>
        <table cellspacing="3" cellpadding="3" border="0">
          <tbody>
            <tr>
              <td>First Name</td>
              <td><input type="text" name="first_name" value="<?php if(!empty($profile)){ echo $profile['first_name']; } ?>" /></td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td><input type="text" name="last_name" value="<?php if(!empty($profile)){ echo $profile['last_name']; } ?>" /></td>
            </tr>
            <tr>
              <td>Phone #</td>
              <td><input type="text" name="phone" value="<?php if(!empty($profile)){ echo $profile['phone']; } ?>" /></td>
            </tr>
            <tr>
              <td>Secondary Email</td>
              <td><input type="text" name="secondary_email" value="<?php if(!empty($profile)){ echo $profile['secondary_email']; } ?>" /></td>
            </tr>
            <tr>
              <td>Profile Picture</td>
              <td><input type="file" name="picture" /></td>
            </tr>
            <tr>
              <td>Enter Password</td>
              <td><input type="password" name="password" /> [ Leave Blank for Unchanged. ]</td>
            </tr>
            <tr>
              <td>Re-Enter Password</td>
              <td><input type="password" name="re_password" /></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="submit" value="Save Profile" /></td>
            </tr>
          </tbody>
        </table>
        <?php
        echo form_hidden('user_id', $this->session->userdata('user_id'));
        echo form_close();
        ?>
      </div>

      <div class="clear"></div>
    </div>
  </div>


</div>