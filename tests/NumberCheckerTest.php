<?php

namespace Cristhian\Sprint17;

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

	public function test_IsEven() {
		$numberChecker = new NumberChecker(8);

		$this->assertTrue($numberChecker->isEven());
	}

	public function test_IsNotEven(){
		$numberChecker = new NumberChecker(7);

		$this->assertFalse($numberChecker->isEven());
	}

	public function test_IsPositive()  {
		$numberChecker = new NumberChecker(5);

		$this->assertTrue($numberChecker->isPositive());	

	}
	public function test_IsNotPositive() {
		$numberChecker = new NumberChecker(-5);

		$this->assertFalse($numberChecker->isPositive());
	}
}
?>