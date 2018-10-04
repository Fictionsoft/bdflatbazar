<div id="center-column">
  <div style="margin: 5px; margin-left: 0;">
    <ul id="tabs">
      <li><a href="#" name="tab1">Apartment</a></li>
      <li><a href="#" name="tab2">Land</a></li>
      <li><a href="#" name="tab3">Commercial</a></li>
    </ul>

    <div id="content"> 
      <div id="tab1">
        <a href="admin/leading_developer/apt_save/<?php echo $developer_id; ?>" style="color: #000; font-weight: bold;">Apartment Entry</a>
        
        <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
			<th>Featured</th>
            <th>Address</th>
            <th>Type</th>
            <th>Size</th>
            <th>Floor</th>
            <th colspan="2">Action</th>
          </tr>
          <?php
          $i = 1;
          foreach ($apts as $apt):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $apt['title']; ?></td>
			  <td align="center"><a href="admin/leading_developer/apt_featured/<?php echo $developer_id.'/'.$apt['id']; ?>"><img src="assets/images/<?php if($apt['featured']==1){ echo 'on.gif'; }else{ echo 'off.gif'; } ?>" /></a></td>
              <td><?php echo ' House No:' . $apt['house'] . '<br />Road No:' . $apt['road'] . ' Sector:' . $apt['sector']; ?></td>
              <td align="center"><?php echo $apt['apt_type']; ?></td>
              <td align="right"><?php echo $apt['size']; ?></td>
              <td align="right"><?php echo $apt['floor']; ?></td>
              <td width="40" align="center"><a href="admin/leading_developer/apt_save/<?php echo $developer_id; ?>/<?php echo $apt['id']; ?>" title="Apartment Edit">Edit</a></td>
              <td width="40" align="center"><a href="admin/leading_developer/apt_delete/<?php echo $apt['id']; ?>">Delete</a></td>
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
        <a href="admin/leading_developer/land_save/<?php echo $developer_id; ?>" style="color: #000; font-weight: bold;">Land Entry</a>
        
        <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
			<th>Featured</th>
            <th>Address</th>
            <th>Type</th>
            <th>Size</th>
            <th>Status</th>
            <th colspan="2">Action</th>
          </tr>
          <?php
          $i = 1;
          foreach ($lands as $land):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $land['title']; ?></td>
			  <td align="center"><a href="admin/leading_developer/land_featured/<?php echo $developer_id.'/'.$land['id']; ?>"><img src="assets/images/<?php if($land['featured']==1){ echo 'on.gif'; }else{ echo 'off.gif'; } ?>" /></a></td>
              <td><?php echo ' House No:' . $land['house'] . '<br />Road No:' . $land['road'] . ' Sector:' . $land['sector']; ?></td>
              <td align="center"><?php echo $land['land_type']; ?></td>
              <td align="right"><?php echo $land['size'] . ' ' . $land['size_type']; ?></td>
              <td align="right"><?php echo $land['land_status']; ?></td>
              <td width="40" align="center"><a href="admin/leading_developer/land_save/<?php echo $developer_id; ?>/<?php echo $land['id']; ?>" title="Land Edit">Edit</a></td>
              <td width="40" align="center"><a href="admin/leading_developer/land_delete/<?php echo $land['id']; ?>">Delete</a></td>
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
        <a href="admin/leading_developer/commercial_save/<?php echo $developer_id; ?>" style="color: #000; font-weight: bold;">Commercial Entry</a> 
        
        <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px;">
          <tr bgcolor="#0CB0ED" style="color: #FFF;">
            <th>Title</th>
			<th>Featured</th>
            <th>Address</th>
            <th>Type</th>
            <th>Size</th>
            <th>Floor</th>
            <th>Total Floor</th>
            <th colspan="2">Action</th>
          </tr>
          <?php
          $i = 1;
          foreach ($commercials as $commercial):
            ?>
            <tr <?php if (1 == $i) { ?>bgcolor="#CCD6DA"<?php } else { ?>bgcolor="#EBF1F3"<?php } ?>>
              <td><?php echo $commercial['title']; ?></td>
			  <td align="center"><a href="admin/leading_developer/comm_featured/<?php echo $developer_id.'/'.$commercial['id']; ?>"><img src="assets/images/<?php if($commercial['featured']==1){ echo 'on.gif'; }else{ echo 'off.gif'; } ?>" /></a></td>
              <td><?php echo ' House No:' . $commercial['house'] . '<br />Road No:' . $commercial['road'] . ' Sector:' . $commercial['sector']; ?></td>
              <td align="center"><?php echo $commercial['project_type']; ?></td>
              <td align="center"><?php echo $commercial['size']; ?></td>
              <td align="right"><?php echo $commercial['floor']; ?></td>
              <td align="right"><?php echo $commercial['total_floor']; ?></td>
              <td width="40" align="center"><a href="admin/leading_developer/commercial_save/<?php echo $developer_id; ?>/<?php echo $commercial['id']; ?>" title="Commercial Edit">Edit</a></td>
              <td width="40" align="center"><a href="admin/leading_developer/commercial_delete/<?php echo $commercial['id']; ?>">Delete</a></td>
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

    </div>
  </div>
</div>
