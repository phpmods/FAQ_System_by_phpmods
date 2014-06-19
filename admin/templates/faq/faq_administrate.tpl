<?php 
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3><?php echo $info->title; ?> Category</h3>
<table id="tabledlist" class="tablesorter">
<thead>
<tr>
<th align="center" width="15%"><b>Question</b></th>
<th align="center" width="55%"><b>Answer</b></th>
<th align="center" width="15%"><b>Status</b></th>
<th align="center" width="15%"></th>
</tr>
</thead>
<tbody>
<?php
if(!$faqina)
        {echo '<tr><td colspan="3" align="center">Currently, there are not any Frequently Asked Questions in this category.</td></tr>';}
            else {
       foreach($faqina as $faq) { ?>
<tr>
<td align="center"><?php echo $faq->title; ?></td>
<td align="center"><?php echo $faq->text; ?></td>
<td align="center">
    <?php if($faq->active == '1'){echo '<font color="green"><b>Shown</b></font>';} 
    else {echo '<font color="red"><b>Hidden</b></font>';} ?>
</td>
<td align="center">
    <a href="<?php echo SITE_URL; ?>/admin/index.php/FAQ/faqedit/<?php echo $faq->id; ?>" class="button">Edit</a> 
    <a href="<?php echo SITE_URL; ?>/admin/index.php/FAQ/faqdelete/<?php echo $faq->id; ?>/<?php echo $faq->category; ?>" class="button">Delete</a>
</td>
</tr>
<?php } } ?>
<tr><td colspan="4" align="center">
    <a href="<?php echo SITE_URL; ?>/admin/index.php/faq/faqadd/<?php echo $info->id; ?>" class="button">Add a new FAQ</a>
</td></tr>
</tbody>
</table><br />
<table width="30%" align="center">
<tr><td colspan="3" align="center"><b>Status: </b>
    <?php if($info->active == '1'){echo '<font color="green"><b>Shown</b></font>';} else {echo '<font color="red"><b>Hidden</b></font>';} ?><br /><br /></td></tr>
<tr>
<td align="center" width="50%"><a href="<?php echo SITE_URL; ?>/admin/index.php/FAQ/faqcaedit/<?php echo $info->id; ?>" class="button">Edit Category</a></td>
<td align="center">
<a href="<?php echo SITE_URL; ?>/admin/index.php/FAQ/faqcategorydelete/<?php echo $info->id; ?>" class="button" onclick="return confirm('This will delete all the FAQ in this category. Are you sure you want to continue?');">Delete Category</a></td>
</tr>
</table>
<br />