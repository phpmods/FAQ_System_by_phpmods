<?php
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

class FAQ extends CodonModule {
	
	public function HTMLHead() {
        $this->set('sidebar', 'faq/faq_sidebar.tpl');
    }
	public function NavBar() {
        echo '<li><a href="'.SITE_URL.'/admin/index.php/FAQ">FAQ</a></li>';
    }
	public function index() {
		$this->set('categories', FAQData::getallcat());
		$this->render('faq/faq_index.tpl');
	}
	public function administrate($id) {
		$this->set('info', FAQData::getcatinfo($id));
		$this->set('faqina', FAQData::faqincat($id));
		$this->render('faq/faq_administrate.tpl');
	}
	public function faqcatadd() {
	    $this->render('faq/faq_category_add.tpl');
    }
    public function faqcatadd_a() {
		if($this->post->title == '') {
			$this->set('message', 'Some fields are missing! Fill them all please.');
			$this->render('core_error.tpl');
			return;
		}	
	    $val = FAQData::faqcatadd($this->post->title, $this->post->active);
	 	$this->set('message', 'FAQ Category Added Successfully!');
		$this->render('core_success.tpl');
		$this->set('categories', FAQData::getallcat());
		$this->render('faq/faq_index.tpl');
		LogData::addLog(Auth::$userinfo->pilotid, "Added a faq category named \"{$this->post->title}\"");
    }
	public function faqcaedit($id) {
		$this->set('faqinfo', FAQData::getcatinfo($id));
		$this->render('faq/faq_category_edit.tpl');
	}
	public function faqcaedit_db() {
		if($this->post->title == '') {
			$this->set('message', 'Some fields are missing! Fill them all please.');
			$this->render('core_error.tpl');
			return;
		}
		$title = DB::escape($this->post->title);
		$active = DB::escape($this->post->active);
		$id = DB::escape($this->post->id);
		FAQData::edit_category($title, $active, $id);
		$this->set('message', 'FAQ Category Updated!');
		$this->render('core_success.tpl');
		$this->set('info', FAQData::getcatinfo($id));
		$this->set('faqina', FAQData::faqincat($id));
		$this->render('faq/faq_administrate.tpl');
		LogData::addLog(Auth::$userinfo->pilotid, "Updated the $title FAQ category.");
	}
	public function faqcategorydelete($id) {
	    FAQData::deletefaqcategory($id);
	    $this->set('message', 'Faq Category Deleted!');
	    $this->render('core_success.tpl');
	    $this->set('categories', FAQData::getallcat());
	    $this->render('faq/faq_index.tpl');
	    LogData::addLog(Auth::$userinfo->pilotid, "Deleted a FAQ Category.");
	}
	public function faqadd($id) {
		$this->set('info', FAQData::getcatinfo($id));
	    $this->render('faq/faq_add.tpl');
    }
    public function faqadd_a(){
		if($this->post->title == '' or $this->post->text == '') {
			$this->set('message', 'Some fields are missing! Fill them all please.');
			$this->render('core_error.tpl');
			return;
		}	
		$val = FAQData::faqadd($this->post->title, $this->post->text, $this->post->category, $this->post->active);
	 	$this->set('message', 'FAQ Added Successfully!');
		$this->render('core_success.tpl');
		$this->set('info', FAQData::getcatinfo($this->post->category));
		$this->set('faqina', FAQData::faqincat($this->post->category));
		$this->render('faq/faq_administrate.tpl');
		LogData::addLog(Auth::$userinfo->pilotid, "Added a faq with title \"{$this->post->title}\"");
	}
	public function faqedit($id) {
		$this->set('faqinfo', FAQData::faqeditform($id));
		$this->render('faq/faq_edit.tpl');
	}
	public function faqedit_db() {
		if($this->post->title == '' or $this->post->text == '') {
			$this->set('message', 'Some fields are missing! Fill them all please.');
			$this->render('core_error.tpl');
			return;
		}
		$category = DB::escape($this->post->category);
		$title = DB::escape($this->post->title);
		$active = DB::escape($this->post->active);
		$text = DB::escape($this->post->text);
		$id = DB::escape($this->post->id);
		FAQData::edit_faq($title, $active, $text, $id);
		$this->set('message', 'FAQ Updated!');
		$this->render('core_success.tpl');
		$this->set('info', FAQData::getcatinfo($category));
		$this->set('faqina', FAQData::faqincat($category));
		$this->render('faq/faq_administrate.tpl');
		LogData::addLog(Auth::$userinfo->pilotid, "Updated the $title FAQ.");
	}
	public function faqdelete($id, $cat) {
	  FAQData::deletefaq($id);
	  $this->set('message', 'FAQ Deleted!');
	  $this->render('core_success.tpl');
	  $this->set('info', FAQData::getcatinfo($cat));
		$this->set('faqina', FAQData::faqincat($cat));
		$this->render('faq/faq_administrate.tpl');
	  LogData::addLog(Auth::$userinfo->pilotid, "Deleted a FAQ.");
	}
}
