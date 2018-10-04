<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div class="title-bg">
      <div class="title-featured">
        <span id="">Wearhouse Rent Save</span>            
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1">
        <form name="commercial" method="post" action="my_account/wearhouse_rent_save" enctype="multipart/form-data">
          <table border="0" cellpadding="2" cellspacing="2" style="font-size: 11px;">
            <tr>
              <td>Title</td>
              <td colspan="5"><input type="text"required name="title" value="<?php if (isset($wearhouse['title'])) { echo $wearhouse['title'];} ?>" style="width: 390px;" /></td>
            </tr>
            <tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="6" align="left">Address</th>
            </tr>
            <tr>
              <td>House No</td>
              <td><input type="text" name="house" value="<?php if (isset($wearhouse['house'])) { echo $wearhouse['house'];} ?>" style="width: 73px;" /></td>
              <td>Road No</td>
              <td><input type="text" name="road" value="<?php if (isset($wearhouse['road'])) { echo $wearhouse['road'];} ?>" style="width: 73px;" /></td>
              <td>Sector</td>
              <td><input type="text" name="sector" value="<?php if (isset($wearhouse['sector'])) { echo $wearhouse['sector'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>District</td>
              <td>
                <select name="district_id" id="district_id" style="width: 80px;">
                  <option>Select One</option>
                  <?php foreach($districts as $district){ ?>
                  <option value="<?php echo $district['id']; ?>" <?php if (isset($wearhouse['district_id'])) { if ($district['id'] == $wearhouse['district_id']) { echo 'selected'; }} ?>><?php echo $district['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
              <td>Area</td>
              <td colspan="3">
                <select name="area_id" id="area_id" style="width: 80px;">
                  <option>Select District First</option>
                  <?php foreach($areas as $area){ ?>
                  <option value="<?php echo $area['id']; ?>" <?php if (isset($wearhouse['area_id'])) { if ($area['id'] == $wearhouse['area_id']) { echo 'selected'; }} ?>><?php echo $area['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="6" align="left">Wearhouse Specification</th>
            </tr>
            <tr>
              <td>Total Space</td>
              <td><input type="text"required name="total_space" value="<?php if (isset($wearhouse['total_space'])) { echo $wearhouse['total_space'];} ?>" style="width: 73px;" /></td>
              <td>Length</td>
              <td><input type="text" name="length" value="<?php if (isset($wearhouse['length'])) { echo $wearhouse['length'];} ?>" style="width: 73px;" /></td>
              <td>Width</td>
              <td><input type="text" name="width" value="<?php if (isset($wearhouse['width'])) { echo $wearhouse['width'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>Height</td>
              <td colspan="5"><input type="text" name="height" value="<?php if (isset($wearhouse['height'])) { echo $wearhouse['height'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td valign="top">Details</td>
              <td colspan="5"><textarea name="details" style="width: 318px;"></textarea></td>
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
              <td>Rent Price</td>
              <td><input type="text" name="rent" value="<?php if (isset($wearhouse['rent'])) { echo $wearhouse['rent'];} ?>" style="width: 73px;" /></td>
              <td>Advance</td>
              <td colspan="3"><input type="text" name="advance" value="<?php if (isset($wearhouse['advance'])) { echo $wearhouse['advance'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>Security</td>
              <td><input type="text" name="security_charge" value="<?php if (isset($wearhouse['security_charge'])) { echo $wearhouse['security_charge'];} ?>" style="width: 73px;" /></td>
              <td>Service Charge</td>
              <td colspan="3"><input type="text" name="service_charge" value="<?php if (isset($wearhouse['service_charge'])) { echo $wearhouse['service_charge'];} ?>" style="width: 73px;" /></td>
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
                  <option value="Active" <?php if (isset($wearhouse['status'])) { if ($wearhouse['status'] == "Active") { echo 'selected'; }} ?>>Active</option>
                  <option value="Inactive" <?php if (isset($wearhouse['status'])) { if ($wearhouse['status'] == "Inactive") { echo 'selected'; }} ?>>Inactive</option>
                </select>
              </td>
              <td>Post Validity</td>
              <td colspan="3">
                <select name="validity" style="width: 80px;">
                  <option value="1-2 Months" <?php if (isset($wearhouse['validity'])) { if ($wearhouse['validity'] == "1-2 Months") { echo 'selected'; }} ?>>1-2 Months</option>
                  <option value="3-4 Months" <?php if (isset($wearhouse['validity'])) { if ($wearhouse['validity'] == "3-4 Months") { echo 'selected'; }} ?>>3-4 Months</option>
                  <option value="4-6 Months" <?php if (isset($wearhouse['validity'])) { if ($wearhouse['validity'] == "4-6 Months") { echo 'selected'; }} ?>>4-6 Months</option>
                  <option value="1 Year" <?php if (isset($wearhouse['validity'])) { if ($wearhouse['validity'] == "1 Year") { echo 'selected'; }} ?>>1 Year</option>
                </select>
              </td>
            </tr>
            <input type="hidden" name="id" value="<?php if (isset($wearhouse['id'])) { echo $wearhouse['id']; } ?>" />
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