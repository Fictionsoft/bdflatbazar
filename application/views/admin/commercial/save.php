<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="commercial" method="post" action="admin/commercial/save" enctype="multipart/form-data">
      <table class="listing form" cellpadding="0" cellspacing="0">
        <tr>
          <th class="full" colspan="2">Commercial Save</th>
        </tr>
        <tr>
          <td>Title</td>
          <td><input type="text" name="title" value="<?php if (isset($commercial['title'])) {
  echo $commercial['title'];
} ?>" /></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Address</th>
        </tr>
        <tr>
          <td>Holding No</td>
          <td><input type="text" name="holding_no" value="<?php if (isset($commercial['holding_no'])) {
  echo $commercial['holding_no'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Road No</td>
          <td><input type="text" name="road" value="<?php if (isset($commercial['road'])) {
  echo $commercial['road'];
} ?>" /></td>
        </tr>
        <tr>
          <td>House No</td>
          <td><input type="text" name="house" value="<?php if (isset($commercial['house'])) {
  echo $commercial['house'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Block/Sector</td>
          <td><input type="text" name="sector" value="<?php if (isset($commercial['sector'])) {
  echo $commercial['sector'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Country</td>
          <td><input type="text" name="country" value="<?php if (isset($commercial['country'])) {
  echo $commercial['country'];
} ?>" /></td>
        </tr>
        <tr>
          <td>District</td>
          <td><input type="text" name="district" value="<?php if (isset($commercial['district'])) {
  echo $commercial['district'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Area</td>
          <td><input type="text" name="area" value="<?php if (isset($commercial['area'])) {
  echo $commercial['area'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Zip</td>
          <td><input type="text" name="zip" value="<?php if (isset($commercial['zip'])) {
  echo $commercial['zip'];
} ?>" /></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Space Specification</th>
        </tr>
        <tr>
          <td>Complex/House/Market Name</td>
          <td><input type="text" name="complex" value="<?php if (isset($commercial['complex'])) {
  echo $commercial['complex'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Size</td>
          <td><input type="text" name="size" value="<?php if (isset($commercial['size'])) {
  echo $commercial['size'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Floor</td>
          <td><input type="text" name="floor" value="<?php if (isset($commercial['floor'])) {
  echo $commercial['floor'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Total Floor</td>
          <td><input type="text" name="total_floor" value="<?php if (isset($commercial['total_floor'])) {
  echo $commercial['total_floor'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Building Type</td>
          <td><input type="text" name="building_type" value="<?php if (isset($commercial['building_type'])) {
  echo $commercial['building_type'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Rent Out</td>
          <td><input type="text" name="rent_out" value="<?php if (isset($commercial['rent_out'])) {
  echo $commercial['rent_out'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Details</td>
          <td><textarea name="details" style="width: 228px;"><?php if (isset($commercial['details'])) {
  echo $commercial['details'];
} ?></textarea></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Financial Details</th>
        </tr>
        <tr>
          <td>Price (sft)</td>
          <td><input type="text" name="price_sft" value="<?php if (isset($commercial['price_sft'])) {
  echo $commercial['price_sft'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Price (Total)</td>
          <td><input type="text" name="price_total" value="<?php if (isset($commercial['price_total'])) {
  echo $commercial['price_total'];
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
        <input type="hidden" name="id" value="<?php if (isset($commercial['id'])) {
  echo $commercial['id'];
} ?>" />
        <tr>
          <th colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>

    <p>&nbsp;</p>
  </div>
</div>