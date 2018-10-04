<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open_multipart('admin/leading_developer/save'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2">Leading Developer Entry</th>
      </tr>
      <tr>
        <td class="first"><strong>Company Name</strong></td>
        <td class="last"><input type="text" name="name" autocomplete="off" value="<?php if (!empty($leading)) { echo $leading['name']; } ?>" /></td>
      </tr>
      <tr class="bg">
        <td class="first" valign="top" width="120"><strong>Profile</strong></td>
        <td class="full">
          <textarea name="profile"><?php if (!empty($leading)) { echo $leading['profile']; } ?></textarea>
        </td>
      </tr>
      <tr>
        <td class="first" valign="top"><strong>Management</strong></td>
        <td class="last">
          <textarea name="management"><?php if (!empty($leading)) { echo $leading['management']; } ?></textarea>
        </td>
      </tr>
      <tr class="bg">
        <td class="first" valign="top"><strong>Experience</strong></td>
        <td class="last">
          <textarea name="experience"><?php if (!empty($leading)) { echo $leading['experience']; } ?></textarea>
        </td>
      </tr>
      <tr class="bg">
        <td class="first" valign="top"><strong>Contact</strong></td>
        <td class="last">
          <textarea name="contact"><?php if (!empty($leading)) { echo $leading['contact']; } ?></textarea>
        </td>
      </tr>
      <tr>
        <td class="first"><strong>Logo</strong></td>
        <td class="last"><input type="file" name="logo" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Banner</strong></td>
        <td class="last"><input type="file" name="banner" /></td>
      </tr>
      <tr>
        <td class="first"><strong>Hot Line Number</strong></td>
        <td class="last"><input type="text" name="hotline" autocomplete="off" value="<?php if (!empty($leading)) { echo $leading['hotline']; } ?>" /></td>
      </tr>
      <tr>
        <td class="first"><strong>Email Address</strong></td>
        <td class="last"><input type="text" name="email" autocomplete="off" value="<?php if (!empty($leading)) { echo $leading['email']; } ?>" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Web Address</strong></td>
        <td class="last"><input type="text" name="web" autocomplete="off" value="<?php if (!empty($leading)) { echo $leading['web']; } ?>" /></td>
      </tr>
      <tr>
        <td class="first"><strong>Type</strong></td>
        <td class="last">
          <select name="type">
            <option value="Platinum">Platinum</option>
            <option value="Gold">Gold</option>
            <option value="Silver">Silver</option>
          </select>
        </td>
      </tr>
      <tr>
        <th class="full" colspan="2" style="text-align: center;">
          <input type="submit" name="submit" value="Save Leading Deveoper" />
        </th>
      </tr>
    </table>
    <?php
    if (!empty($leading)) {
      echo form_hidden('id', $leading['id']);
    }
    echo form_close();
    ?>
    <p>&nbsp;</p>
  </div>
</div>

<script type="text/javascript">
  CKEDITOR.replace('profile');
  CKEDITOR.replace('management');
  CKEDITOR.replace('experience');
  CKEDITOR.replace('contact');
</script>