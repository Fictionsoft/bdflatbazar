<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div class="title-bg">
      <div class="title-featured">
        <span id="">Apartment Sale Save</span>            
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1">
        <form name="apartment" method="post" action="my_account/apt_sale_save" enctype="multipart/form-data">
          <table border="0" cellpadding="2" cellspacing="2" style="font-size: 11px;">
            <tr>
              <td width="120">Title :</td>
              <td colspan="5"><input type="text"required name="title" value="<?php if (isset($apt['title'])) { echo $apt['title'];} ?>" style="width: 439px;" /></td>
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
              <td>District</td>
              <td>
                <select name="district_id" id="district_id" style="width: 80px;">
                  <option>Select One</option>
                  <?php foreach($districts as $district){ ?>
                  <option value="<?php echo $district['id']; ?>" <?php if (isset($apt['district_id'])) { if ($district['id'] == $apt['district_id']) { echo 'selected'; }} ?>><?php echo $district['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
              <td>Area</td>
              <td colspan="3">
                <select name="area_id" id="area_id" style="width: 80px;">
                  <option>Select District First</option>
                  <?php foreach($areas as $area){ ?>
                  <option value="<?php echo $area['id']; ?>" <?php if (isset($apt['area_id'])) { if ($area['id'] == $apt['area_id']) { echo 'selected'; }} ?>><?php echo $area['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
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
              <td><input type="text" required name="size" value="<?php if (isset($apt['size'])) { echo $apt['size'];} ?>" style="width: 73px;" /></td>
              <td>Common Bath :</td>
              <td>
                <select name="common_bath" style="width: 80px;">
                  <option value="1" <?php if (isset($apt['common_bath'])) { if ($apt['common_bath'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($apt['common_bath'])) { if ($apt['common_bath'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($apt['common_bath'])) { if ($apt['common_bath'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($apt['common_bath'])) { if ($apt['common_bath'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($apt['common_bath'])) { if ($apt['common_bath'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($apt['common_bath'])) { if ($apt['common_bath'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Project Name :</td>
              <td><input type="text" name="project_name" value="<?php if (isset($apt['project_name'])) { echo $apt['project_name'];} ?>" style="width: 73px;" /></td>
              <td>Bed :</td>
              <td>
                <select name="bed" style="width: 80px;">
                  <option value="1" <?php if (isset($apt['bed'])) { if ($apt['bed'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($apt['bed'])) { if ($apt['bed'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($apt['bed'])) { if ($apt['bed'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($apt['bed'])) { if ($apt['bed'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($apt['bed'])) { if ($apt['bed'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($apt['bed'])) { if ($apt['bed'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
              <td>Veranda :</td>
              <td>
                <select name="veranda" style="width: 80px;">
                  <option value="1" <?php if (isset($apt['veranda'])) { if ($apt['veranda'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($apt['veranda'])) { if ($apt['veranda'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($apt['veranda'])) { if ($apt['veranda'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($apt['veranda'])) { if ($apt['veranda'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($apt['veranda'])) { if ($apt['veranda'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($apt['veranda'])) { if ($apt['veranda'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Company Name :</td>
              <td><input type="text" name="company_name" value="<?php if (isset($apt['company_name'])) { echo $apt['company_name'];} ?>" style="width: 73px;" /></td>
              <td>Car Parking :</td>
              <td>
                <select name="car_parking" style="width: 80px;">
                  <option value="Yes" <?php if (isset($apt['car_parking'])) { if ($apt['car_parking'] == "Yes") { echo 'selected'; }} ?>>Yes</option>
                  <option value="No" <?php if (isset($apt['car_parking'])) { if ($apt['car_parking'] == "No") { echo 'selected'; }} ?>>No</option>
                </select>
              </td>
              <td>Floor :</td>
              <td>
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
              <td>Attached Bath :</td>
              <td>
                <select name="attached_bath" style="width: 80px;">
                  <option value="1" <?php if (isset($apt['attached_bath'])) { if ($apt['attached_bath'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($apt['attached_bath'])) { if ($apt['attached_bath'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($apt['attached_bath'])) { if ($apt['attached_bath'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($apt['attached_bath'])) { if ($apt['attached_bath'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($apt['attached_bath'])) { if ($apt['attached_bath'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($apt['attached_bath'])) { if ($apt['attached_bath'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
              <td>Living :</td>
              <td>
                <select name="living" style="width: 80px;">
                  <option value="1" <?php if (isset($apt['living'])) { if ($apt['living'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($apt['living'])) { if ($apt['living'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($apt['living'])) { if ($apt['living'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($apt['living'])) { if ($apt['living'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($apt['living'])) { if ($apt['living'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($apt['living'])) { if ($apt['living'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
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
              <td>
                <select name="building_type" style="width: 80px;">
                  <option value="Residential" <?php if (isset($apt['building_type'])) { if ($apt['building_type'] == "Residential") { echo 'selected'; }} ?>>Residential</option>
                  <option value="Commercial" <?php if (isset($apt['building_type'])) { if ($apt['building_type'] == "Commercial") { echo 'selected'; }} ?>>Commercial</option>
                  <option value="Commercial cum Residential" <?php if (isset($apt['building_type'])) { if ($apt['building_type'] == "Commercial cum Residential") { echo 'selected'; }} ?>>Commercial cum Residential</option>
                </select>
              </td>
              <td>Floor Type :</td>
              <td>
                <select name="floor_type" style="width: 80px;">
                  <option value="Mosaic" <?php if (isset($apt['floor_type'])) { if ($apt['floor_type'] == "Mosaic") { echo 'selected'; }} ?>>Mosaic</option>
                  <option value="Tiled" <?php if (isset($apt['floor_type'])) { if ($apt['floor_type'] == "Tiled") { echo 'selected'; }} ?>>Tiled</option>
                  <option value="Marble" <?php if (isset($apt['floor_type'])) { if ($apt['floor_type'] == "Marble") { echo 'selected'; }} ?>>Marble</option>
                  <option value="Other" <?php if (isset($apt['floor_type'])) { if ($apt['floor_type'] == "Other") { echo 'selected'; }} ?>>Other</option>
                </select>
              </td>
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
                           
                          <td><font color="#FF0000">Owner Number</font></td>
              <td><input type="text" required name="owner_number" value="<?php if (isset($apt['owner_number'])) { echo $apt['owner_number'];} ?>" style="width: 100px;" /></td>
              <td>Owner Name :</td>
              <td><input type="text" name="owner_name" value="<?php if (isset($apt['owner_name'])) { echo $apt['owner_name'];} ?>" style="width: 100px;" /></td>
            </tr>
            <tr>
              <td valign="top">Details :</td>
              <td colspan="5">
                <textarea name="details" style="width: 318px;"><?php if (isset($apt['details'])) { echo $apt['details'];} ?></textarea>
              </td>
            </tr>
            <tr>
              <td>Status</td>
              <td>
                <select name="status" style="width: 80px;">
                  <option value="Active" <?php if (isset($apt['status'])) { if ($apt['status'] == "Active") { echo 'selected'; }} ?>>Available</option>
                  <option value="Sold" <?php if (isset($apt['status'])) { if ($apt['status'] == "Sold") { echo 'selected'; }} ?>>Sold</option>
                  <option value="Inactive" <?php if (isset($apt['status'])) { if ($apt['status'] == "Inactive") { echo 'selected'; }} ?>>Inactive</option>
                </select>
              </td>
              <td>Post Validity</td>
              <td colspan="3">
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




