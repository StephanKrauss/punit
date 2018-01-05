<?php

namespace Test\App;

use App\Calc;

class CalcTest {
	public function testSumPass() {
		$operation = new Calc();
		$expected = 2;
		$result = $operation->sum(1, 1);
		if ($result !== $expected) {
		    throw new \Exception('Expected: '.$expected.', Result: '.$result);
		}
	}
	
	public function testSumFail() {
		$operation = new Calc();
		$expected = 2;
		$result = $operation->sum(1, 1);
		if ($result !== $expected) {
		    throw new \Exception('Expected: '.$expected.', Result: '.$result);
		}
	}
	
	public function testVarDump() {
		$operation = new Calc();
		$expected = 'dridi walid';
		
		ob_start();
		$result = $operation->sum(15, 1);
		$output = ob_get_clean();
		
		if (strpos($output, $expected) === false) {
		    throw new \Exception('Expected: '.$expected.', STDOUT: '.$output);
		}
	}
}
