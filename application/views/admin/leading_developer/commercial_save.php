<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="apartment" method="post" action="admin/leading_developer/commercial_save/<?php echo $developer_id; ?>" enctype="multipart/form-data">
      <table class="listing form" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th class="full" colspan="6">Commercial Entry</th>
        </tr>
        <tr>
          <td class="first">Title</td>
          <td class="last" colspan="5"><input type="text" name="title" value="<?php if (isset($commercial['title'])) { echo $commercial['title'];} ?>" style="width: 390px;" /></td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Address</th>
        </tr>
        <tr>
          <td class="first">Holding No/Plot No</td>
          <td><input type="text" name="house" value="<?php if (isset($commercial['house'])) { echo $commercial['house'];} ?>" style="width: 73px;" /></td>
          <td>Road No</td>
          <td><input type="text" name="road" value="<?php if (isset($commercial['road'])) { echo $commercial['road'];} ?>" style="width: 73px;" /></td>
          <td>Block/Sector</td>
          <td class="last"><input type="text" name="sector" value="<?php if (isset($commercial['sector'])) { echo $commercial['sector'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first">District</td>
          <td>
            <select name="district_id" id="district_id" style="width: 80px;">
              <option>Select One</option>
              <?php foreach($districts as $district){ ?>
              <option value="<?php echo $district['id']; ?>" <?php if (isset($commercial['district_id'])) { if ($district['id'] == $commercial['district_id']) { echo 'selected'; }} ?>><?php echo $district['name']; ?></option>
              <?php } ?>
            </select>
          </td>
          <td>Area</td>
          <td class="last" colspan="3">
            <select name="area_id" id="area_id" style="width: 80px;">
              <option>Select District First</option>
              <?php foreach($areas as $area){ ?>
              <option value="<?php echo $area['id']; ?>" <?php if (isset($commercial['area_id'])) { if ($area['id'] == $commercial['area_id']) { echo 'selected'; }} ?>><?php echo $area['name']; ?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Project Specification</th>
        </tr>
        <tr>
          <td class="first">Project Type</td>
          <td>
		  	<select name="project_type" style="width: 80px;">
			  <option value="Ready" <?php if (isset($commercial['project_type'])) { if ($commercial['project_type'] == "Ready") { echo 'selected'; }} ?>>Ready</option>
			  <option value="Ongoing" <?php if (isset($commercial['project_type'])) { if ($commercial['project_type'] == "Ongoing") { echo 'selected'; }} ?>>Ongoing</option>
			  <option value="Upcoming" <?php if (isset($commercial['project_type'])) { if ($commercial['project_type'] == "Upcoming") { echo 'selected'; }} ?>>Upcoming</option>
          	</select>
		  </td>
          <td>Space Size</td>
          <td><input type="text" name="size" value="<?php if (isset($commercial['size'])) { echo $commercial['size'];} ?>" style="width: 73px;" /></td>
          <td>Front Road Size</td>
          <td class="last"><input type="text" name="front_road_size" value="<?php if (isset($commercial['front_road_size'])) { echo $commercial['front_road_size'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first">Project Name</td>
          <td><input type="text" name="project_name" value="<?php if (isset($commercial['project_name'])) { echo $commercial['project_name'];} ?>" style="width: 75px;" /></td>
          <td>Project Status</td>
          <td>
		    <select name="project_status" style="width: 80px;">
              <option value="Residential" <?php if (isset($commercial['project_status'])) { if ($commercial['project_status'] == "Residential") { echo 'selected'; }} ?>>Residential</option>
              <option value="Commercial" <?php if (isset($commercial['project_status'])) { if ($commercial['project_status'] == "Commercial") { echo 'selected'; }} ?>>Commercial</option>
              <option value="Commercial cum Residential" <?php if (isset($commercial['project_status'])) { if ($commercial['project_status'] == "Commercial cum Residential") { echo 'selected'; }} ?>>Commercial cum Residential</option>
            </select>
		  </td>
          <td>Handover Time</td>
          <td class="last" colspan="5"><input type="text" name="handover_time" value="<?php if (isset($commercial['handover_time'])) { echo $commercial['handover_time'];} ?>" style="width: 73px;" /></td>
        </tr>
		<tr>
          <td class="first">Product Type</td>
          <td>
			  <?php
					$options = array(
					  'Market'  => 'Market',
					  'Office'    => 'Office',
					  'Shop'   => 'Shop'
					);
					echo form_dropdown("product_type",  $options,  set_value("product_type", $commercial['product_type']), 'style="width:80px;"');
			  ?>
		  </td>
          <td>Available Size</td>
          <td><input type="text" name="available_size" value="<?php if (isset($commercial['available_size'])) { echo $commercial['available_size'];} ?>" style="width: 73px;" /></td>
          <td>Total Floor</td>
          <td class="last"><input type="text" name="total_floor" value="<?php if (isset($commercial['total_floor'])) { echo $commercial['total_floor'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first" valign="top">Details</td>
          <td colspan="3"><textarea name="details" style="width: 318px;"></textarea></td>
		  <td>Sold Out</td>
          <td class="last" ><input type="text" name="sold_out" value="<?php if (isset($commercial['sold_out'])) { echo $commercial['sold_out'];} ?>" style="width: 73px;" /></td>
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
          <td class="first">Sales Price</td>
          <td><input type="text" name="rent" value="<?php if (isset($commercial['rent'])) { echo $commercial['rent'];} ?>" style="width: 73px;" /></td>
          <td>Total Price</td>
          <td class="last" colspan="3"><input type="text" name="advance" value="<?php if (isset($commercial['advance'])) { echo $commercial['advance'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Pictures</th>
        </tr>
        <tr>
          <td class="first">Perspective View</td>
          <td class="last" colspan="5"><input type="file" name="perspective_view" /></td>
        </tr>
        <tr>
          <td class="first">Floor Plan</td>
          <td class="last" colspan="5"><input type="file" name="floor_plan" /></td>
        </tr>
        <tr>
          <td class="first">Status</td>
          <td>
            <select name="status" style="width: 80px;">
              <option value="Active" <?php if (isset($commercial['status'])) { if ($commercial['status'] == "Active") { echo 'selected'; }} ?>>Available</option>
              <option value="Sold" <?php if (isset($commercial['status'])) { if ($commercial['status'] == "Sold") { echo 'selected'; }} ?>>Sold</option>
              <option value="Inactive" <?php if (isset($commercial['status'])) { if ($commercial['status'] == "Inactive") { echo 'selected'; }} ?>>Inactive</option>
            </select>
          </td>
          <td>Post Validity</td>
          <td class="last" colspan="3">
            <select name="validity" style="width: 80px;">
              <option value="1 Year" <?php if (isset($commercial['validity'])) { if ($commercial['validity'] == "1 Year") { echo 'selected'; }} ?>>1 Year</option>
              <option value="2 Year" <?php if (isset($commercial['validity'])) { if ($commercial['validity'] == "2 Year") { echo 'selected'; }} ?>>2 Year</option>
              <option value="3 Year" <?php if (isset($commercial['validity'])) { if ($commercial['validity'] == "3 Year") { echo 'selected'; }} ?>>3 Year</option>
              <option value="4 Year" <?php if (isset($commercial['validity'])) { if ($commercial['validity'] == "4 Year") { echo 'selected'; }} ?>>4 Year</option>
              <option value="5 Year" <?php if (isset($commercial['validity'])) { if ($commercial['validity'] == "5 Year") { echo 'selected'; }} ?>>5 Year</option>
            </select>
          </td>
        </tr>
        <input type="hidden" name="id" value="<?php if (isset($commercial['id'])) { echo $commercial['id']; } ?>" />
        <input type="hidden" name="developer_id" value="<?php  echo $developer_id; ?>" />
        <tr>
          <th class="full" colspan="6" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>
  </div>
</div>