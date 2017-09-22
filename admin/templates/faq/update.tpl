<?php
///////////////////////////////////////////////
///      FAQSystem v1.2 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 6/12/2015           ///
///     Copyright (c) 2015, php-mods.eu     ///
///////////////////////////////////////////////
?>
<?php 
$url = 'https://php-mods.eu/modules/versions/faq';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);
$cur_version = $data;
$ins_version = '1.2';
?>
<?php if($cur_version == $ins_version) {echo '<div id="success"><b>The FAQ Module is Up To Date.</b></div>';} 
elseif($cur_version > $ins_version) {echo '<div id="error"><b>A newer version is available for your FAQ Module.</b></div>';} else {echo '<div id="error"><b>There is a problem with the server connection. Please contact us.</b></div>';} ?>
