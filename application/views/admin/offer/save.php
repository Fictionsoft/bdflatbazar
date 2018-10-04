<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <form name="rent" method="post" action="admin/rent/save" enctype="multipart/form-data">
      <table class="listing form" cellpadding="0" cellspacing="0">
        <tr>
          <th class="full" colspan="2">Offer</th>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="title" value="<?php if (isset($rent['title'])) { echo $rent['title']; } ?>" style="width: 280px;" /></td>
        </tr>
        <tr>
          <td>Details</td>
          <td><textarea name="details" style="width: 280px;"></textarea></td>
        </tr>
        <tr>
          <th colspan="2" align="left">Pictures</th>
        </tr>
        <tr>
          <td>Picture</td>
          <td><input type="file" name="picture" /></td>
        </tr>
        <input type="hidden" name="id" value="<?php if (isset($rent['id'])) { echo $rent['id']; } ?>" />
        <tr>
          <th colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></th>
        </tr>
      </table>
    </form>

    <p>&nbsp;</p>
  </div>
</div>