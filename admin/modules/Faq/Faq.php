<?php
///////////////////////////////////////////////
///      FAQSystem v1.2 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 6/12/2015           ///
///     Copyright (c) 2015, php-mods.eu     ///
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
		$this->show('faq/faq_index');
	}
	public function administrate($id) {
		$this->set('info', FAQData::getcatinfo($id));
		$this->set('faqina', FAQData::faqincat($id));
		$this->show('faq/faq_administrate');
	}
	public function faqcatadd() {
	    $this->show('faq/faq_category_add');
    }
    public function faq_insert() {
		if($this->post->title == '') {
			$this->set('message', 'Some fields are missing! Fill them all please.');
			$this->show('core_error');
			return;
		}	
		$title = DB::escape($this->post->title);
		$active = DB::escape($this->post->active);
	    FAQData::faqcatadd($title, $active);
	 	$this->set('message', 'FAQ Category Added');
		$this->show('core_success');
		self::index();
		LogData::addLog(Auth::$userinfo->pilotid, "Added a faq category titled \"{$title}\"");
    }
	public function faqcaedit($id) {
		$this->set('faqinfo', FAQData::getcatinfo($id));
		$this->show('faq/faq_category_edit');
	}
	public function faqcaedit_db() {
		if($this->post->title == '') {
			$this->set('message', 'Some fields are missing! Fill them all please.');
			$this->show('core_error');
			return;
		}
		$title = DB::escape($this->post->title);
		$active = DB::escape($this->post->active);
		$id = DB::escape($this->post->id);
		FAQData::edit_category($title, $active, $id);
		$this->set('message', 'FAQ Category Updated');
		$this->show('core_success');
		self::administrate($id);
		LogData::addLog(Auth::$userinfo->pilotid, "Updated the \"$title\" FAQ category.");
	}
	public function faqcategorydelete($id) {
		FAQData::deletefaq_by_cat($id);
	    FAQData::deletefaqcategory($id);
	    $this->set('message', 'Faq Category Deleted');
	    $this->show('core_success');
	    self::index();
	    LogData::addLog(Auth::$userinfo->pilotid, "Deleted a FAQ Category.");
	}
	public function faqadd($id) {
		$this->set('info', FAQData::getcatinfo($id));
	    $this->show('faq/faq_add');
    }
    public function faqadd_a(){
		if($this->post->title == '' or $this->post->text == '') {
			$this->set('message', 'Some fields are missing! Fill them all please.');
			$this->show('core_error');
			return;
		}	
		$title = DB::escape($this->post->title);
		$text = DB::escape($this->post->text);
		$category = DB::escape($this->post->category);
		$active = DB::escape($this->post->active);
		FAQData::faqadd($title, $text, $category, $active);
	 	$this->set('message', 'FAQ Added');
		$this->show('core_success');
		self::administrate($category);
		LogData::addLog(Auth::$userinfo->pilotid, "Added a faq titled \"{$title}\"");
	}
	public function faqedit($id) {
		$this->set('faqinfo', FAQData::faqeditform($id));
		$this->show('faq/faq_edit');
	}
	public function faqedit_db() {
		if($this->post->title == '' or $this->post->text == '') {
			$this->set('message', 'Some fields are missing! Fill them all please.');
			$this->show('core_error');
			return;
		}
		$category = DB::escape($this->post->category);
		$title = DB::escape($this->post->title);
		$active = DB::escape($this->post->active);
		$text = DB::escape($this->post->text);
		$id = DB::escape($this->post->id);
		FAQData::edit_faq($title, $active, $text, $id);
		$this->set('message', 'FAQ Updated');
		$this->show('core_success');
		self::administrate($category);
		LogData::addLog(Auth::$userinfo->pilotid, "Updated the \"$title\" FAQ.");
	}
	public function faqdelete($id, $cat) {
		FAQData::deletefaq($id);
		$this->set('message', 'FAQ Deleted');
		$this->show('core_success');
		self::administrate($cat);
		LogData::addLog(Auth::$userinfo->pilotid, "Deleted a FAQ.");
	}
}
