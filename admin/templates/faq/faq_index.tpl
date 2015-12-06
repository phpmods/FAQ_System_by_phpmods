<?php 
///////////////////////////////////////////////
///      FAQSystem v1.2 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 6/12/2015           ///
///     Copyright (c) 2015, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3>General System Information</h3>
<p>We would like to thank you for using our FAQ System Module developed for phpVMS. We are always trying to offer the best solutions for your virtual airlines.</p>
<p>The modules we have developed for phpVMS (either freeware or payware) can be found on our <a href="http://php-mods.eu/" target="_blank">website</a>.</p>
<?php echo Template::Show('faq/update.tpl'); ?>
<h3>Frequently Asked Questions Administration</h3>
<table id="tabledlist" class="tablesorter">
<thead>
<tr>
<th align="center" width="60%"><b>Title</b></th>
<th align="center" width="30%"><b>Status</b></th>
<th align="center" width="10%"><b></b></th>
</tr>
</thead>
<tbody>
<?php
if(!$categories) {echo '<tr><td colspan="3" align="center">Currently, there are no any Frequently Asked Questions Categories.</td></tr>';}
else {
	foreach($categories as $cat) { ?>
		<tr>
            <td align="center" width="30%"><?php echo $cat->title; ?></td>
            <td align="center" width="10%"><?php if($cat->active == 1){echo '<font color="green"><b>Shown</b></font>';} else {echo '<font color="red"><b>Hidden</b></font>';} ?></td>
            <td align="center" width="30%"><a href="<?php echo SITE_URL; ?>/admin/index.php/FAQ/administrate/<?php echo $cat->id; ?>" class="button">Administrate</a></td>
		</tr>
<?php } } ?>
<tr>
	<td colspan="3" align="center"><a href="<?php echo SITE_URL; ?>/admin/index.php/faq/faqcatadd" class="button">Add a new FAQ Category</a></td></tr>
</tbody>
</table><br />
<?php //Please do not remove the copyright notice below as it is part of the Creative Commons License which module is licensed under. Please consider buying me a coffee. FYI, coffee in Greece costs just 1€. My PayPal email address is geo.servetas@gmail.com. //  ?>
<p align="right">Copyright &copy; <?php echo date('Y'); ?> - <a href="http://php-mods.eu/" target="_blank"><font color="black">php-mods</font></a></p>
