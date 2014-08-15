<?php
/**
 * Description of CssClassHelperTest
 *
 * @author David Yell <neon1024@gmail.com>
 */

App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('CssClassHelper', 'SlugToCss.View/Helper');

class CssClassHelperTest extends CakeTestCase {

/**
 * Setup the test and instantiate the classes that we need
 */
	public function setUp() {
		parent::setUp();
		$Controller = new Controller();
		$View = new View($Controller);
		$this->CssClass = new CssClassHelper($View);
	}

/**
 * Remove classes and tidy up after the test has completed
 */
	public function tearDown() {
		parent::tearDown();
	}

/**
 * Data provider method for test to allow lots of different types of slug to be
 * tested
 * 
 * @return array
 */
	public function providerSlugs() {
		return array(
			array('3-mobile', 'three-mobile'),
			array('virgin-mobile', 'virgin-mobile'),
			array('99-issues', 'ninety-nine-issues'),
			array('word-and-10', 'word-and-10'),
			array('two-numbers-5-and-9', 'two-numbers-5-and-9')
		);
	}
	
/**
 * Test that the helper will produce a css friendly class from a slug
 * 
 * @dataProvider providerSlugs
 * @param str $slug
 */
	public function testConvertingSlugToClass($slug, $expected) {
		$result = $this->CssClass->convert($slug);
		
		$this->assertEqual($result, $expected);
	}
}