<?php
///////////////////////////////////////////////
///      FAQSystem v1.2 by php-mods.eu      ///
///            Author php-mods.eu           ///
///           Packed at 6/12/2015           ///
///     Copyright (c) 2015, php-mods.eu     ///
///////////////////////////////////////////////

class FAQData extends CodonData {
	static function getallfaqcat() {
         $sql = "SELECT * FROM ".TABLE_PREFIX."faq_cat WHERE active=1";
         return DB::get_results($sql);
	}
	static function faqinall($id) {
		 $sql = "SELECT * FROM ".TABLE_PREFIX."faq WHERE category='$id' AND active=1 ORDER BY id";
		 return DB::get_results($sql);
	}
	static function getallcat() {
         $sql = "SELECT * FROM ". TABLE_PREFIX."faq_cat";
         return DB::get_results($sql);
	}
	static function getcatinfo($id) {
         $sql = "SELECT * FROM ".TABLE_PREFIX."faq_cat WHERE id='$id'";
         return DB::get_row($sql);
	}
	static function faqincat($id) {
         $sql = "SELECT * FROM ".TABLE_PREFIX."faq WHERE category='$id'";
		 return DB::get_results($sql);
	}
	static function faqcatadd($title, $active) {
         $sql = "INSERT INTO ".TABLE_PREFIX."faq_cat (id, title, active) VALUES	('', '$title', '$active')";
         DB::query($sql);
	}
	static function edit_category($title, $active, $id) {
         $query = "UPDATE ".TABLE_PREFIX."faq_cat SET title='$title', active='$active' WHERE id='$id'";
         DB::query($query);
    }
	static function deletefaqcategory($id)  {
	     $sql = "DELETE FROM ".TABLE_PREFIX."faq_cat WHERE id='$id'";
	     return DB::get_results($sql);
	}
	static function faqadd($title, $text, $category, $active) {
         $sql = "INSERT INTO ".TABLE_PREFIX."faq (id, title, text, category, active) VALUES	('', '$title', '$text', '$category', '$active')";
         DB::query($sql);
	}
    static function faqeditform($id) {
		$sql = "SELECT * FROM ".TABLE_PREFIX."faq WHERE id='$id'";
		return DB::get_row($sql);
	}
	static function edit_faq($title, $active, $text, $id) {
        $query = "UPDATE ".TABLE_PREFIX."faq SET title='$title', active='$active', text='$text' WHERE id='$id'";
        DB::query($query);
    }
	static function deletefaq($id)  {
	    $sql = "DELETE FROM ".TABLE_PREFIX."faq WHERE id='$id'";
	    return DB::get_results($sql);
	}
	static function deletefaq_by_cat($category) {
		$sql = "DELETE FROM ".TABLE_PREFIX."faq WHERE category='$category'";
		DB::query($sql);
	}
}
