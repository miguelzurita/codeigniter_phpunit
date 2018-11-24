<?php

/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 *
 * Para configurar en phpstorm es necesario seleccionar el interpretador php
 * configurar que use autoload.php de composer y colocar como configuracion por defecto "applications/tests/phpunit.xml"
 * https://www.youtube.com/watch?v=tzzZwFKwqWA
 * http://blog.a-way-out.net/blog/2015/06/12/codeigniter3-phpunit/
 *
 */
class Welcome_test extends TestCase {
	public function test_index() {
		$output = $this->request( 'GET', 'welcome/index' );
		$this->assertContains( '<title>Welcome to CodeIgniter</title>', $output );
	}

	public function test_method_404() {
		$this->request( 'GET', 'welcome/method_not_exist' );
		$this->assertResponseCode( 404 );
	}

	public function test_APPPATH() {
		$actual = realpath( APPPATH );
		$expected = realpath( __DIR__ . '/../..' );
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
}
