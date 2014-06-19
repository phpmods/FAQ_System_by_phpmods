<?php
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////
?>
<?php 
$cur_version = file_get_contents("http://php-mods.eu/modules/versions/faq");
$ins_version = '1.1'; 
?>
<?php if($cur_version == $ins_version) {echo '<div id="success"><b>The FAQ Module is Up To Date.</b></div>';} 
elseif($cur_version > $ins_version) {echo '<div id="error"><b>A newer version is available for your FAQ Module.</b></div>';} else {echo '<div id="error"><b>There is a problem with the server connection. Please contact us.</b></div>';} ?>