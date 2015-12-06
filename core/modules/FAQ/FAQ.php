<?php
///////////////////////////////////////////////
///      FAQSystem v1.2 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 6/12/2015           ///
///     Copyright (c) 2015, php-mods.eu     ///
///////////////////////////////////////////////

class FAQ extends CodonModule {
	
	public function index() {				
		if(!Auth::LoggedIn()) {
			$this->set('message', 'You must be logged in to access this feature!');
			$this->show('core_error');
			return;
		}
        $this->set('faqcat', FAQData::getallfaqcat());
		$this->show('faq/faq_index');
	} 
}
