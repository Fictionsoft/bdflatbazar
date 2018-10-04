<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="commercial" method="post" action="admin/commercial/sale_save" enctype="multipart/form-data">
      <table class="listing form" border="0" cellpadding="0" cellspacing="0" style="font-size: 11px;">
        <tr>
          <th colspan="6">Commercial Sales Entry</th>
        </tr>
        <tr>
          <td>Title</td>
          <td colspan="5"><input type="text" name="title" value="<?php if (isset($commercial['title'])) { echo $commercial['title'];} ?>" style="width: 390px;" /></td>
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
          <td>Area</td>
          <td><input type="text" name="area" value="<?php if (isset($commercial['area'])) { echo $commercial['area'];} ?>" style="width: 73px;" /></td>
          <td>District</td>
          <td colspan="3"><input type="text" name="district" value="<?php if (isset($commercial['district'])) { echo $commercial['district'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <th colspan="6" align="left">Project Specification</th>
        </tr>
        <tr>
          <td>Project Type</td>
          <td>
            <select name="apt_type" style="width: 80px;">
              <option value="Ready" <?php if (isset($commercial['apt_type'])) { if ($commercial['apt_type'] == "Ready") { echo 'selected'; }} ?>>Ready</option>
              <option value="Ongoing" <?php if (isset($commercial['apt_type'])) { if ($commercial['apt_type'] == "Ongoing") { echo 'selected'; }} ?>>Ongoing</option>
              <option value="Used" <?php if (isset($commercial['apt_type'])) { if ($commercial['apt_type'] == "Used") { echo 'selected'; }} ?>>Used</option>
              <option value="Upcoming" <?php if (isset($commercial['apt_type'])) { if ($commercial['apt_type'] == "Upcoming") { echo 'selected'; }} ?>>Upcoming</option>
            </select>
          </td>
          <td>Space Size</td>
          <td><input type="text" name="size" value="<?php if (isset($commercial['size'])) { echo $commercial['size'];} ?>" style="width: 73px;" /></td>
          <td>Front Road Size</td>
          <td><input type="text" name="common_bath" value="<?php if (isset($commercial['common_bath'])) { echo $commercial['common_bath'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Project Name</td>
          <td><input type="text" name="bed" value="<?php if (isset($commercial['bed'])) { echo $commercial['bed'];} ?>" style="width: 73px;" /></td>
          <td>Project Status</td>
          <td><input type="text" name="bed" value="<?php if (isset($commercial['bed'])) { echo $commercial['bed'];} ?>" style="width: 73px;" /></td>
          <td>Handover Time</td>
          <td><input type="text" name="veranda" value="<?php if (isset($commercial['veranda'])) { echo $commercial['veranda'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td>Company Name</td>
          <td colspan="5"><input type="text" name="bed" value="<?php if (isset($commercial['bed'])) { echo $commercial['bed'];} ?>" style="width: 73px;" /></td>
        </tr>
        <tr>
          <td valign="top">Details</td>
          <td colspan="5"><textarea name="details" style="width: 318px;"></textarea></td>
        </tr>
        <tr>
          <th colspan="6" align="left">Financial Details</th>
        </tr>
        <tr>
          <td>Sale Price</td>
          <td><input type="text" name="price_sft" value="<?php if (isset($commercial['price_sft'])) { echo $commercial['price_sft'];} ?>" style="width: 73px;" /></td>
          <td>Total Price</td>
          <td colspan="3"><input type="text" name="price_sft" value="<?php if (isset($commercial['price_sft'])) { echo $commercial['price_sft'];} ?>" style="width: 73px;" /></td>
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
          <td>Status :</td>
          <td>
            <select name="status">
              <option>Select One</option>
            </select>
          </td>
          <td>Post Validity :</td>
          <td colspan="3">
            <select name="validity">
              <option>Select One</option>
            </select>
          </td>
        </tr>
        <input type="hidden" name="id" value="<?php if (isset($commercial['id'])) { echo $commercial['id']; } ?>" />
        <tr>
          <th colspan="6" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>

    <p>&nbsp;</p>
  </div>
</div>