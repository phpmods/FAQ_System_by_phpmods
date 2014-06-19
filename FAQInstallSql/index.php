<?php
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

error_reporting(0);
    include_once '../core/codon.config.php';
    if(Auth::LoggedIn())
            {
	$email = 'info@php-mods.eu';
	$subject = 'FAQ System v1.1 Installed';
	$message = ''.SITE_NAME.' Installed FAQ System v1.1 Module URL '.SITE_URL.'';

	Util::SendEmail($email, $subject, $message);
                    if(PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN))
                    {
                        echo '<h4>FAQ System v1.1 Installer for '.SITE_NAME.'</h4>';
                    }
					
             else
                    {
                        header('Location: http://www.php-mods.eu/');
                    }
            }
            else
            {
                        header('Location: http://www.php-mods.eu/');
	}
	
	$sqldrop = "DROP TABLE IF EXISTS `" . TABLE_PREFIX . "faq`,
	`" . TABLE_PREFIX . "faq_cat`";
	DB::query($sqldrop);
	
	$sql1 = "CREATE TABLE `" . TABLE_PREFIX . "faq` (
	`id` int(11) NOT NULL auto_increment,
	`title` varchar(100) NOT NULL,
	`text` text NOT NULL,
	`category` int(11) NOT NULL,
	`active` int(11) NOT NULL,
	PRIMARY KEY  (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
	DB::query($sql1);
   
	$sql2 = "CREATE TABLE `" . TABLE_PREFIX . "faq_cat` (
	`id` int(11) NOT NULL auto_increment,
	`title` varchar(50) NOT NULL,
	`active` int(11) NOT NULL,
	PRIMARY KEY  (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
	DB::query($sql2);
   
            if(DB::errno() != 0)
                {echo '<br /><h4>Errors Appeared:</h4>';print_r(DB::error());}
            else 
                {
                    echo '<h4>FAQ System tables created!</h4>';
                }