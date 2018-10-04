<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div class="title-bg">
      <div class="title-featured">
        <span id="">Land Sale Save</span>            
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1">
        <form name="land" method="post" action="my_account/land_sale_save" enctype="multipart/form-data">
          <table border="0" cellpadding="2" cellspacing="2" style="font-size: 11px;">
            <tr>
              <td>Title</td>
              <td colspan="5"><input type="text" required name="title" value="<?php if (isset($land['title'])) { echo $land['title'];} ?>" style="width: 390px;" /></td>
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
              <td>District</td>
              <td>
                <select name="district_id" id="district_id" style="width: 80px;">
                  <option>Select One</option>
                  <?php foreach($districts as $district){ ?>
                  <option value="<?php echo $district['id']; ?>" <?php if (isset($land['district_id'])) { if ($district['id'] == $land['district_id']) { echo 'selected'; }} ?>><?php echo $district['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
              <td>Area</td>
              <td colspan="3">
                <select name="area_id" id="area_id" style="width: 80px;">
                  <option>Select District First</option>
                  <?php foreach($areas as $area){ ?>
                  <option value="<?php echo $area['id']; ?>" <?php if (isset($land['area_id'])) { if ($area['id'] == $land['area_id']) { echo 'selected'; }} ?>><?php echo $area['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
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
                  <option value="Personal Plot" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Personal Plot") { echo 'selected'; }} ?>>Personal Plot</option>
                  <option value="Housing Plot" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Housing Plot") { echo 'selected'; }} ?>>Housing Plot</option>
                  <option value="Commercial Plot" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Commercial Plot") { echo 'selected'; }} ?>>Commercial Plot</option>
                  <option value="Industrial Plot" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Industrial Plot") { echo 'selected'; }} ?>>Industrial Plot</option>
                  <option value="Others" <?php if (isset($land['land_type'])) { if ($land['land_type'] == "Others") { echo 'selected'; }} ?>>Others</option>
                </select>
              </td>
              <td>Land Size</td>
              <td>
                <input type="text" required name="size" value="<?php if (isset($land['size'])) { echo $land['size'];} ?>" style="width: 30px;" />
                <select name="size_type" style="width: 50px;">
                  <option value="Kathha" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Kathha") { echo 'selected'; }} ?>>Kathha</option>
                  <option value="Shotok" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Shotok") { echo 'selected'; }} ?>>Shotok</option>
                  <option value="Bigha" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Bigha") { echo 'selected'; }} ?>>Bigha</option>
                  <option value="Acore" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Acore") { echo 'selected'; }} ?>>Acore</option>
                  <option value="Others" <?php if (isset($land['size_type'])) { if ($land['size_type'] == "Others") { echo 'selected'; }} ?>>Others</option>
                </select>
              </td>
              <td>Front Road Size</td>
              <td><input type="text" name="front_road_size" value="<?php if (isset($land['front_road_size'])) { echo $land['front_road_size'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>Project Name</td>
              <td><input type="text" name="project_name" value="<?php if (isset($land['project_name'])) { echo $land['project_name'];} ?>" style="width: 73px;" /></td>
              <td>Land Status</td>
              <td>
                <select name="land_status" style="width: 80px;">
                  <option value="Ready" <?php if (isset($land['land_status'])) { if ($land['land_status'] == "Ready") { echo 'selected'; }} ?>>Ready</option>
                  <option value="Ongoing" <?php if (isset($land['land_status'])) { if ($land['land_status'] == "Ongoing") { echo 'selected'; }} ?>>Ongoing</option>
                </select>
              </td>
              <td>Handover Time</td>
              <td><input type="text" name="handover_time" value="<?php if (isset($land['handover_time'])) { echo $land['handover_time'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>Company Name</td>
              <td colspan="5"><input type="text" name="company_name" value="<?php if (isset($land['company_name'])) { echo $land['company_name'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td valign="top">Road Details</td>
              <td colspan="5"><textarea name="road_details" style="width: 318px;"></textarea></td>
            </tr>
            <tr>
              <td valign="top">Details</td>
              <td colspan="5"><textarea name="details" style="width: 318px;"></textarea></td>
            </tr>
            <tr>
                           
                          <td><font color="#FF0000">Owner Number</font></td>
              <td><input type="text" required name="owner_number" value="<?php if (isset($apt['owner_number'])) { echo $apt['owner_number'];} ?>" style="width: 100px;" /></td>
              <td>Owner Name :</td>
              <td><input type="text" name="owner_name" value="<?php if (isset($apt['owner_name'])) { echo $apt['owner_name'];} ?>" style="width: 100px;" /></td>
            </tr>
            <tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="6" align="left">Financial Details</th>
            </tr>
            <tr>
              <td>Sales Price</td>
              <td>
                <input type="text" name="sale_price" value="<?php if (isset($land['sale_price'])) { echo $land['sale_price'];} ?>" style="width: 73px;" />
                <select name="price_type" style="width: 80px;">
                  <option value="Kathha" <?php if (isset($land['price_type'])) { if ($land['price_type'] == "Kathha") { echo 'selected'; }} ?>>Per Kathha</option>
                  <option value="Shotok" <?php if (isset($land['price_type'])) { if ($land['price_type'] == "Shotok") { echo 'selected'; }} ?>>Per Shotok</option>
                  <option value="Bigha" <?php if (isset($land['price_type'])) { if ($land['price_type'] == "Bigha") { echo 'selected'; }} ?>>Per Bigha</option>
                  <option value="Acore" <?php if (isset($land['price_type'])) { if ($land['price_type'] == "Acore") { echo 'selected'; }} ?>>Per Acore</option>
                  <option value="Others" <?php if (isset($land['price_type'])) { if ($land['price_type'] == "Others") { echo 'selected'; }} ?>>Others</option>
                </select>
              </td>
              <td>Total Price</td>
              <td colspan="3"><input type="text" name="total_price" value="<?php if (isset($land['total_price'])) { echo $land['total_price'];} ?>" style="width: 73px;" /></td>
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
                  <option value="Active" <?php if (isset($land['status'])) { if ($land['status'] == "Active") { echo 'selected'; }} ?>>Available</option>
                  <option value="Sold" <?php if (isset($land['status'])) { if ($land['status'] == "Sold") { echo 'selected'; }} ?>>Sold</option>
                  <option value="Inactive" <?php if (isset($land['status'])) { if ($land['status'] == "Inactive") { echo 'selected'; }} ?>>Inactive</option>
                </select>
              </td>
              <td>Post Validity</td>
              <td colspan="3">
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



