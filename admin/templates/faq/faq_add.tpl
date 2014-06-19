<?php 
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3>Add a new FAQ</h3>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>	
<form action="<?php echo adminurl('/faq/faqadd_a/');?>" method="post">
<table width="100%" border="0" cellpadding="1" cellspacing="0" align="center">
  <tr>
    <td width="47%"><b>Title:</b></td>
    <td width="53%"><input type="text" name="title" id="title" /><input type="hidden" name="category" id="category" value="<?php echo $info->id; ?>" /></td>
  </tr>
  <tr>
    <td><b>Status:</b></td>
    <td><select name="active">
    <option value="0">Hidden</option>
    <option value="1">Shown</option>
    </select></td>
  </tr>
  <tr><td colspan="2"><b>Answer:</b></td></tr>
  <tr><td colspan="2"><textarea cols="50" name="text" width="70%" style="width: 60%; height: 100px;"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br /><input type="submit" value="Submit FAQ" /></td>
  </tr>
</table>
</form><br />