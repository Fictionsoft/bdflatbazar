<div style="width: 100%;">

  <div style="margin: 5px; margin-left: 0;">
    <ul id="tabs">
      <li><a href="#" name="tab1">Apartment</a></li>
      <li><a href="#" name="tab2">Land</a></li>
      <li><a href="#" name="tab3">Commercial</a></li>
      <li><a href="#" name="tab4">Rent</a></li>
    </ul>

    <div id="content"> 
      <div id="tab1">
        <a href="my_account/apt_sale_save" style="color: #000; font-weight: bold;">Sales Entry</a> | <a href="my_account/apt_rent_save" style="color: #000; font-weight: bold;">Rent Entry</a>
        <!--
        <a href="my_account/apt_save?height=500&width=450" title="Post Apartment Details" class="thickbox" style="text-decoration: none; font-weight: bold;">Apartment Entry</a>
        -->
        <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="7" align="left">Apartment Sales Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Type</th>
            <th>Size</th>
            <th>Floor</th>
            <th colspan="2">Action</th>
          </tr>
          <?php
          $i = 1;
          foreach ($apt_sales as $apt_sale):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $apt_sale['title']; ?></td>
              <td><?php echo ' House No:' . $apt_sale['house'] . '<br />Road No:' . $apt_sale['road'] . ' Sector:' . $apt_sale['sector']; ?></td>
              <td align="center"><?php echo $apt_sale['apt_type']; ?></td>
              <td align="right"><?php echo $apt_sale['size']; ?></td>
              <td align="right"><?php echo $apt_sale['floor']; ?></td>
              <td width="40" align="center"><a href="my_account/apt_sale_save/<?php echo $apt_sale['id']; ?>" title="Apartment Sales Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/apt_sale_delete/<?php echo $apt_sale['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          endforeach;
		  ?>
		  </table>
		  <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="7" align="left">Apartment Rents Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Type</th>
            <th>Size</th>
            <th>Floor</th>
            <th colspan="2">Action</th>
          </tr>
		  <?php	
		  $i = 1;  
          foreach ($apt_rents as $apt_rent):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $apt_rent['title']; ?></td>
              <td><?php echo ' House No:' . $apt_rent['house'] . '<br />Road No:' . $apt_rent['road'] . ' Sector:' . $apt_rent['sector']; ?></td>
              <td align="center"><?php echo $apt_rent['apt_type']; ?></td>
              <td align="right"><?php echo $apt_rent['size']; ?></td>
              <td align="right"><?php echo $apt_rent['floor']; ?></td>
              <td width="40" align="center"><a href="my_account/apt_rent_save/<?php echo $apt_rent['id']; ?>" title="Apartment Rent Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/apt_rent_delete/<?php echo $apt_sale['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          endforeach;
          ?>
        </table>

      </div>
      
      <div id="tab2">
        <a href="my_account/land_sale_save" style="color: #000; font-weight: bold;">Sales Entry</a> | <a href="my_account/land_rent_save" style="color: #000; font-weight: bold;">Rent Entry</a>
        <!--
        <a href="my_account/land_save?height=500&width=450" title="Post Land Details" class="thickbox" style="text-decoration: none; font-weight: bold;">Land Entry</a>
        -->
        <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="7" align="left">Land Sales Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Type</th>
            <th>Size</th>
            <th>Status</th>
            <th colspan="2">Action</th>
          </tr>
          <?php
          $i = 1;
          foreach ($land_sales as $land):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $land['title']; ?></td>
              <td><?php echo ' House No:' . $land['house'] . '<br />Road No:' . $land['road'] . ' Sector:' . $land['sector']; ?></td>
              <td align="center"><?php echo $land['land_type']; ?></td>
              <td align="right"><?php echo $land['size'] . ' ' . $land['size_type']; ?></td>
              <td align="right"><?php echo $land['land_status']; ?></td>
              <td width="40" align="center"><a href="my_account/land_sale_save/<?php echo $land['id']; ?>" title="Land Sales Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/land_sale_delete/<?php echo $land['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          endforeach;
		  ?>
		  </table>
		  <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="7" align="left">Land Rents Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Type</th>
            <th>Size</th>
            <th>Status</th>
            <th colspan="2">Action</th>
          </tr>
		  <?php	
		  $i = 1;  
          foreach ($land_rents as $land):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $land['title']; ?></td>
              <td><?php echo ' House No:' . $land['house'] . '<br />Road No:' . $land['road'] . ' Sector:' . $land['sector']; ?></td>
              <td align="center"><?php echo $land['land_type']; ?></td>
              <td align="right"><?php echo $land['size'] . ' ' . $land['size_type']; ?></td>
              <td align="right"><?php echo $land['land_status']; ?></td>
              <td width="40" align="center"><a href="my_account/land_rent_save/<?php echo $land['id']; ?>" title="Land Rent Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/land_rent_delete/<?php echo $land['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          endforeach;
          ?>
        </table>
      </div>
      
      <div id="tab3">
        <a href="my_account/commercial_sale_save" style="color: #000; font-weight: bold;">Sales Entry</a> | <a href="my_account/commercial_rent_save" style="color: #000; font-weight: bold;">Rent Entry</a>
        <!--
        <a href="my_account/commercial_save?height=500&width=450" title="Post Commercial Details" class="thickbox" style="text-decoration: none; font-weight: bold;">Commercial Entry</a>
        -->
        <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="7" align="left">Commercial Sales Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Size</th>
            <th>Floor</th>
            <th>Total Floor</th>
            <th colspan="2">Action</th>
          </tr>
          <?php
          $i = 1;
          foreach ($commercial_sales as $commercial):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $commercial['title']; ?></td>
              <td><?php echo ' House No:' . $commercial['house'] . '<br />Road No:' . $commercial['road'] . ' Sector:' . $commercial['sector']; ?></td>
              <td align="center"><?php echo $commercial['size']; ?></td>
              <td align="right"><?php echo $commercial['floor']; ?></td>
              <td align="right"><?php echo $commercial['total_floor']; ?></td>
              <td width="40" align="center"><a href="my_account/commercial_sale_save/<?php echo $commercial['id']; ?>" title="Commercial Sale Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/commercial_sale_delete/<?php echo $commercial['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          endforeach;
		  ?>
		  </table>
		  <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="7" align="left">Commercial Rents Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Size</th>
            <th>Floor</th>
            <th>Total Floor</th>
            <th colspan="2">Action</th>
          </tr>
		  <?php	
		  $i = 1;  
          foreach ($commercial_rents as $commercial):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $commercial['title']; ?></td>
              <td><?php echo ' House No:' . $commercial['house'] . '<br />Road No:' . $commercial['road'] . ' Sector:' . $commercial['sector']; ?></td>
              <td align="center"><?php echo $commercial['size']; ?></td>
              <td align="right"><?php echo $commercial['floor']; ?></td>
              <td align="right"><?php echo $commercial['total_floor']; ?></td>
              <td width="40" align="center"><a href="my_account/commercial_rent_save/<?php echo $commercial['id']; ?>" title="Commercial Rent Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/commercial_rent_delete/<?php echo $commercial['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          endforeach;
          ?>
        </table>
      </div>
      
      <div id="tab4">
        <a href="my_account/hostel_rent_save" style="color: #000; font-weight: bold;">Hostel Entry</a> | <a href="my_account/mess_rent_save" style="color: #000; font-weight: bold;">Mess Entry</a> | <a href="my_account/sublet_rent_save" style="color: #000; font-weight: bold;">Sub-Let Entry</a> | <a href="my_account/wearhouse_rent_save" style="color: #000; font-weight: bold;">Wear-House Entry</a>
        <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="6" align="left">Hostel Rents Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Required Member</th>
            <th>Current Member</th>
            <th colspan="2">Action</th>
          </tr>
          <?php
          $i = 1;
          foreach ($hostel_rents as $hostel){
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $hostel['title']; ?></td>
              <td><?php echo ' House No:' . $hostel['house'] . '<br />Road No:' . $hostel['road'] . ' Sector:' . $hostel['sector']; ?></td>
              <td align="center"><?php echo $hostel['required_members']; ?></td>
              <td align="right"><?php echo $hostel['current_members']; ?></td>
              <td width="40" align="center"><a href="my_account/hostel_rent_save/<?php echo $hostel['id']; ?>" title="Hostel Rent Details Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/hostel_rent_delete/<?php echo $hostel['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          }
		  ?>
		  </table>
		  <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="6" align="left">Mess Rents Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Required Member</th>
            <th>Current Member</th>
            <th colspan="2">Action</th>
          </tr>
		  <?php	
		  $i = 1;  
          foreach ($mess_rents as $mess){
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $mess['title']; ?></td>
              <td><?php echo ' House No:' . $mess['house'] . '<br />Road No:' . $mess['road'] . ' Sector:' . $mess['sector']; ?></td>
              <td align="center"><?php echo $mess['required_members']; ?></td>
              <td align="right"><?php echo $mess['current_members']; ?></td>
              <td width="40" align="center"><a href="my_account/mess_rent_save/<?php echo $mess['id']; ?>" title="Hostel Rent Details Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/mess_rent_delete/<?php echo $mess['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          }
		  ?>
		  </table>
		  <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="6" align="left">Sub-Let Rents Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Required Member</th>
            <th>Current Member</th>
            <th colspan="2">Action</th>
          </tr>
		  <?php	
		  $i = 1;  
          foreach ($sublet_rents as $sublet){
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $sublet['title']; ?></td>
              <td><?php echo ' House No:' . $sublet['house'] . '<br />Road No:' . $sublet['road'] . ' Sector:' . $sublet['sector']; ?></td>
              <td align="center"><?php echo $sublet['required_members']; ?></td>
              <td align="right"><?php echo $sublet['current_members']; ?></td>
              <td width="40" align="center"><a href="my_account/sublet_rent_save/<?php echo $sublet['id']; ?>" title="Hostel Rent Details Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/sublet_rent_delete/<?php echo $sublet['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          }
		  ?>
		  </table>
		  <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
		  <tr> 
		  	<th colspan="6" align="left">Wear-House Rents Info</th>
		  </tr>
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
            <th>Address</th>
            <th>Required Member</th>
            <th>Current Member</th>
            <th colspan="2">Action</th>
          </tr>
		  <?php	
		  $i = 1;  
          foreach ($wearhouse_rents as $wearhouse){
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $wearhouse['title']; ?></td>
              <td><?php echo ' House No:' . $wearhouse['house'] . '<br />Road No:' . $wearhouse['road'] . ' Sector:' . $wearhouse['sector']; ?></td>
              <td align="center"><?php echo $wearhouse['required_members']; ?></td>
              <td align="right"><?php echo $wearhouse['current_members']; ?></td>
              <td width="40" align="center"><a href="my_account/wearhouse_rent_save/<?php echo $wearhouse['id']; ?>" title="Hostel Rent Details Edit">Edit</a></td>
              <td width="40" align="center"><a href="my_account/wearhouse_rent_delete/<?php echo $wearhouse['id']; ?>">Delete</a></td>
            </tr>
            <?php
            if (1 == $i) {
              $i = 0;
            } else {
              $i = 1;
            }
          }
          ?>
        </table>
      </div>
    </div>
  </div>

</div>
</div>