<?php
///////////////////////////////////////////////
///      FAQSystem v1.1 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 19/6/2014           ///
///     Copyright (c) 2014, php-mods.eu     ///
///////////////////////////////////////////////

class FAQData extends CodonData {
	public function getallfaqcat() {
         $sql = "SELECT * FROM " . TABLE_PREFIX . "faq_cat WHERE active = '1'";
         return DB::get_results($sql);
	}
	public function faqinall($id) {
		 $sql = "SELECT * FROM " . TABLE_PREFIX . "faq WHERE category = '".$id."' AND active='1' ORDER BY id";
		 return DB::get_results($sql);
	}
	public function getallcat() {
         $sql = 'SELECT * FROM ' . TABLE_PREFIX . 'faq_cat';
         return DB::get_results($sql);
	}
	public function getcatinfo($id) {
         $sql = "SELECT * FROM " . TABLE_PREFIX . "faq_cat WHERE id = '".$id."'";
         return DB::get_row($sql);
	}
	public function faqincat($id) {
         $sql = "SELECT * FROM " . TABLE_PREFIX . "faq WHERE category = '".$id."'";
		 return DB::get_results($sql);
	}
	public function faqcatadd($title, $active) {
		 $title = DB::escape($title);
		 $active = DB::escape($active);
         $sql = "INSERT INTO " . TABLE_PREFIX . "faq_cat (id, title, active) VALUES	('','{$title}','{$active}')";
         DB::query($sql);
	}
	public function edit_category($title, $active, $id) {
         $query = "UPDATE " . TABLE_PREFIX . "faq_cat SET
         title='$title',
         active='$active'
         WHERE id='$id'";
         DB::query($query);
    }
	public function deletefaqcategory($id)  {
	     $sql = "DELETE FROM " . TABLE_PREFIX . "faq_cat WHERE id='$id'";
	     return DB::get_results($sql);
	}
	public function faqadd($title, $text, $category, $active) {
		 $title = DB::escape($title);
		 $text = DB::escape($text);
		 $category = DB::escape($category);
		 $active = DB::escape($active);
         $sql = "INSERT INTO " . TABLE_PREFIX . "faq (id, title, text, category, active) VALUES	('','{$title}','{$text}','{$category}','{$active}')";
         DB::query($sql);
	}
    public function faqeditform($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . "faq WHERE id = '".$id."'";
		return DB::get_row($sql);
	}
	public function edit_faq($title, $active, $text, $id) {
        $query = "UPDATE " . TABLE_PREFIX . "faq SET
        title='$title',
        active='$active',
        text='$text'
        WHERE id='$id'";
        DB::query($query);
    }
	public function deletefaq($id)  {
	    $sql = "DELETE FROM " . TABLE_PREFIX . "faq WHERE id='$id'";
	    return DB::get_results($sql);
	}
}