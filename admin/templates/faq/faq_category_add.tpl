<?php 
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3>Add a new FAQ Category</h3>
<form id="form" action="<?php echo adminaction('/faq/faqcatadd_a/');?>" method="post">
<table width="30%" border="0" cellpadding="1" cellspacing="0" align="center">
  <tr>
    <td width="50%">Title:</td>
    <td width="50%"><input type="text" name="title" id="title" /></td>
  </tr>
  <tr>
    <td>Status:</td>
    <td><select name="active">
    <option value="0">Hidden</option>
    <option value="1">Shown</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br /><input type="submit" value="Submit Scenery" /></td>
  </tr>
</table>
</form><br />