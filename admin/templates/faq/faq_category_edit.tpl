<?php 
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3>FAQ Category Edit</h3>
<form id="form" action="<?php echo adminaction('/faq/faqcaedit_db/');?>" method="post">
<table width="30%" border="0" cellpadding="1" cellspacing="0" align="center">
  <tr>
    <td width="50%">Title:</td>
    <td width="50%"><input type="text" name="title" id="title" value="<?php echo $faqinfo->title; ?>" /><input name="id" id="id" value="<?php echo $faqinfo->id; ?>" type="hidden" /></td>
  </tr>
  <tr>
    <td>Status:</td>
    <td><select name="active">
    <option value="0" <?php if ($faqinfo->active == '0') echo 'selected="selected"' ; ?>>Hidden</option>
    <option value="1" <?php if ($faqinfo->active == '1') echo 'selected="selected"' ; ?>>Shown</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><center><input type="submit" value="Edit FAQ Category" /></center></td>
  </tr>
</table>
</form>
<br />