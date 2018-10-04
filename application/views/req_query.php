<div style="width: 100%; text-align: center;">
  <h3>Send A Query</h3>
</div>

<div style="font-size: 12px;">
  <form name="req_query" method="post" action="<?php echo base_url(); ?>home/req_query">
    <table width="100%" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td width="120">Name</td>
        <td><input type="text" name="name" /></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" /></td>
      </tr>
      <tr>
        <td>Cell Number</td>
        <td><input type="text" name="cell_no" /></td>
      </tr>
      <input type="hidden" name="<?php echo $id; ?>" />
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Next"  /></td>
      </tr>
    </table>
  </form>
</div>