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
        <th class="first" width="177">Title</th>
        <th>User Name</th>
        <th>Featured</th>
        <th>Address</th>
        <th>Type</th>
        <th>Size</th>
        <th>Status</th>
        <th>Date of Entry</th>
        <th class="last" colspan="2">Action</th>
      </tr>
      <?php
      $i = 0;
      foreach ($lands as $land) {
        ?>
        <tr <?php if ($i == 1) {
        echo 'class="bg"';
      } ?>>
          <td class="first style1"><?php echo $land['title']; ?></td>
          <td><?php echo $land['user_name']; ?></td>
          <td><a href="admin/land/sale_featured/<?php echo $land['id']; ?>"><img src="assets/images/<?php if($land['featured']==1){ echo 'on.gif'; }else{ echo 'off.gif'; } ?>" /></a></td>
          <td><?php echo ' House No:' . $land['house'] . '<br />Road No:' . $land['road'] . ' Sector:' . $land['sector']; ?></td>
          <td align="center"><?php echo $land['land_type']; ?></td>
          <td align="right"><?php echo $land['size']; ?></td>
          <td align="right"><?php echo $land['land_status']; ?></td>
          <td align="right"><?php echo date('jS M Y ', strtotime($land['created'])); ?></td>
          <td align="center"><a href="admin/land/sale_save/<?php echo $land['id']; ?>"><img src="assets/images/admin/edit.gif" width="16" height="16" alt="Edit" /></a></td>
          <td align="center" class="last"><input type="hidden" value="<?php echo $land['id']; ?>" /><img src="assets/images/admin/delete.gif" width="16" height="16" class="delete" alt="Delete" style="cursor: pointer;" /></td>
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

<script type="text/javascript">
  $(function(){
    $('.delete').click(function(){
      $(this).parent().parent().fadeTo(400, 0, function () {
        $(this).remove();
      });
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>admin/land/delete",
        data: "id="+$(this).prev().val(),
        success: function(html){
          $(".top-bar").html(html);
        }
      });

      return false
    });
  });
</script>