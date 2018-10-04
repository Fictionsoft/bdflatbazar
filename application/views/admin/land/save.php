<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="land" method="post" action="admin/land/save" enctype="multipart/form-data">
      <table class="listing form" cellpadding="0" cellspacing="0">
        <tr>
          <th class="full" colspan="2">Land Info Save</th>
        </tr>
        <tr>
          <td>Title</td>
          <td><input type="text" name="title" value="<?php if (isset($land['title'])) {
  echo $land['title'];
} ?>" /></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Address</th>
        </tr>
        <tr>
          <td>Plot No</td>
          <td><input type="text" name="plot_no" value="<?php if (isset($land['plot_no'])) {
  echo $land['plot_no'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Road No</td>
          <td><input type="text" name="road" value="<?php if (isset($land['road'])) {
  echo $land['road'];
} ?>" /></td>
        </tr>
        <tr>
          <td>House No</td>
          <td><input type="text" name="house" value="<?php if (isset($land['house'])) {
  echo $land['house'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Block/Sector</td>
          <td><input type="text" name="sector" value="<?php if (isset($land['sector'])) {
  echo $land['sector'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Country</td>
          <td><input type="text" name="country" value="<?php if (isset($land['country'])) {
  echo $land['country'];
} ?>" /></td>
        </tr>
        <tr>
          <td>District</td>
          <td><input type="text" name="district" value="<?php if (isset($land['district'])) {
  echo $land['district'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Area</td>
          <td><input type="text" name="area" value="<?php if (isset($land['area'])) {
  echo $land['area'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Zip</td>
          <td><input type="text" name="zip" value="<?php if (isset($land['zip'])) {
  echo $land['zip'];
} ?>" /></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Land Specification</th>
        </tr>
        <tr>
          <td>Land Type</td>
          <td><input type="text" name="land_type" value="<?php if (isset($land['land_type'])) {
  echo $land['land_type'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Size</td>
          <td><input type="text" name="size" value="<?php if (isset($land['size'])) {
  echo $land['size'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Size Type</td>
          <td><input type="text" name="size_type" value="<?php if (isset($land['size_type'])) {
  echo $land['size_type'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Land Status</td>
          <td>
            <select name="land_status">
              <option value="Ready" <?php if (isset($land['land_status'])) {
  if ($land['land_status'] == "Ready") {
    echo 'selected';
  }
} ?>>Ready</option>
              <option value="On Going" <?php if (isset($land['land_status'])) {
  if ($land['land_status'] == "On Going") {
    echo 'selected';
  }
} ?>>On Going</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Road Details</td>
          <td><textarea name="road_details" style="width: 228px;"><?php if (isset($land['road_details'])) {
  echo $land['road_details'];
} ?></textarea></td>
        </tr>
        <tr>
          <td>Details</td>
          <td><textarea name="details" style="width: 228px;"><?php if (isset($land['details'])) {
  echo $land['details'];
} ?></textarea></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Financial Details</th>
        </tr>
        <tr>
          <td>Price (sft)</td>
          <td><input type="text" name="price_sft" value="<?php if (isset($land['price_sft'])) {
  echo $land['price_sft'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Price (Total)</td>
          <td><input type="text" name="price_total" value="<?php if (isset($land['price_total'])) {
  echo $land['price_total'];
} ?>" /></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Pictures</th>
        </tr>
        <tr>
          <td>Perspective View</td>
          <td><input type="file" name="perspective_view" /></td>
        </tr>
        <tr>
          <td>Floor Plan</td>
          <td><input type="file" name="floor_plan" /></td>
        </tr>
        <input type="hidden" name="id" value="<?php if (isset($land['id'])) {
  echo $land['id'];
} ?>" />
        <tr>
          <th colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>

    <p>&nbsp;</p>
  </div>
</div>