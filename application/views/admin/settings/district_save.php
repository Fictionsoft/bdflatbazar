<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('admin/settings/district_save'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2">District Entry</th>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Name</strong></td>
        <td class="last"><input type="text" class="text" name="name" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Status</strong></td>
        <td class="last">
          <select name="status" style="width: 270px;">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
          </select>
        </td>
      </tr>
      <tr>
        <th class="full" colspan="2" style="text-align: center;">
          <input type="submit" name="submit" value="Save District" />
        </th>
      </tr>
    </table>
    <?php echo form_close(); ?>
    <p>&nbsp;</p>
  </div>
</div>