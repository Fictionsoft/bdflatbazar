<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('user/privileges'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="4">User Privileges Update for <?php echo $ref_user['full_name']; ?></th>
      </tr>
      <tr>
        <th class="full" colspan="4">Gallery Section</th>
      </tr>
      <tr>
        <td class="first"><input type="checkbox" name="gallery_entry" value="1" <?php if($privilege['gallery_entry']==1){ ?>checked<?php } ?>><b>Gallery Item Entry</b></td>
        <td><input type="checkbox" name="gallery_list" value="1" <?php if($privilege['gallery_list']==1){ ?>checked<?php } ?>><b>Gallery Item List</b></td>
        <td><input type="checkbox" name="gallery_edit" value="1" <?php if($privilege['gallery_edit']==1){ ?>checked<?php } ?>><b>Gallery Item Edit</b></td>
        <td class="last"><input type="checkbox" name="gallery_delete" value="1" <?php if($privilege['gallery_delete']==1){ ?>checked<?php } ?>><b>Gallery Item Delete</b></td>
      </tr>
      <tr>
        <th class="full" colspan="4"><b>Client Section</b></th>
      </tr>
      <tr>
        <td class="first"><input type="checkbox" name="client_entry" value="1" <?php if($privilege['client_entry']==1){ ?>checked<?php } ?>><b>Client Entry</b></td>
        <td><input type="checkbox" name="client_list" value="1" <?php if($privilege['client_list']==1){ ?>checked<?php } ?>><b>Client List</b></td>
        <td><input type="checkbox" name="client_edit" value="1" <?php if($privilege['client_edit']==1){ ?>checked<?php } ?>><b>Client Edit</b></td>
        <td class="last"><input type="checkbox" name="client_delete" value="1" <?php if($privilege['client_delete']==1){ ?>checked<?php } ?>><b>Client Delete</b></td>
      </tr>
      <tr>
        <th class="full" colspan="4"><b>User Section</b></th>
      </tr>
      <tr>
        <td class="first"><input type="checkbox" name="user_entry" value="1" <?php if($privilege['user_entry']==1){ ?>checked<?php } ?>><b>User Entry</b></td>
        <td><input type="checkbox" name="user_list" value="1" <?php if($privilege['user_list']==1){ ?>checked<?php } ?>><b>User List</b></td>
        <td><input type="checkbox" name="user_edit" value="1" <?php if($privilege['user_edit']==1){ ?>checked<?php } ?>><b>User Edit</b></td>
        <td class="last"><input type="checkbox" name="user_delete" value="1" <?php if($privilege['user_delete']==1){ ?>checked<?php } ?>><b>User Delete</b></td>
      </tr>
      <tr class="bg">
        <td class="full" colspan="4"><input type="checkbox" name="user_privilege" value="1" <?php if($privilege['user_privilege']==1){ ?>checked<?php } ?>><b>User Privileges</b></td>
      </tr>
      <tr>
        <th class="full" colspan="4"><input type="submit" name="submit" value="Save" /></th>
      </tr>
    </table>
    <?php
      echo form_hidden('ref_user', $ref_user['id']);
      echo form_close();
    ?>
    <p>&nbsp;</p>
  </div>
</div>