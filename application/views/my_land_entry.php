<form name="apartment_entry" method="post" action="my_account/land_entry" enctype="multipart/form-data">
  <table width="100%" border="0" cellpadding="2" cellspacing="2" style="font-size: 11px;">
    <tr>
      <td>Title</td>
      <td><input type="text" name="title" /></td>
    </tr>
    <tr>
      <th colspan="2" align="left">Address</th>
    </tr>
    <tr>
      <td>Plot No</td>
      <td><input type="text" name="plot_no" /></td>
    </tr>
    <tr>
      <td>Road No</td>
      <td><input type="text" name="road" /></td>
    </tr>
    <tr>
      <td>House No</td>
      <td><input type="text" name="house" /></td>
    </tr>
    <tr>
      <td>Block/Sector</td>
      <td><input type="text" name="sector" /></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><input type="text" name="country" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><input type="text" name="district" /></td>
    </tr>
    <tr>
      <td>Area</td>
      <td><input type="text" name="area" /></td>
    </tr>
    <tr>
      <td>Zip</td>
      <td><input type="text" name="zip" /></td>
    </tr>
    <tr>
      <th colspan="2" align="left">Land Specification</th>
    </tr>
    <tr>
      <td>Land Type</td>
      <td><input type="text" name="land_type" /></td>
    </tr>
    <tr>
      <td>Size</td>
      <td><input type="text" name="size" /></td>
    </tr>
    <tr>
      <td>Size Type</td>
      <td><input type="text" name="size_type" /></td>
    </tr>
    <tr>
      <td>Land Status</td>
      <td>
        <select name="land_status">
          <option value="Ready">Ready</option>
          <option value="OnGoing">OnGoing</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Road Details</td>
      <td><textarea name="road_details"></textarea></td>
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
      <td><input type="text" name="price_sft" /></td>
    </tr>
    <tr>
      <td>Price (Total)</td>
      <td><input type="text" name="price_total" /></td>
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
    <tr>
      <th colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></th>
    </tr>
  </table>
</form>