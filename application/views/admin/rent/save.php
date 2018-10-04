<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="rent" method="post" action="admin/rent/save" enctype="multipart/form-data">
      <table class="listing form" cellpadding="0" cellspacing="0">
        <tr>
          <th class="full" colspan="2">Rent Save</th>
        </tr>
        <tr>
          <td>Title</td>
          <td><input type="text" name="title" value="<?php if (isset($rent['title'])) {
  echo $rent['title'];
} ?>" /></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Address</th>
        </tr>
        <tr>
          <td>Holding No</td>
          <td><input type="text" name="holding_no" value="<?php if (isset($rent['holding_no'])) {
  echo $rent['holding_no'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Road No</td>
          <td><input type="text" name="road" value="<?php if (isset($rent['road'])) {
  echo $rent['road'];
} ?>" /></td>
        </tr>
        <tr>
          <td>House No</td>
          <td><input type="text" name="house" value="<?php if (isset($rent['house'])) {
  echo $rent['house'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Block/Sector</td>
          <td><input type="text" name="sector" value="<?php if (isset($rent['sector'])) {
  echo $rent['sector'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Country</td>
          <td><input type="text" name="country" value="<?php if (isset($rent['country'])) {
  echo $rent['country'];
} ?>" /></td>
        </tr>
        <tr>
          <td>District</td>
          <td><input type="text" name="district" value="<?php if (isset($rent['district'])) {
  echo $rent['district'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Area</td>
          <td><input type="text" name="area" value="<?php if (isset($rent['area'])) {
  echo $rent['area'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Zip</td>
          <td><input type="text" name="zip" value="<?php if (isset($rent['zip'])) {
  echo $rent['zip'];
} ?>" /></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Space Specification</th>
        </tr>
        <tr>
          <td>Complex/House/Market Name</td>
          <td><input type="text" name="complex" value="<?php if (isset($rent['complex'])) {
  echo $rent['complex'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Size</td>
          <td><input type="text" name="size" value="<?php if (isset($rent['size'])) {
  echo $rent['size'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Floor</td>
          <td><input type="text" name="floor" value="<?php if (isset($rent['floor'])) {
  echo $rent['floor'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Total Floor</td>
          <td><input type="text" name="total_floor" value="<?php if (isset($rent['total_floor'])) {
  echo $rent['total_floor'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Building Type</td>
          <td><input type="text" name="building_type" value="<?php if (isset($rent['building_type'])) {
  echo $rent['building_type'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Rent Out</td>
          <td><input type="text" name="rent_out" value="<?php if (isset($rent['rent_out'])) {
  echo $rent['rent_out'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Details</td>
          <td><textarea name="details"></textarea></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Financial Details</th>
        </tr>
        <tr>
          <td>Price (sft)</td>
          <td><input type="text" name="price_sft" value="<?php if (isset($rent['price_sft'])) {
  echo $rent['price_sft'];
} ?>" /></td>
        </tr>
        <tr>
          <td>Price (Total)</td>
          <td><input type="text" name="price_total" value="<?php if (isset($rent['price_total'])) {
  echo $rent['price_total'];
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
        <input type="hidden" name="id" value="<?php if (isset($rent['id'])) {
  echo $rent['id'];
} ?>" />
        <tr>
          <th colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>

    <p>&nbsp;</p>
  </div>
</div>