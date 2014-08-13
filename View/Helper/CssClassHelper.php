<?php
/**
 * Description of CssClassHelper
 *
 * @author David Yell <neon1024@gmail.com>
 */

App::uses('AppHelper', 'View/Helper');
App::import('Vendor', 'CssSafeSlug.Numbertext', array('file' => 'number-text-soros-2013-02-12' . DS . 'Numbertext.php'));

class CssClassHelper extends AppHelper {
	
	public function convert($slug) {

		// Strip out any accented characters and transliterate them into a regular character
		setlocale(LC_ALL, 'en_GB');
		$slug = iconv("UTF-8", "ASCII//TRANSLIT", $slug);
		$slug = str_replace("'", "", $slug);
		$slug = str_replace('"', "", $slug);

		if (preg_match("/^[0-9]+/", $slug, $matches)) {
			$n2w = new Numbertext();
			$converted = $n2w->numbertext($matches[0], 'en_US');
			
			return strtr($slug, array($matches[0] => $converted));			
		}
		
		return $slug;
	}
	
}
