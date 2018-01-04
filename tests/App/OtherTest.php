<?php

namespace Test\App;

use App\Other;

class OtherTest {
	public function testMultPass() {
		$operation = new Other();
		$expected = 9;
		$result = $operation->mult(3, 3);
		if ($result !== $expected) {
		    throw new \Exception('Expected: '.$expected.', Result: '.$result);
		}
	}
}
