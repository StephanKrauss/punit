<?php

namespace App;

class Assert {
	public function assertTrue(bool $arg): bool {
		return $arg === true;
	}
}