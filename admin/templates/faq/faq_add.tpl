<?php 
///////////////////////////////////////////////
///      FAQSystem v1.2 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 6/12/2015           ///
///     Copyright (c) 2015, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3>Add a new FAQ</h3>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>	
<form action="<?php echo adminurl('/faq/faqadd_a/');?>" method="post">
<table width="60%" border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td width="50%"><b>Title:</b></td>
    <td width="50%"><input type="text" name="title" id="title" /><input type="hidden" name="category" id="category" value="<?php echo $info->id; ?>" /></td>
  </tr>
  <tr>
    <td><b>Status:</b></td>
    <td><select name="active">
    <option value="0">Hidden</option>
    <option value="1">Shown</option>
    </select></td>
  </tr>
  <tr><td colspan="2"><b>Answer:</b></td></tr>
  <tr><td colspan="2"><textarea cols="50" name="text" style="width: 70%; height: 100px;"></textarea></td></tr>
  <tr>
    <td colspan="2"><br /><input type="submit" value="Submit FAQ" /></td>
  </tr>
</table>
</form><br />
