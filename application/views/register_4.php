<h2>Login Details</h2>
<div>
  <form name="register" method="post" action="<?php echo base_url(); ?>">
    <table width="100%" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td width="100">Cell Number</td>
        <td><input type="text" name="cell_no" /></td>
      </tr>
      <tr>
        <td>Telephone Number</td>
        <td><input type="text" name="tel_no" /></td>
      </tr>
      <tr>
        <td>Fax No</td>
        <td><input type="text" name="fax_no" /></td>
      </tr>
      <tr>
        <td>Url</td>
        <td><input type="text" name="url" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Submit" onclick="self.parent.tb_remove();" /></td>
      </tr>
    </table>
  </form>
</div>