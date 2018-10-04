<div id="center-column">
  <?php
  if ($this->session->flashdata('message')) {
    echo '<div class="top-bar"><h1>' . $this->session->flashdata('message') . '</h1></div>';
  }
  //echo $type;
  ?>

  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <table class="listing" cellpadding="0" cellspacing="0">
      <tr>
        <th class="first" width="177">Title</th>
        <th>User Name</th>
        <th>Featured</th>
        <th>Address</th>
        <?php if ($type == 'hostel' AND $type == 'mess') { ?>
          <th>Total Member</th>
          <th>Total Bed</th>
        <?php } ?>
        <th>Date of Entry</th>
        <th class="last" colspan="2">Action</th>
      </tr>
      <?php
      $i = 0;
      foreach ($rents as $rent) {
        ?>
        <tr <?php
      if ($i == 1) {
        echo 'class="bg"';
      }
        ?>>
          <td class="first style1"><?php echo $rent['title']; ?></td>
          <td><?php echo $rent['user_name']; ?></td>
          <td><a href="admin/rent/featured/<?php echo $type . '/' . $rent['id']; ?>"><img src="assets/images/<?php
        if ($rent['featured'] == 1) {
          echo 'on.gif';
        } else {
          echo 'off.gif';
        }
        ?>" /></a></td>
          <td><?php echo ' House No:' . $rent['house'] . '<br />Road No:' . $rent['road'] . ' Sector:' . $rent['sector']; ?></td>
          <?php if ($type == 'hostel' AND $type == 'mess') { ?>
            <td align="center"><?php echo $rent['total_members']; ?></td>
            <td align="right"><?php echo $rent['total_bed']; ?></td>
  <?php } ?>
          <td align="right"><?php echo date('jS M Y ', strtotime($rent['created'])); ?></td>
          <td align="center"><a href="admin/rent/feedback/<?php echo $type . '/' . $rent['id']; ?>">Feedback</a></td>
          <td align="center" class="last"><a href="admin/rent/delete/<?php echo $type . '/' . $rent['id']; ?>"><img src="assets/images/admin/delete.gif" width="16" height="16" alt="Delete" /></a></td>
        </tr>
        <?php
        if ($i == 0) {
          $i = 1;
        } else {
          $i = 0;
        }
      }
      ?>
    </table>
    <!--
    <div class="select">
      <strong>Other Pages: </strong>
      
      <select>
        <option>1</option>
      </select>
      
    </div>
    -->
  </div>
</div>