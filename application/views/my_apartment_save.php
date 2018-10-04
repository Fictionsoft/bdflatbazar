<form name="apartment" method="post" action="my_account/apt_save" enctype="multipart/form-data">
  <table width="100%" border="0" cellpadding="2" cellspacing="2" style="font-size: 11px;">
    <tr>
      <td>Title</td>
      <td><input type="text" name="title" value="<?php if(isset($apt['title'])){ echo $apt['title']; } ?>" /></td>
    </tr>
    <tr>
      <th colspan="2" align="left">Address</th>
    </tr>
    <tr>
      <td>Apt. No</td>
      <td><input type="text" name="apt_no" value="<?php if(isset($apt['apt_no'])){ echo $apt['apt_no']; } ?>" /></td>
    </tr>
    <tr>
      <td>House No</td>
      <td><input type="text" name="house" value="<?php if(isset($apt['house'])){ echo $apt['house']; } ?>" /></td>
    </tr>
    <tr>
      <td>Road No</td>
      <td><input type="text" name="road" value="<?php if(isset($apt['road'])){ echo $apt['road']; } ?>" /></td>
    </tr>
    <tr>
      <td>Sector</td>
      <td><input type="text" name="sector" value="<?php if(isset($apt['sector'])){ echo $apt['sector']; } ?>" /></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><input type="text" name="country" value="<?php if(isset($apt['country'])){ echo $apt['country']; } ?>" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><input type="text" name="district" value="<?php if(isset($apt['district'])){ echo $apt['district']; } ?>" /></td>
    </tr>
    <tr>
      <td>Area</td>
      <td><input type="text" name="area" value="<?php if(isset($apt['area'])){ echo $apt['area']; } ?>" /></td>
    </tr>
    <tr>
      <td>Zip</td>
      <td><input type="text" name="zip" value="<?php if(isset($apt['zip'])){ echo $apt['zip']; } ?>" /></td>
    </tr>
    <tr>
      <th colspan="2" align="left">Apartment Specification</th>
    </tr>
    <tr>
      <td>Apt. Type</td>
      <td>
        <select name="apt_type">
          <option value="Ready" <?php if(isset($apt['apt_type'])){ if($apt['apt_type']=="Ready"){ echo 'selected'; }} ?>>Ready</option>
          <option value="Ongoing" <?php if(isset($apt['apt_type'])){ if($apt['apt_type']=="Ongoing"){ echo 'selected'; }} ?>>Ongoing</option>
          <option value="Used" <?php if(isset($apt['apt_type'])){ if($apt['apt_type']=="Used"){ echo 'selected'; }} ?>>Used</option>
          <option value="Upcoming" <?php if(isset($apt['apt_type'])){ if($apt['apt_type']=="Upcoming"){ echo 'selected'; }} ?>>Upcoming</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Size</td>
      <td><input type="text" name="size" value="<?php if(isset($apt['size'])){ echo $apt['size']; } ?>" /></td>
    </tr>
    <tr>
      <td>Floor</td>
      <td><input type="text" name="floor" value="<?php if(isset($apt['floor'])){ echo $apt['floor']; } ?>" /></td>
    </tr>
    <tr>
      <td>Bed</td>
      <td><input type="text" name="bed" value="<?php if(isset($apt['bed'])){ echo $apt['bed']; } ?>" /></td>
    </tr>
    <tr>
      <td>Dining</td>
      <td><input type="text" name="dining" value="<?php if(isset($apt['dining'])){ echo $apt['dining']; } ?>" /></td>
    </tr>
    <tr>
      <td>Living</td>
      <td><input type="text" name="living" value="<?php if(isset($apt['living'])){ echo $apt['living']; } ?>" /></td>
    </tr>
    <tr>
      <td>Guest</td>
      <td><input type="text" name="guest" value="<?php if(isset($apt['guest'])){ echo $apt['guest']; } ?>" /></td>
    </tr>
    <tr>
      <td>Attached Bath</td>
      <td><input type="text" name="attached_bath" value="<?php if(isset($apt['attached_bath'])){ echo $apt['attached_bath']; } ?>" /></td>
    </tr>
    <tr>
      <td>Common Bath</td>
      <td><input type="text" name="common_bath" value="<?php if(isset($apt['common_bath'])){ echo $apt['common_bath']; } ?>" /></td>
    </tr>
    <tr>
      <td>Veranda</td>
      <td><input type="text" name="veranda" value="<?php if(isset($apt['veranda'])){ echo $apt['veranda']; } ?>" /></td>
    </tr>
    <tr>
      <td>Car Parking</td>
      <td><input type="text" name="car_parking" value="<?php if(isset($apt['car_parking'])){ echo $apt['car_parking']; } ?>" /></td>
    </tr>
    <tr>
      <td>Lift</td>
      <td><input type="text" name="lift" value="<?php if(isset($apt['lift'])){ echo $apt['lift']; } ?>" /></td>
    </tr>
    <tr>
      <td>CCTV</td>
      <td><input type="text" name="cctv" value="<?php if(isset($apt['cctv'])){ echo $apt['cctv']; } ?>" /></td>
    </tr>
    <tr>
      <td>Generator</td>
      <td><input type="text" name="generator" value="<?php if(isset($apt['generator'])){ echo $apt['generator']; } ?>" /></td>
    </tr>
    <tr>
      <td>Intercom</td>
      <td><input type="text" name="intercom" value="<?php if(isset($apt['intercom'])){ echo $apt['intercom']; } ?>" /></td>
    </tr>
    <tr>
      <td>Concealed Phone</td>
      <td><input type="text" name="concealed_phone" value="<?php if(isset($apt['concealed_phone'])){ echo $apt['concealed_phone']; } ?>" /></td>
    </tr>
    <tr>
      <td>Staff Toilet</td>
      <td><input type="text" name="staff_toilet" value="<?php if(isset($apt['staff_toilet'])){ echo $apt['staff_toilet']; } ?>" /></td>
    </tr>
    <tr>
      <td>Staff Room</td>
      <td><input type="text" name="staff_room" value="<?php if(isset($apt['staff_room'])){ echo $apt['staff_room']; } ?>" /></td>
    </tr>
    <tr>
      <td>Floor Type</td>
      <td><input type="text" name="floor_type" value="<?php if(isset($apt['floor_type'])){ echo $apt['floor_type']; } ?>" /></td>
    </tr>
    <tr>
      <td>Building Facing</td>
      <td><input type="text" name="building_facing" value="<?php if(isset($apt['building_facing'])){ echo $apt['building_facing']; } ?>" /></td>
    </tr>
    <tr>
      <td>Flat Facing</td>
      <td><input type="text" name="flat_facing" value="<?php if(isset($apt['flat_facing'])){ echo $apt['flat_facing']; } ?>" /></td>
    </tr>
    <tr>
      <td>Front Road Size</td>
      <td><input type="text" name="front_road_size" value="<?php if(isset($apt['front_road_size'])){ echo $apt['front_road_size']; } ?>" /></td>
    </tr>
    <tr>
      <td>Building Size</td>
      <td><input type="text" name="building_size" value="<?php if(isset($apt['building_size'])){ echo $apt['building_size']; } ?>" /></td>
    </tr>
    <tr>
      <td>Building Type</td>
      <td><input type="text" name="building_type" value="<?php if(isset($apt['building_type'])){ echo $apt['building_type']; } ?>" /></td>
    </tr>
    <tr>
      <td>Handover Time</td>
      <td><input type="text" name="handover_time" value="<?php if(isset($apt['handover_time'])){ echo $apt['handover_time']; } ?>" /></td>
    </tr>
    <tr>
      <th colspan="2" align="left">Financial Details</th>
    </tr>
    <tr>
      <td>Price (sft)</td>
      <td><input type="text" name="price_sft" value="<?php if(isset($apt['price_sft'])){ echo $apt['price_sft']; } ?>" /></td>
    </tr>
    <tr>
      <td>Price (Total)</td>
      <td><input type="text" name="price_total" value="<?php if(isset($apt['price_total'])){ echo $apt['price_total']; } ?>" /></td>
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
    <input type="hidden" name="id" value="<?php if(isset($apt['id'])){ echo $apt['id']; } ?>" />
    <tr>
      <th colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></th>
    </tr>
  </table>
</form>