<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="apartment" method="post" action="admin/leading_developer/apt_save/<?php echo $developer_id; ?>" enctype="multipart/form-data">
      <table class="listing form" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th class="full" colspan="6">Apartment Entry</th>
        </tr>
        <tr>
          <td class="first" width="120">Title :</td>
          <td class="last" colspan="5"><input type="text" name="title" value="<?php if (isset($apt['title'])) { echo $apt['title'];} ?>" style="width: 439px;" /></td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Address</th>
        </tr>
        <tr>
          <td class="first">House No :</td>
          <td><input type="text" name="house" value="<?php if (isset($apt['house'])) { echo $apt['house'];} ?>" style="width: 73px;" /></td>
          <td>Road No :</td>
          <td><input type="text" name="road" value="<?php if (isset($apt['road'])) { echo $apt['road'];} ?>" style="width: 73px;" /></td>
          <td>Block/Sector :</td>
          <td class="last"><input type="text" name="sector" value="<?php if (isset($apt['sector'])) { echo $apt['sector'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first">District</td>
          <td>
            <select name="district_id" id="district_id" style="width: 80px;">
              <option>Select One</option>
              <?php foreach($districts as $district){ ?>
              <option value="<?php echo $district['id']; ?>" <?php if (isset($apt['district_id'])) { if ($district['id'] == $apt['district_id']) { echo 'selected'; }} ?>><?php echo $district['name']; ?></option>
              <?php } ?>
            </select>
          </td>
          <td>Area</td>
          <td class="last" colspan="3">
            <select name="area_id" id="area_id" style="width: 80px;">
              <option>Select District First</option>
              <?php foreach($areas as $area){ ?>
              <option value="<?php echo $area['id']; ?>" <?php if (isset($apt['area_id'])) { if ($area['id'] == $apt['area_id']) { echo 'selected'; }} ?>><?php echo $area['name']; ?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Apartment Specification</th>
        </tr>
        <tr>
          <td class="first">Project Name :</td>
          <td><input type="text" name="project_name" value="<?php if (isset($apt['project_name'])) { echo $apt['project_name'];} ?>" style="width: 73px;" /></td>
          <td>Project Type :</td>
          <td>
		  	<select name="apt_type" style="width: 80px;">
			  <option value="Ready" <?php if (isset($apt['apt_type'])) { if ($apt['apt_type'] == "Ready") { echo 'selected'; }} ?>>Ready</option>
			  <option value="Ongoing" <?php if (isset($apt['apt_type'])) { if ($apt['apt_type'] == "Ongoing") { echo 'selected'; }} ?>>Ongoing</option>
			  <option value="Upcoming" <?php if (isset($apt['apt_type'])) { if ($apt['apt_type'] == "Upcoming") { echo 'selected'; }} ?>>Upcoming</option>
			</select>
		  </td>
          <td>Size :</td>
          <td class="last"><input type="text" name="size" value="<?php if (isset($apt['size'])) { echo $apt['size'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first">Building Type :</td>
          <td>
            <select name="building_type" style="width: 80px;">
              <option value="Residential" <?php if (isset($apt['building_type'])) { if ($apt['building_type'] == "Residential") { echo 'selected'; }} ?>>Residential</option>
              <option value="Commercial" <?php if (isset($apt['building_type'])) { if ($apt['building_type'] == "Commercial") { echo 'selected'; }} ?>>Commercial</option>
              <option value="Commercial cum Residential" <?php if (isset($apt['building_type'])) { if ($apt['building_type'] == "Commercial cum Residential") { echo 'selected'; }} ?>>Commercial cum Residential</option>
            </select>
          </td>
          <td>Front Side Road Size :</td>
          <td>
            <input type="text" name="front_road_size" value="<?php if (isset($apt['front_road_size'])) { echo $apt['front_road_size'];} ?>" style="width: 73px;" />
          </td>
          <td>Total Floor :</td>
          <td class="last">
		  	<input type="text" name="floor" value="<?php if (isset($apt['floor'])) { echo $apt['floor'];} ?>" style="width: 73px;" />
          </td>
        </tr>
        <tr>          
          <td>Building Facing :</td>
          <td>
            <input type="text" name="building_facing" value="<?php if (isset($apt['building_facing'])) { echo $apt['building_facing'];} ?>" style="width: 73px;" />
          </td>
          <td>Total Land Size :</td>
          <td>
            <input type="text" name="project_land_size" value="<?php if (isset($apt['project_land_size'])) { echo $apt['project_land_size'];} ?>" style="width: 73px;" />
          </td>
          <td>Total Apartment :</td>
          <td class="last"><input type="text" name="total_apartment" value="<?php if (isset($apt['total_apartment'])) { echo $apt['total_apartment'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>          
          <td>Available Apart Size :</td>
          <td>
            <input type="text" name="available_apartment_size" value="<?php if (isset($apt['available_apartment_size'])) { echo $apt['available_apartment_size'];} ?>" style="width: 73px;" />
          </td>
          <td>Sold Out Apart :</td>
          <td>
            <input type="text" name="sold_out_apart" value="<?php if (isset($apt['sold_out_apart'])) { echo $apt['sold_out_apart'];} ?>" style="width: 73px;" />
          </td>
          <td>Available Floor :</td>
          <td class="last"><input type="text" name="available_floor" value="<?php if (isset($apt['available_floor'])) { echo $apt['available_floor'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Optional Specification</th>
        </tr>
        <tr>
          <td class="first">Floor Type :</td>
          <td>
		   <select name="floor_type" style="width: 80px;">
              <option value="Mosaic" <?php if (isset($apt['floor_type'])) { if ($apt['floor_type'] == "Mosaic") { echo 'selected'; }} ?>>Mosaic</option>
              <option value="Tiled" <?php if (isset($apt['floor_type'])) { if ($apt['floor_type'] == "Tiled") { echo 'selected'; }} ?>>Tiled</option>
              <option value="Marble" <?php if (isset($apt['floor_type'])) { if ($apt['floor_type'] == "Marble") { echo 'selected'; }} ?>>Marble</option>
              <option value="Other" <?php if (isset($apt['floor_type'])) { if ($apt['floor_type'] == "Other") { echo 'selected'; }} ?>>Other</option>
            </select>
		  </td>
          <td>Handover Time :</td>
          <td><input type="text" name="handover_time" value="<?php if (isset($apt['handover_time'])) { echo $apt['handover_time'];} ?>" style="width: 73px;" /></td>
          <td>Per Floor Unit :</td>
          <td class="last"><input type="text" name="per_floor_unit" value="<?php if (isset($apt['per_floor_unit'])) { echo $apt['per_floor_unit'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="full" colspan="6">
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
			Water : <input type="checkbox" name="water" value="1" />&nbsp;&nbsp;
			Electricity : <input type="checkbox" name="electricity" value="1" />&nbsp;&nbsp;
			Community Hall : <input type="checkbox" name="community_hall" value="1" />&nbsp;&nbsp;
			Play Ground : <input type="checkbox" name="play_ground" value="1" />&nbsp;&nbsp;
			Helipad : <input type="checkbox" name="helipad" value="1" />&nbsp;&nbsp;
			Roof Top : <input type="checkbox" name="roof_top" value="1" />&nbsp;&nbsp;
			Car Parking : <input type="checkbox" name="car_parking_has" value="1" />&nbsp;&nbsp;
          </td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Financial Details</th>
        </tr>
        <tr>
          <td class="first">Sales Price (sft) :</td>
          <td><input type="text" name="price_sft" value="<?php if (isset($apt['price_sft'])) { echo $apt['price_sft'];} ?>" style="width: 73px;" /></td>
          <td>Price (Total) :</td>
          <td class="last" colspan="3"><input type="text" name="price_total" value="<?php if (isset($apt['price_total'])) { echo $apt['price_total'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Pictures</th>
        </tr>
        <tr>
          <td class="first">Perspective View :</td>
          <td class="last" colspan="5"><input type="file" name="perspective_view" /></td>
        </tr>
        <tr>
          <td class="first">Floor Plan :</td>
          <td class="last" colspan="5"><input type="file" name="floor_plan" /></td>
        </tr>
        <tr>
          <td class="first" valign="top">Details :</td>
          <td class="last" colspan="5">
            <textarea name="details" style="width: 318px;"></textarea>
          </td>
        </tr>
        <tr>
          <td class="first">Status</td>
          <td>
            <select name="status" style="width: 80px;">
              <option value="Active" <?php if (isset($apt['status'])) { if ($apt['status'] == "Active") { echo 'selected'; }} ?>>Available</option>
              <option value="Sold" <?php if (isset($apt['status'])) { if ($apt['status'] == "Sold") { echo 'selected'; }} ?>>Sold</option>
              <option value="Inactive" <?php if (isset($apt['status'])) { if ($apt['status'] == "Inactive") { echo 'selected'; }} ?>>Inactive</option>
            </select>
          </td>
          <td>Post Validity</td>
          <td class="last" colspan="3">
            <select name="validity" style="width: 80px;">
              <option value="1 Year" <?php if (isset($apt['validity'])) { if ($apt['validity'] == "1 Year") { echo 'selected'; }} ?>>1 Year</option>
              <option value="2 Year" <?php if (isset($apt['validity'])) { if ($apt['validity'] == "2 Year") { echo 'selected'; }} ?>>2 Year</option>
              <option value="3 Year" <?php if (isset($apt['validity'])) { if ($apt['validity'] == "3 Year") { echo 'selected'; }} ?>>3 Year</option>
              <option value="4 Year" <?php if (isset($apt['validity'])) { if ($apt['validity'] == "4 Year") { echo 'selected'; }} ?>>4 Year</option>
              <option value="5 Year" <?php if (isset($apt['validity'])) { if ($apt['validity'] == "5 Year") { echo 'selected'; }} ?>>5 Year</option>
            </select>
          </td>
        </tr>
        <input type="hidden" name="id" value="<?php if (isset($apt['id'])) { echo $apt['id']; } ?>" />
        <input type="hidden" name="developer_id" value="<?php  echo $developer_id; ?>" />
        <tr>
          <th class="full" colspan="6" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>
  </div>
</div>