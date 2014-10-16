<?php 
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3><?php echo SITE_NAME; ?> Frequently Asked Questions</h3>
<?php
  if(!$faqcat)
        {echo 'Currently, there are no any Frequently Asked Question Categories.';}
            else {
            $count = 1;
            foreach($faqcat as $cat) { ?>
<h2><?php echo $countcat = $count; $count++; ?>) <?php echo $cat->title; ?></h2>


<?php $allfaq = FAQData::faqinall($cat->id); 
if(!$allfaq)
            {?> <tr><td colspan="3" align="center">There are no any Frequently Asked Questions about "<?php echo $cat->title; ?>".</td></tr> <?php }
            else {
            $countrl = 1;
foreach($allfaq as $faq) { ?>
<center><table width="80%" border="0">
<tr><td><?php echo $countcat; ?>.<?php echo $countrl; $countrl++;
?>) <a href="#<?php echo $faq->title; ?>"> <?php echo $faq->title; ?></a></td></tr>
</table></center>
<?php } } ?>
<?php } } ?><center><a href="#" > Back to top </a></center>
<?php
  if(!$faqcat)
        {echo 'Currently, there are no any Frequently Asked Questions.';}
            else {
            $count = 1;
            foreach($faqcat as $cat) { ?>
<h2><?php echo $countcat = $count; $count++; ?>) <?php echo $cat->title; ?></h2>
<?php $allfaq = FAQData::faqinall($cat->id); 
if(!$allfaq)
            {?> <tr><td colspan="3" align="center">There are no any Frequently Asked Questions about "<?php echo $cat->title; ?>".</td></tr> <?php }
            else {
            $countrl = 1;
foreach($allfaq as $faq) { ?>
<center><table width="80%" border="0">
<tr><td><b><?php echo $countcat; ?>.<?php echo $countrl; $countrl++;
?>) <a name="<?php echo $faq->title; ?>"> <?php echo $faq->title; ?></a></b></td></tr>
<tr><td><?php echo $faq->text; ?></td></tr>
</table></center>
<?php } } ?><center><a href="#" > Back to top </a></center>
<?php } } ?>
<?php //Please do not remove the copyright notice below as it is part of the Creative Commons License which module is licensed under. Please consider buying me a coffee. FYI, coffee in Greece costs just 1€. My PayPal email address is geo.servetas@gmail.com. //  ?>
<p align="right">Copyright &copy; <?php echo $year; ?> - <a href="http://php-mods.eu/" target="_blank"><font color="black">php-mods</font></a></p>
