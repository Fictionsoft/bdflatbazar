<form name="apartment_entry" method="post" action="my_account/apt_edit" enctype="multipart/form-data">
  <table width="100%" border="0" cellpadding="2" cellspacing="2" style="font-size: 11px;">
    <tr>
      <td>Title</td>
      <td><input type="text" name="title" value="<?php echo $apartment['title']; ?>" /></td>
    </tr>
    <tr>
      <th colspan="2" align="left">Address</th>
    </tr>
    <tr>
      <td>Apt. No</td>
      <td><input type="text" name="apt_no" value="<?php echo $apartment['apt_no']; ?>" /></td>
    </tr>
    <tr>
      <td>House No</td>
      <td><input type="text" name="house" value="<?php echo $apartment['house']; ?>" /></td>
    </tr>
    <tr>
      <td>Road No</td>
      <td><input type="text" name="road" value="<?php echo $apartment['road']; ?>" /></td>
    </tr>
    <tr>
      <td>Sector</td>
      <td><input type="text" name="sector" value="<?php echo $apartment['sector']; ?>" /></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><input type="text" name="country" value="<?php echo $apartment['country']; ?>" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><input type="text" name="district" value="<?php echo $apartment['district']; ?>" /></td>
    </tr>
    <tr>
      <td>Area</td>
      <td><input type="text" name="area" value="<?php echo $apartment['area']; ?>" /></td>
    </tr>
    <tr>
      <td>Zip</td>
      <td><input type="text" name="zip" value="<?php echo $apartment['zip']; ?>" /></td>
    </tr>
    <tr>
      <th colspan="2" align="left">Apartment Specification</th>
    </tr>
    <tr>
      <td>Apt. Type</td>
      <td>
        <select name="apt_type">
          <option value="Ready">Ready</option>
          <option value="Ongoing">Ongoing</option>
          <option value="Used">Used</option>
          <option value="Upcoming">Upcoming</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Size</td>
      <td><input type="text" name="size" value="<?php echo $apartment['size']; ?>" /></td>
    </tr>
    <tr>
      <td>Floor</td>
      <td><input type="text" name="floor" value="<?php echo $apartment['floor']; ?>" /></td>
    </tr>
    <tr>
      <td>Bed</td>
      <td><input type="text" name="bed" value="<?php echo $apartment['bed']; ?>" /></td>
    </tr>
    <tr>
      <td>Dining</td>
      <td><input type="text" name="dining" value="<?php echo $apartment['dining']; ?>" /></td>
    </tr>
    <tr>
      <td>Living</td>
      <td><input type="text" name="living" value="<?php echo $apartment['living']; ?>" /></td>
    </tr>
    <tr>
      <td>Guest</td>
      <td><input type="text" name="guest" value="<?php echo $apartment['guest']; ?>" /></td>
    </tr>
    <tr>
      <td>Attached Bath</td>
      <td><input type="text" name="attached_bath" value="<?php echo $apartment['attached_bath']; ?>" /></td>
    </tr>
    <tr>
      <td>Common Bath</td>
      <td><input type="text" name="common_bath" value="<?php echo $apartment['common_bath']; ?>" /></td>
    </tr>
    <tr>
      <td>Veranda</td>
      <td><input type="text" name="veranda" value="<?php echo $apartment['veranda']; ?>" /></td>
    </tr>
    <tr>
      <td>Car Parking</td>
      <td><input type="text" name="car_parking" value="<?php echo $apartment['car_parking']; ?>" /></td>
    </tr>
    <tr>
      <td>Lift</td>
      <td><input type="text" name="lift" value="<?php echo $apartment['lift']; ?>" /></td>
    </tr>
    <tr>
      <td>CCTV</td>
      <td><input type="text" name="cctv" value="<?php echo $apartment['cctv']; ?>" /></td>
    </tr>
    <tr>
      <td>Generator</td>
      <td><input type="text" name="generator" value="<?php echo $apartment['generator']; ?>" /></td>
    </tr>
    <tr>
      <td>Intercom</td>
      <td><input type="text" name="intercom" value="<?php echo $apartment['intercom']; ?>" /></td>
    </tr>
    <tr>
      <td>Concealed Phone</td>
      <td><input type="text" name="concealed_phone" value="<?php echo $apartment['concealed_phone']; ?>" /></td>
    </tr>
    <tr>
      <td>Staff Toilet</td>
      <td><input type="text" name="staff_toilet" value="<?php echo $apartment['staff_toilet']; ?>" /></td>
    </tr>
    <tr>
      <td>Staff Room</td>
      <td><input type="text" name="staff_room" value="<?php echo $apartment['staff_room']; ?>" /></td>
    </tr>
    <tr>
      <td>Floor Type</td>
      <td><input type="text" name="floor_type" value="<?php echo $apartment['floor_type']; ?>" /></td>
    </tr>
    <tr>
      <td>Building Facing</td>
      <td><input type="text" name="building_facing" value="<?php echo $apartment['building_facing']; ?>" /></td>
    </tr>
    <tr>
      <td>Flat Facing</td>
      <td><input type="text" name="flat_facing" value="<?php echo $apartment['flat_facing']; ?>" /></td>
    </tr>
    <tr>
      <td>Front Road Size</td>
      <td><input type="text" name="front_road_size" value="<?php echo $apartment['front_road_size']; ?>" /></td>
    </tr>
    <tr>
      <td>Building Size</td>
      <td><input type="text" name="building_size" value="<?php echo $apartment['building_size']; ?>" /></td>
    </tr>
    <tr>
      <td>Building Type</td>
      <td><input type="text" name="building_type" value="<?php echo $apartment['building_type']; ?>" /></td>
    </tr>
    <tr>
      <td>Handover Time</td>
      <td><input type="text" name="handover_time" value="<?php echo $apartment['handover_time']; ?>" /></td>
    </tr>
    <tr>
      <th colspan="2" align="left">Financial Details</th>
    </tr>
    <tr>
      <td>Price (sft)</td>
      <td><input type="text" name="price_sft" value="<?php echo $apartment['price_sft']; ?>" /></td>
    </tr>
    <tr>
      <td>Price (Total)</td>
      <td><input type="text" name="price_total" value="<?php echo $apartment['price_total']; ?>" /></td>
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
    <input type="hidden" name="id" value="<?php echo $apartment['id']; ?>" />
    <tr>
      <th colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></th>
    </tr>
  </table>
</form>