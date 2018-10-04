<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div class="title-bg">
      <div class="title-featured">
        <span id="">Commercial Sale Save</span>            
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1">
        <form name="commercial" method="post" action="my_account/commercial_sale_save" enctype="multipart/form-data">
          <table border="0" cellpadding="2" cellspacing="2" style="font-size: 11px;">
            <tr>
              <td>Title</td>
              <td colspan="5"><input type="text" required  name="title" value="<?php if (isset($commercial['title'])) { echo $commercial['title'];} ?>" style="width: 390px;" /></td>
            </tr>
            <tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="6" align="left">Address</th>
            </tr>
            <tr>
              <td>House No</td>
              <td><input type="text" name="house" value="<?php if (isset($commercial['house'])) { echo $commercial['house'];} ?>" style="width: 73px;" /></td>
              <td>Road No</td>
              <td><input type="text" name="road" value="<?php if (isset($commercial['road'])) { echo $commercial['road'];} ?>" style="width: 73px;" /></td>
              <td>Sector</td>
              <td><input type="text" name="sector" value="<?php if (isset($commercial['sector'])) { echo $commercial['sector'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>District</td>
              <td>
                <select name="district_id" id="district_id" style="width: 80px;">
                  <option>Select One</option>
                  <?php foreach($districts as $district){ ?>
                  <option value="<?php echo $district['id']; ?>" <?php if (isset($commercial['district_id'])) { if ($district['id'] == $commercial['district_id']) { echo 'selected'; }} ?>><?php echo $district['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
              <td>Area</td>
              <td colspan="3">
                <select name="area_id" id="area_id" style="width: 80px;">
                  <option>Select District First</option>
                  <?php foreach($areas as $area){ ?>
                  <option value="<?php echo $area['id']; ?>" <?php if (isset($commercial['area_id'])) { if ($area['id'] == $commercial['area_id']) { echo 'selected'; }} ?>><?php echo $area['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="6" align="left">Project Specification</th>
            </tr>
            <tr>
              <td>Project Type</td>
              <td>
                <select name="project_type" style="width: 80px;">
                  <option value="Ready" <?php if (isset($commercial['project_type'])) { if ($commercial['project_type'] == "Ready") { echo 'selected'; }} ?>>Ready</option>
                  <option value="Ongoing" <?php if (isset($commercial['project_type'])) { if ($commercial['project_type'] == "Ongoing") { echo 'selected'; }} ?>>Ongoing</option>
                  <option value="Used" <?php if (isset($commercial['project_type'])) { if ($commercial['project_type'] == "Used") { echo 'selected'; }} ?>>Used</option>
                  <option value="Upcoming" <?php if (isset($commercial['project_type'])) { if ($commercial['project_type'] == "Upcoming") { echo 'selected'; }} ?>>Upcoming</option>
                </select>
              </td>
              <td>Space Size</td>
              <td><input type="text" required name="size" value="<?php if (isset($commercial['size'])) { echo $commercial['size'];} ?>" style="width: 73px;" /></td>
              <td>Front Road Size</td>
              <td><input type="text" name="front_road_size" value="<?php if (isset($commercial['front_road_size'])) { echo $commercial['front_road_size'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>Project Name</td>
              <td><input type="text" name="project_name" value="<?php if (isset($commercial['project_name'])) { echo $commercial['project_name'];} ?>" style="width: 73px;" /></td>
              <td>Project Status</td>
              <td>
                <select name="project_status" style="width: 80px;">
                  <option value="Residential" <?php if (isset($commercial['project_status'])) { if ($commercial['project_status'] == "Residential") { echo 'selected'; }} ?>>Residential</option>
                  <option value="Commercial" <?php if (isset($commercial['project_status'])) { if ($commercial['project_status'] == "Commercial") { echo 'selected'; }} ?>>Commercial</option>
                  <option value="Commercial cum Residential" <?php if (isset($commercial['project_status'])) { if ($commercial['project_status'] == "Commercial cum Residential") { echo 'selected'; }} ?>>Commercial cum Residential</option>
                </select>
              </td>
              <td>Handover Time</td>
              <td><input type="text" name="handover_time" value="<?php if (isset($commercial['handover_time'])) { echo $commercial['handover_time'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>Company Name</td>
              <td ><input type="text" name="company_name" value="<?php if (isset($commercial['company_name'])) { echo $commercial['company_name'];} ?>" style="width: 73px;" /></td>
			  <td>Total Floor :</td>
              <td colspan="3">
                <select name="floor" style="width: 80px;">
                  <?php
                  for($j=1;$j<=25;$j++){
                  ?>
                  <option value="<?php echo $j; ?>" <?php if (isset($apt['floor'])) { if ($apt['floor'] == $j) { echo 'selected'; }} ?>><?php echo $j; ?></option>
                  <?php
                  }
                  ?>
                  <option value="Others" <?php if (isset($apt['floor'])) { if ($apt['floor'] == 'Others') { echo 'selected'; }} ?>>Others</option>
                </select>
              </td>
            </tr>
            <tr>
              <td valign="top">Details</td>
              <td colspan="5"><textarea name="details" style="width: 318px;"></textarea></td>
            </tr>
			<tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="6" align="left">Optional Specification</th>
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
                          <td><font color="#FF0000"><b>Owner Number:</b></font></td>
              <td><input type="text" required name="owner_number" value="<?php if (isset($apt['owner_number'])) { echo $apt['owner_number'];} ?>" style="width: 100px;" /></td>
              <td><th>Owner Name :</th></td>
              <td><input type="text" name="owner_name" value="<?php if (isset($apt['owner_name'])) { echo $apt['owner_name'];} ?>" style="width: 100px;" /></td>
            </tr>
            <tr>
              <th colspan="6" align="left">Financial Details</th>
            </tr>
            <tr>
              <td>Sales Price</td>
              <td><input type="text" name="rent" value="<?php if (isset($commercial['rent'])) { echo $commercial['rent'];} ?>" style="width: 73px;" /></td>
              <td>Total Price</td>
              <td colspan="3"><input type="text" name="advance" value="<?php if (isset($commercial['advance'])) { echo $commercial['advance'];} ?>" style="width: 73px;" /></td>
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
            <tr>
              <td>Status</td>
              <td>
                <select name="status" style="width: 80px;">
                  <option value="Active" <?php if (isset($commercial['status'])) { if ($commercial['status'] == "Active") { echo 'selected'; }} ?>>Available</option>
                  <option value="Sold" <?php if (isset($commercial['status'])) { if ($commercial['status'] == "Sold") { echo 'selected'; }} ?>>Sold</option>
                  <option value="Inactive" <?php if (isset($commercial['status'])) { if ($commercial['status'] == "Inactive") { echo 'selected'; }} ?>>Inactive</option>
                </select>
              </td>
              <td>Post Validity</td>
              <td colspan="3">
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
            <tr>
              <th colspan="6" align="center"><input type="submit" name="submit" value="Submit" /></th>
            </tr>
          </table>
        </form>
      </div>

      <div class="clear"></div>
    </div>
  </div>

</div>