<?php
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

class FAQ extends CodonModule {
	
public function index()
  {				
  		if(!Auth::LoggedIn())
		{
			$this->set('message', 'You must be logged in to access this feature!');
			$this->render('core_error.tpl');
			return;
		}
        $this->set('faqcat', FAQData::getallfaqcat());
		$this->show('faq/faq_index.tpl');
  } 
}