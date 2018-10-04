<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />

    <form name="apartment" method="post" action="admin/apartment/sale_save" enctype="multipart/form-data">
      <table class="listing form" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th class="full" colspan="6">Apartment Sale Save</th>
        </tr>
        <tr>
          <td width="120">Title :</td>
          <td colspan="5"><input type="text" name="title" value="<?php if (isset($apt['title'])) { echo $apt['title'];} ?>" style="width: 439px;" /></td>
        </tr>
        <tr>
          <th colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="6" align="left">Address</th>
        </tr>
        <tr>
          <td>House No :</td>
          <td><input type="text" name="house" value="<?php if (isset($apt['house'])) { echo $apt['house'];} ?>" style="width: 73px;" /></td>
          <td>Road No :</td>
          <td><input type="text" name="road" value="<?php if (isset($apt['road'])) { echo $apt['road'];} ?>" style="width: 73px;" /></td>
          <td>Sector :</td>
          <td><input type="text" name="sector" value="<?php if (isset($apt['sector'])) { echo $apt['sector'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>District :</td>
          <td><input type="text" name="district" value="<?php if (isset($apt['district'])) { echo $apt['district'];} ?>" style="width: 73px;" /></td>
          <td>Area :</td>
          <td colspan="3"><input type="text" name="area" value="<?php if (isset($apt['area'])) { echo $apt['area'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="6" align="left">Apartment Specification</th>
        </tr>
        <tr>
          <td>Apt. Type :</td>
          <td>
            <select name="apt_type" style="width: 80px;">
              <option value="Ready" <?php if (isset($apt['apt_type'])) { if ($apt['apt_type'] == "Ready") { echo 'selected'; }} ?>>Ready</option>
              <option value="Ongoing" <?php if (isset($apt['apt_type'])) { if ($apt['apt_type'] == "Ongoing") { echo 'selected'; }} ?>>Ongoing</option>
              <option value="Used" <?php if (isset($apt['apt_type'])) { if ($apt['apt_type'] == "Used") { echo 'selected'; }} ?>>Used</option>
              <option value="Upcoming" <?php if (isset($apt['apt_type'])) { if ($apt['apt_type'] == "Upcoming") { echo 'selected'; }} ?>>Upcoming</option>
            </select>
          </td>
          <td>Size :</td>
          <td><input type="text" name="size" value="<?php if (isset($apt['size'])) { echo $apt['size'];} ?>" style="width: 73px;" /></td>
          <td>Common Bath :</td>
          <td><input type="text" name="common_bath" value="<?php if (isset($apt['common_bath'])) { echo $apt['common_bath'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Project Name :</td>
          <td><input type="text" name="bed" value="<?php if (isset($apt['bed'])) { echo $apt['bed'];} ?>" style="width: 73px;" /></td>
          <td>Bed :</td>
          <td><input type="text" name="bed" value="<?php if (isset($apt['bed'])) { echo $apt['bed'];} ?>" style="width: 73px;" /></td>
          <td>Veranda :</td>
          <td><input type="text" name="veranda" value="<?php if (isset($apt['veranda'])) { echo $apt['veranda'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Company Name :</td>
          <td><input type="text" name="bed" value="<?php if (isset($apt['bed'])) { echo $apt['bed'];} ?>" style="width: 73px;" /></td>
          <td>Car Parking :</td>
          <td><input type="text" name="car_parking" value="<?php if (isset($apt['car_parking'])) { echo $apt['car_parking'];} ?>" style="width: 73px;" /></td>
          <td>Floor :</td>
          <td><input type="text" name="floor" value="<?php if (isset($apt['floor'])) { echo $apt['floor'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Attached Bath :</td>
          <td><input type="text" name="attached_bath" value="<?php if (isset($apt['attached_bath'])) { echo $apt['attached_bath'];} ?>" style="width: 73px;" /></td>
          <td>Living :</td>
          <td><input type="text" name="living" value="<?php if (isset($apt['living'])) { echo $apt['living'];} ?>" style="width: 73px;" /></td>
          <td>Dining :</td>
          <td><input type="text" name="dining" value="<?php if (isset($apt['dining'])) { echo $apt['dining'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="6" align="left">Optional Specification</th>
        </tr>
        <tr>
          <td>Building Facing :</td>
          <td><input type="text" name="building_facing" value="<?php if (isset($apt['building_facing'])) { echo $apt['building_facing'];} ?>" style="width: 73px;" /></td>
          <td>Flat Facing :</td>
          <td><input type="text" name="flat_facing" value="<?php if (isset($apt['flat_facing'])) { echo $apt['flat_facing'];} ?>" style="width: 73px;" /></td>
          <td>Front Road Size :</td>
          <td><input type="text" name="front_road_size" value="<?php if (isset($apt['front_road_size'])) { echo $apt['front_road_size'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Handover Time :</td>
          <td><input type="text" name="handover_time" value="<?php if (isset($apt['handover_time'])) { echo $apt['handover_time'];} ?>" style="width: 73px;" /></td>
          <td>Building Type :</td>
          <td><input type="text" name="building_type" value="<?php if (isset($apt['building_type'])) { echo $apt['building_type'];} ?>" style="width: 73px;" /></td>
          <td>Floor Type :</td>
          <td><input type="text" name="floor_type" value="<?php if (isset($apt['floor_type'])) { echo $apt['floor_type'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Project Land Size :</td>
          <td colspan="5"><input type="text" name="project_land_size" value="<?php if (isset($apt['project_land_size'])) { echo $apt['project_land_size'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td colspan="6">
            Lift : <input type="checkbox" name="lift" value="1" />&nbsp;&nbsp;
            CCTV : <input type="checkbox" name="cctv" value="1" />&nbsp;&nbsp;
            Generator : <input type="checkbox" name="generator" value="1" />&nbsp;&nbsp;
            Intercom : <input type="checkbox" name="intercom" value="1" />&nbsp;&nbsp;
            Concealed Phone : <input type="checkbox" name="concealed_phone" value="1" />&nbsp;&nbsp;
            Staff Toilet : <input type="checkbox" name="staff_toilet" value="1" />&nbsp;&nbsp;
            Staff Room : <input type="checkbox" name="staff_room" value="1" />&nbsp;&nbsp;
            Security : <input type="checkbox" name="security" value="1" />&nbsp;&nbsp;
            Fire Exit : <input type="checkbox" name="fire_exit" value="1" />&nbsp;&nbsp;
            Gym : <input type="checkbox" name="gym" value="1" />&nbsp;&nbsp;
            Club : <input type="checkbox" name="club" value="1" />&nbsp;&nbsp;
            Swimming Pool : <input type="checkbox" name="swiming_pool" value="1" />&nbsp;&nbsp;
            Gas : <input type="checkbox" name="gas" value="1" />&nbsp;&nbsp;
          </td>
        </tr>
        <tr>
          <th colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="6" align="left">Financial Details</th>
        </tr>
        <tr>
          <td>Sales Price (sft) :</td>
          <td><input type="text" name="price_sft" value="<?php if (isset($apt['price_sft'])) { echo $apt['price_sft'];} ?>" style="width: 73px;" /></td>
          <td>Car Parking Price :</td>
          <td><input type="text" name="parking_price" value="<?php if (isset($apt['parking_price'])) { echo $apt['parking_price'];} ?>" style="width: 73px;" /></td>
          <td>Utility Price :</td>
          <td><input type="text" name="utility_price" value="<?php if (isset($apt['utility_price'])) { echo $apt['utility_price'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Price (Total) :</td>
          <td colspan="5"><input type="text" name="price_total" value="<?php if (isset($apt['price_total'])) { echo $apt['price_total'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th colspan="6" align="left">Pictures</th>
        </tr>
        <tr>
          <td>Perspective View :</td>
          <td colspan="5"><input type="file" name="perspective_view" /></td>
        </tr>
        <tr>
          <td>Floor Plan :</td>
          <td colspan="5"><input type="file" name="floor_plan" /></td>
        </tr>
        <tr>
          <td valign="top">Details :</td>
          <td colspan="5">
            <textarea name="details" style="width: 318px;"></textarea>
          </td>
        </tr>
        <input type="hidden" name="id" value="<?php if (isset($apt['id'])) { echo $apt['id']; } ?>" />
        <tr>
          <th colspan="6" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>

    <p>&nbsp;</p>
  </div>
</div>