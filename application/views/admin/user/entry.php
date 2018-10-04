<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('user/add'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2">User Entry</th>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Full Name</strong></td>
        <td class="last"><input type="text" class="text" name="full_name" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Email Address</strong></td>
        <td class="last"><input type="text" class="text" name="email" autocomplete="off" /></td>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Password</strong></td>
        <td class="last"><input type="password" class="text" name="password" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Re-enter Password</strong></td>
        <td class="last"><input type="password" class="text" name="repassword" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Type</strong></td>
        <td class="last">
          <select name="status" style="width: 270px;">
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Status</strong></td>
        <td class="last">
          <select name="status" style="width: 270px;">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </td>
      </tr>
      <tr>
        <th class="full" colspan="2" style="text-align: center;">
          <input type="submit" name="submit" value="Create User" />
        </th>
      </tr>
    </table>
    <?php echo form_close(); ?>
    <p>&nbsp;</p>
  </div>
</div>