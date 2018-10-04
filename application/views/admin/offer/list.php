<div id="center-column">
  <?php
  if ($this->session->flashdata('message')) {
    echo '<div class="top-bar"><h1>' . $this->session->flashdata('message') . '</h1></div>';
  }
  ?>
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <table class="listing" cellpadding="0" cellspacing="0">
      <tr>
        <th class="first" width="177">Name</th>
        <th>Details</th>
        <th>Picture</th>
        <th>Date of Entry</th>
        <th class="last" colspan="2">Action</th>
      </tr>
      <?php
      $i = 0;
      foreach ($offers as $offer) {
        ?>
        <tr <?php if ($i == 1) { echo 'class="bg"'; } ?>>
          <td class="first style1"><?php echo $offer['name']; ?></td>
          <td><?php echo $offer['details']; ?></td>
          <td><?php echo $offer['picture']; ?></td>
          <td align="right"><?php echo date('jS M Y ', strtotime($offer['created'])); ?></td>
          <td align="center"><a href="admin/offer/save/<?php echo $offer['id']; ?>">Edit</a></td>
          <td align="center" class="last"><a href="admin/offer/delete/<?php echo $type . '/' . $rent['id']; ?>"><img src="assets/images/admin/delete.gif" width="16" height="16" alt="Delete" /></a></td>
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