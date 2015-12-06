<?php 
///////////////////////////////////////////////
///      FAQSystem v1.2 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 6/12/2015           ///
///     Copyright (c) 2015, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3>Edit "<?php echo $faqinfo->title; ?>" FAQ Category</h3>
<form id="form" action="<?php echo adminaction('/faq/faqcaedit_db/');?>" method="post">
<table width="20%" border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td width="50%"><b>Title:</b></td>
    <td width="50%"><input type="text" name="title" id="title" value="<?php echo $faqinfo->title; ?>" /><input name="id" id="id" value="<?php echo $faqinfo->id; ?>" type="hidden" /></td>
  </tr>
  <tr>
    <td><b>Status:</b></td>
    <td><select name="active">
    <option value="0" <?php if ($faqinfo->active == 0) echo 'selected="selected"' ; ?>>Hidden</option>
    <option value="1" <?php if ($faqinfo->active == 1) echo 'selected="selected"' ; ?>>Shown</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><br /><input type="submit" value="Edit Category" /></td>
  </tr>
</table>
</form>
<br />
