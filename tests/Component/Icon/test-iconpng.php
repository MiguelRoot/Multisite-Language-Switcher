<?php

namespace lloc\MslsTests;

use Brain\Monkey\Functions;

use lloc\Msls\Component\Icon\IconPng;

class WP_Test_IconPng extends Msls_UnitTestCase {

	public function test_get() {
		Functions\when( 'plugin_dir_path' )->justReturn( dirname( __DIR__, 3 ) . '/' );

		$obj = new IconPng();

		$this->assertEquals( 'cz.png', $obj->get( 'cs_CZ' ) );
		$this->assertEquals( 'europeanunion.png', $obj->get( 'eo' ) );
		$this->assertEquals( 'catalonia.png', $obj->get( 'ca' ) );
		$this->assertEquals( 'ko.png', $obj->get( 'pinko' ) );
	}

}
