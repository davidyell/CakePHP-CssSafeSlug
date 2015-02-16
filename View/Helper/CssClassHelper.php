<?php
/**
 * Description of CssClassHelper
 *
 * @author David Yell <neon1024@gmail.com>
 */

App::uses('AppHelper', 'View/Helper');

class CssClassHelper extends AppHelper {
	
	public function convert($slug) {
		if (preg_match("/^[0-9]+/", $slug, $matches)) {
            $nf = new NumberFormatter(locale_get_default(), NumberFormatter::SPELLOUT);
            $word = $nf->format($matches[0]);

			return strtr($slug, array($matches[0] => $word));
		}
		
		return $slug;
	}
	
}
