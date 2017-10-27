<?php

namespace Test\App;

use App\Assert;
use App\Calc;

class CalcTest extends Assert {
	public function testSum() {
		$operation = new Calc();
		$this->assertTrue($operation->sum(1, 1) === 2);
	}
}
