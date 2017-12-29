<?php

namespace Test\App;

class AssertTest {

	//------------------------------------------
	// Array
	//------------------------------------------

	// assertArrayHasKey

	public function testArrayHasKeyPass() {
		$array = [
			'foo' => false,
			'bar' => true
		];
		assertArrayHasKey($array, 'foo');
	}

	public function testArrayHasKeyFail() {
		$array = [
			'bar' => true
		];
		assertArrayHasKey($array, 'foo');
	}

	// assertArrayHasKey

	public function testArrayHasKeysPass() {
		$array = [
			'foo' => false,
			'bar' => true
		];
		assertArrayHasKeys($array, ['foo', 'bar']);
	}

	public function testArrayHasKeysFail() {
		$array = [
			'bar' => true
		];
		assertArrayHasKeys($array, ['foo', 'bar']);
	}

	// assertArrayHasSize

	public function testArrayHasSizePass() {
		$array = [
			'foo' => false,
			'bar' => true
		];
		assertArrayHasSize($array, 2);
	}

	public function testArrayHasSizeFail() {
		$array = [
			'bar' => true
		];
		assertArrayHasSize($array, 2);
	}

	//------------------------------------------
	// Directory
	//------------------------------------------

	// assertDirectoryExists

	public function testDirectoryExistsPass() {
		$dirName = dirname(__FILE__);
		assertDirectoryExists($dirName);
	}

	public function testDirectoryExistsFail() {
		$dirName = dirname(__FILE__.DIRECTORY_SEPARATOR.'foo');
		assertDirectoryExists($dirName);
	}

	// assertDirectoryIsReadable

	public function testDirectoryIsReadablePass() {
		$dirName = dirname(__FILE__);
		assertDirectoryIsReadable($dirName);
	}

	public function testDirectoryIsReadableFail() {
		$dirName = dirname(__FILE__.DIRECTORY_SEPARATOR.'foo');
		assertDirectoryIsReadable($dirName);
	}

	// assertDirectoryIsWritable

	public function testDirectoryIsWritablePass() {
		$dirName = dirname(__FILE__);
		assertDirectoryIsWritable($dirName);
	}

	public function testDirectoryIsWritableFail() {
		$dirName = dirname(__FILE__.DIRECTORY_SEPARATOR.'foo');
		assertDirectoryIsWritable($dirName);
	}

	//------------------------------------------
	// File
	//------------------------------------------

	// assertFileExists

	public function testFileExistsPass() {
		$fileName = __FILE__;
		assertFileExists($fileName);
	}

	public function testFileExistsFail() {
		$fileName = __FILE__.'foo';
		assertFileExists($fileName);
	}

	// assertFileEquals

	public function testFileEqualsPass() {
		$fileName = __FILE__;
		$content = file_get_contents($fileName);
		assertFileEquals($fileName, $content);
	}

	public function testFileEqualsFail() {
		$fileName = __FILE__.'foo';
		assertFileEquals($fileName, 'bar');
	}

	// assertFileIsReadable

	public function testFileIsReadablePass() {
		$fileName = __FILE__;
		assertFileIsReadable($fileName);
	}

	public function testFileIsReadableFail() {
		$fileName = __FILE__.'foo';
		assertFileIsReadable($fileName);
	}

	// assertFileIsWritable

	public function testFileIsWritablePass() {
		$fileName = __FILE__;
		assertFileIsWritable($fileName);
	}

	public function testFileIsWritableFail() {
		$fileName = __FILE__.'foo';
		assertFileIsWritable($fileName);
	}

	//------------------------------------------
	// Comparaison
	//------------------------------------------

	// assertEmpty

	public function testEmptyPass() {
		$var = null;
		assertEmpty($var);
		$var = '';
		assertEmpty($var);
		$var = false;
		assertEmpty($var);
	}

	public function testEmptyFail() {
		$var = 'foo';
		assertEmpty($var);
	}

	// assertEquals

	public function testEqualsPass() {
		$var = 'foo';
		assertEquals($var, 'foo');
	}

	public function testEqualsFail() {
		$var = 'foo';
		assertEquals($var, 'bar');
	}

	// assertFalse

	public function testFalsePass() {
		$var = false;
		assertFalse($var);
	}

	public function testFalseFail() {
		$var = null;
		assertFalse($var);
	}

	// assertTrue

	public function testTruePass() {
		$var = true;
		assertTrue($var);
	}

	public function testTrueFail() {
		$var = 1;
		assertTrue($var);
	}

	// assertGreaterThan

	public function testGreaterThanPass() {
		$var = 42;
		assertGreaterThan($var, 21);
	}

	public function testGreaterThanFail() {
		$var = 42;
		assertGreaterThan($var, 84);
	}

	// assertGreaterThanOrEqual

	public function testGreaterThanOrEqualPass() {
		$var = 42;
		assertGreaterThanOrEqual($var, 42);
	}

	public function testGreaterThanOrEqualFail() {
		$var = 42;
		assertGreaterThanOrEqual($var, 84);
	}

	//------------------------------------------
	// Object
	//------------------------------------------

	// assertInstanceOf

	public function testInstanceOfPass() {
		$var = new \DateTime();
		assertInstanceOf($var, 'DateTime');
		assertInstanceOf($var, \DateTime::class);
		assertInstanceOf($var, new \DateTime());
	}

	public function testInstanceOfFail() {
		$var = new \DateTime();
		assertInstanceOf($var, 'FooBar');
	}

	// assertNull

	public function testNullPass() {
		$var = null;
		assertNull($var);
	}

	public function testNullFail() {
		$var = 'foo';
		assertNull($var);
	}

	// assertObjectHasAttribute

	public function testObjectHasAttributePass() {
		$var = new \stdClass();
		$var->foo = 'bar';
		assertObjectHasAttribute($var, 'foo');
	}

	public function testObjectHasAttributeFail() {
		$var = new \stdClass();
		$var->foo = 'bar';
		assertObjectHasAttribute($var, 'bar');
	}

	//------------------------------------------
	// String
	//------------------------------------------

	// assertRegExp

	public function testRegExpPass() {
		$var = 'foo';
		assertRegExp($var, '#^[a-z]{3}$#');
	}

	public function testRegExpFail() {
		$var = 'foo';
		assertRegExp($var, '#^[a-np-z]{3}$#');
	}

	// assertStringEndsWith

	public function testStringEndsWithPass() {
		$var = 'foobar';
		assertStringEndsWith($var, 'bar');
	}

	public function testStringEndsWithFail() {
		$var = 'foobar';
		assertStringEndsWith($var, 'foo');
	}

	// assertStringStartsWith

	public function testStringStartsWithPass() {
		$var = 'foobar';
		assertStringStartsWith($var, 'foo');
	}

	public function testStringStartsWithFail() {
		$var = 'foobar';
		assertStringStartsWith($var, 'bar');
	}
}
