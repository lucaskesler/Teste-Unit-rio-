<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    public function testIsEvenWithEvenNumber()
    {
        $this->assertTrue(Funcoes::isEven(4));
    }

    public function testIsEvenWithOddNumber()
    {
        $this->assertFalse(Funcoes::isEven(5));
    }

    public function testFactorialOfZero()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorialOfPositiveNumber()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialWithNegativeThrowsException()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-3);
    }

    public function testIsPalindromeWithValidPalindrome()
    {
        $this->assertTrue(Funcoes::isPalindrome('A man a plan a canal Panama'));
    }

    public function testIsPalindromeWithNonPalindrome()
    {
        $this->assertFalse(Funcoes::isPalindrome('Hello world'));
    }

    public function testFahrenheitToCelsius()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
        $this->assertEquals(100, Funcoes::fahrenheitToCelsius(212));
    }

    public function testCalculateDiscountValidValues()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountWithNegativePrice()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-100, 10);
    }

    public function testCalculateDiscountWithNegativePercent()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(100, -10);
    }
}
