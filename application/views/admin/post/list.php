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
        <th class="first" width="177">Email</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Req. Title</th>
        <th>Location</th>
        <th>Date of Entry</th>
        <th class="last" colspan="2">Action</th>
      </tr>
      <?php
      $i = 0;
      foreach ($posts as $key=>$value) {
      ?>
        <tr <?php if ($i == 1) { echo 'class="bg"'; } ?>>
          <td class="first style1"><?php echo $value['email']; ?></td>
          <td><?php echo $value['name']; ?></td>
          <td><?php echo $value['phone']; ?></td>
          <td><?php echo $value['title']; ?></td>
          <td><?php echo $value['area_name'] . ', ' . $value['district_name']; ?></td>
          <td align="right"><?php echo date('jS M Y ', strtotime($value['created'])); ?></td>
          <td align="center"><a href="admin/post/save/<?php echo $value['id']; ?>"><img src="assets/images/admin/edit.gif" width="16" height="16" alt="Edit" /></a></td>
          <td align="center" class="last"><input type="hidden" value="<?php echo $value['id']; ?>" /><img src="assets/images/admin/delete.gif" width="16" height="16" class="delete" alt="Delete" style="cursor: pointer;" /></td>
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
        url: "<?php echo base_url(); ?>admin/post/delete",
        data: "id="+$(this).prev().val(),
        success: function(html){
          $(".top-bar").html(html);
        }
      });

      return false
    });
  });
</script>