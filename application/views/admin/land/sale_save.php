<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="land" method="post" action="admin/land/sale_save" enctype="multipart/form-data">
      <table class="listing form" border="0" cellpadding="0" cellspacing="0" style="font-size: 11px;">
        <tr>
          <th class="full" colspan="6">Apartment Sale Save</th>
        </tr>
        <tr>
          <td>Title</td>
          <td colspan="5"><input type="text" name="title" value="<?php if (isset($land['title'])) { echo $land['title'];} ?>" style="width: 390px;" /></td>
        </tr>
        <tr>
          <th colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="6" align="left">Address</th>
        </tr>
        <tr>
          <td>House No</td>
          <td><input type="text" name="house" value="<?php if (isset($land['house'])) { echo $land['house'];} ?>" style="width: 73px;" /></td>
          <td>Road No</td>
          <td><input type="text" name="road" value="<?php if (isset($land['road'])) { echo $land['road'];} ?>" style="width: 73px;" /></td>
          <td>Sector</td>
          <td><input type="text" name="sector" value="<?php if (isset($land['sector'])) { echo $land['sector'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Area</td>
          <td><input type="text" name="area" value="<?php if (isset($land['area'])) { echo $land['area'];} ?>" style="width: 73px;" /></td>
          <td>District</td>
          <td colspan="3"><input type="text" name="district" value="<?php if (isset($land['district'])) { echo $land['district'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="6" align="left">Land Specification</th>
        </tr>
        <tr>
          <td>Land Type</td>
          <td>
            <select name="land_type" style="width: 80px;">
              <option value="Ready" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Ready") { echo 'selected'; }} ?>>Ready</option>
              <option value="Ongoing" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Ongoing") { echo 'selected'; }} ?>>Ongoing</option>
              <option value="Used" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Used") { echo 'selected'; }} ?>>Used</option>
              <option value="Upcoming" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Upcoming") { echo 'selected'; }} ?>>Upcoming</option>
            </select>
          </td>
          <td>Size</td>
          <td><input type="text" name="size" value="<?php if (isset($land['size'])) { echo $land['size'];} ?>" style="width: 73px;" /></td>
          <td>Front Road Size</td>
          <td><input type="text" name="common_bath" value="<?php if (isset($land['common_bath'])) { echo $land['common_bath'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Project Name</td>
          <td><input type="text" name="bed" value="<?php if (isset($land['bed'])) { echo $land['bed'];} ?>" style="width: 73px;" /></td>
          <td>Land Status</td>
          <td><input type="text" name="bed" value="<?php if (isset($land['bed'])) { echo $land['bed'];} ?>" style="width: 73px;" /></td>
          <td>Handover Time</td>
          <td><input type="text" name="veranda" value="<?php if (isset($land['veranda'])) { echo $land['veranda'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Company Name</td>
          <td colspan="5"><input type="text" name="bed" value="<?php if (isset($land['bed'])) { echo $land['bed'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td valign="top">Road Details</td>
          <td colspan="5"><textarea name="details" style="width: 318px;"></textarea></td>
        </tr>
        <tr>
          <td valign="top">Details</td>
          <td colspan="5"><textarea name="details" style="width: 318px;"></textarea></td>
        </tr>
        <tr>
          <th colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="6" align="left">Financial Details</th>
        </tr>
        <tr>
          <td>Sales Price</td>
          <td><input type="text" name="price_sft" value="<?php if (isset($land['price_sft'])) { echo $land['price_sft'];} ?>" style="width: 73px;" /></td>
          <td>Total Price</td>
          <td colspan="3"><input type="text" name="price_sft" value="<?php if (isset($land['price_sft'])) { echo $land['price_sft'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th colspan="6" align="left">Pictures</th>
        </tr>
        <tr>
          <td>Perspective View</td>
          <td colspan="5"><input type="file" name="perspective_view" /></td>
        </tr>
        <tr>
          <td>Floor Plan</td>
          <td colspan="5"><input type="file" name="floor_plan" /></td>
        </tr>
        <input type="hidden" name="id" value="<?php if (isset($land['id'])) { echo $land['id']; } ?>" />
        <tr>
          <th colspan="6" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>

    <p>&nbsp;</p>
  </div>
</div>