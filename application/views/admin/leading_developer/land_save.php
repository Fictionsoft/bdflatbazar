<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="apartment" method="post" action="admin/leading_developer/land_save/<?php echo $developer_id; ?>" enctype="multipart/form-data">
      <table class="listing form" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th class="full" colspan="6">Land Entry</th>
        </tr>
        <tr>
          <td class="first">Title</td>
          <td class="last" colspan="5"><input type="text" name="title" value="<?php if (isset($land['title'])) { echo $land['title'];} ?>" style="width: 390px;" /></td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Address</th>
        </tr>
        <tr>
          <td class="first">Holding No/Plot No</td>
          <td><input type="text" name="house" value="<?php if (isset($land['house'])) { echo $land['house'];} ?>" style="width: 73px;" /></td>
          <td>Road No</td>
          <td><input type="text" name="road" value="<?php if (isset($land['road'])) { echo $land['road'];} ?>" style="width: 73px;" /></td>
          <td>Block/Sector</td>
          <td class="last"><input type="text" name="sector" value="<?php if (isset($land['sector'])) { echo $land['sector'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first">District</td>
          <td>
            <select name="district_id" id="district_id" style="width: 80px;">
              <option>Select One</option>
              <?php foreach($districts as $district){ ?>
              <option value="<?php echo $district['id']; ?>" <?php if (isset($land['district_id'])) { if ($district['id'] == $land['district_id']) { echo 'selected'; }} ?>><?php echo $district['name']; ?></option>
              <?php } ?>
            </select>
          </td>
          <td>Area</td>
          <td class="last" colspan="3">
            <select name="area_id" id="area_id" style="width: 80px;">
              <option>Select District First</option>
              <?php foreach($areas as $area){ ?>
              <option value="<?php echo $area['id']; ?>" <?php if (isset($land['area_id'])) { if ($area['id'] == $land['area_id']) { echo 'selected'; }} ?>><?php echo $area['name']; ?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Land Specification</th>
        </tr>
        <tr>
          <td class="first">Land Type</td>
          <td>
            <select name="land_type" style="width: 80px;">
              <option value="Personal Plot" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Personal Plot") { echo 'selected'; }} ?>>Personal Plot</option>
              <option value="Housing Plot" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Housing Plot") { echo 'selected'; }} ?>>Housing Plot</option>
              <option value="Commercial Plot" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Commercial Plot") { echo 'selected'; }} ?>>Commercial Plot</option>
              <option value="Industrial Plot" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Industrial Plot") { echo 'selected'; }} ?>>Industrial Plot</option>
              <option value="Others" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Others") { echo 'selected'; }} ?>>Others</option>
            </select>
          </td>
          <td>Land Size</td>
          <td>
            <input type="text" name="size" value="<?php if (isset($land['size'])) { echo $land['size'];} ?>" style="width: 30px;" />
            <select name="size_type" style="width: 50px;">
              <option value="Kathha" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Kathha") { echo 'selected'; }} ?>>Kathha</option>
              <option value="Shotok" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Shotok") { echo 'selected'; }} ?>>Shotok</option>
              <option value="Bigha" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Bigha") { echo 'selected'; }} ?>>Bigha</option>
              <option value="Acore" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Acore") { echo 'selected'; }} ?>>Acore</option>
              <option value="Others" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Others") { echo 'selected'; }} ?>>Others</option>
            </select>
          </td>
          <td>Front Road Size</td>
          <td class="last"><input type="text" name="front_road_size" value="<?php if (isset($land['front_road_size'])) { echo $land['front_road_size'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first">Project Name</td>
          <td><input type="text" name="project_name" value="<?php if (isset($land['project_name'])) { echo $land['project_name'];} ?>" style="width: 73px;" /></td>
          <td>Land Status</td>
          <td>
            <select name="land_status" style="width: 80px;">
              <option value="Ready" <?php if (isset($land['land_status'])) { if ($land['land_status'] == "Ready") { echo 'selected'; }} ?>>Ready</option>
              <option value="Ongoing" <?php if (isset($land['land_status'])) { if ($land['land_status'] == "Ongoing") { echo 'selected'; }} ?>>Ongoing</option>
			  <option value="Upcoming" <?php if (isset($land['land_status'])) { if ($land['land_status'] == "Upcoming") { echo 'selected'; }} ?>>Upcoming</option>
            </select>
          </td>
          <td>Handover Time</td>
          <td class="last"><input type="text" name="handover_time" value="<?php if (isset($land['handover_time'])) { echo $land['handover_time'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first">No of Block</td>
		  <td><input type="text" name="no_of_block" value="<?php if (isset($land['no_of_block'])) { echo $land['no_of_block'];} ?>" style="width: 73px;" /></td>
		  <td>Total Plots</td>
		  <td><input type="text" name="total_plots" value="<?php if (isset($land['total_plots'])) { echo $land['total_plots'];} ?>" style="width: 73px;" /></td>
		  <td>Available Plots</td>
          <td class="last" ><input type="text" name="available_plots" value="<?php if (isset($land['available_plots'])) { echo $land['available_plots'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first" valign="top">Road Details</td>
          <td colspan="3"><textarea name="road_details" style="width: 318px;"></textarea></td>
		  <td>Total Project Land Size</td>
          <td class="last" ><input type="text" name="total_project_land_size" value="<?php if (isset($land['total_project_land_size'])) { echo $land['total_project_land_size'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first" valign="top">Details</td>
          <td class="last" colspan="5"><textarea name="details" style="width: 318px;"></textarea></td>
        </tr>
		<tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Distence From</th>
        </tr>
        <tr>
          <td class="first">Mosque</td>
          <td><input type="text" name="mosque" value="<?php if (isset($land['mosque'])) { echo $land['mosque'];} ?>" style="width: 73px;" /></td>
          <td>Bazar</td>
          <td><input type="text" name="bazar" value="<?php if (isset($land['bazar'])) { echo $land['bazar'];} ?>" style="width: 73px;" /></td>
          <td>Hospital</td>
          <td class="last"><input type="text" name="hospital" value="<?php if (isset($land['hospital'])) { echo $land['hospital'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td class="first">School</td>
          <td><input type="text" name="school" value="<?php if (isset($land['school'])) { echo $land['school'];} ?>" style="width: 73px;" /></td>
          <td>College</td>
          <td><input type="text" name="college" value="<?php if (isset($land['college'])) { echo $land['college'];} ?>" style="width: 73px;" /></td>
          <td>ATM</td>
          <td class="last"><input type="text" name="atm" value="<?php if (isset($land['atm'])) { echo $land['atm'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th class="full" colspan="6">&nbsp;</th>
        </tr>
        <tr>
          <th class="full" colspan="6" align="left">Financial Details</th>
        </tr>
        <tr>
          <td class="first">Price</td>
          <td>
            <input type="text" name="sale_price" value="<?php if (isset($land['sale_price'])) { echo $land['sale_price'];} ?>" style="width: 73px;" />           
          </td>
          <td>Total Price</td>
          <td class="last" colspan="3"><input type="text" name="total_price" value="<?php if (isset($land['total_price'])) { echo $land['total_price'];} ?>" style="width: 73px;" /></td>
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
              <option value="Active" <?php if (isset($land['status'])) { if ($land['status'] == "Active") { echo 'selected'; }} ?>>Available</option>
              <option value="Sold" <?php if (isset($land['status'])) { if ($land['status'] == "Sold") { echo 'selected'; }} ?>>Sold</option>
              <option value="Inactive" <?php if (isset($land['status'])) { if ($land['status'] == "Inactive") { echo 'selected'; }} ?>>Inactive</option>
            </select>
          </td>
          <td>Post Validity</td>
          <td class="last" colspan="3">
            <select name="validity" style="width: 80px;">
              <option value="1 Year" <?php if (isset($land['validity'])) { if ($land['validity'] == "1 Year") { echo 'selected'; }} ?>>1 Year</option>
              <option value="2 Year" <?php if (isset($land['validity'])) { if ($land['validity'] == "2 Year") { echo 'selected'; }} ?>>2 Year</option>
              <option value="3 Year" <?php if (isset($land['validity'])) { if ($land['validity'] == "3 Year") { echo 'selected'; }} ?>>3 Year</option>
              <option value="4 Year" <?php if (isset($land['validity'])) { if ($land['validity'] == "4 Year") { echo 'selected'; }} ?>>4 Year</option>
              <option value="5 Year" <?php if (isset($land['validity'])) { if ($land['validity'] == "5 Year") { echo 'selected'; }} ?>>5 Year</option>
            </select>
          </td>
        </tr>
        <input type="hidden" name="id" value="<?php if (isset($land['id'])) { echo $land['id']; } ?>" />
        <input type="hidden" name="developer_id" value="<?php  echo $developer_id; ?>" />
        <tr>
          <th class="full" colspan="6" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>
  </div>
</div>