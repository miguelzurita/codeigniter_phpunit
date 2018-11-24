<?php

class Temperature_converter_test extends TestCase {
	/**
	 * @dataProvider Temperature_converter_test::provide_temperature_data
	 */
	public function test_FtoC( $degree, $expected ) {
		$obj = new Temperature_converter();
		$actual = $obj->FtoC( $degree );
//		$actual = $obj->FtoC( 100 );
//		$expected = 37.8;
		$this->assertEquals( $expected, $actual, '', 0.01 );
	}

	public function provide_temperature_data() {
		return [
			//[Fahrenheit, Celsius]
			[ -40, -40.0 ],
			[ 0, -17.8 ],
			[ 32, 0.0 ],
			[ 100, 37.8 ],
			[ 212, 100.0 ]
		];
	}
}