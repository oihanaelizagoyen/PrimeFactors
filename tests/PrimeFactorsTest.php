<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    private PrimeFactors $primeFactors;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->primeFactors = new PrimeFactors();
    }

    /**
     * @test
     */
    public function number_1_has_no_factory()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(1);

        $this->assertEmpty($calculatedPrimeFactors);
    }

    /**
     * @test
     */
    public function number_1_returns_2()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(2);

        $this->assertEquals([2], $calculatedPrimeFactors);
    }

    /**
     * @test
     */
    public function number_3_returns_3()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(3);

        $this->assertEquals([3], $calculatedPrimeFactors);
    }

    /**
     * @test
     */
    public function number_4_returns_2_2()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(4);

        $this->assertEquals([2, 2], $calculatedPrimeFactors);
    }


    /**
     * @test
     */
    public function number_5_returns_5()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(5);

        $this->assertEquals([5], $calculatedPrimeFactors);
    }

    /**
     * @test
     */
    public function number_6_returns_2_3()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(6);

        $this->assertEquals([2, 3], $calculatedPrimeFactors);
    }

    /**
     * @test
     */
    public function number_7_returns_7()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(7);

        $this->assertEquals([7], $calculatedPrimeFactors);
    }

    /**
     * @test
     */
    public function number_8_returns_2_2_2()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(8);

        $this->assertEquals([2, 2, 2], $calculatedPrimeFactors);
    }

    /**
     * @test
     */
    public function number_9_returns_3_3()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(9);

        $this->assertEquals([3, 3], $calculatedPrimeFactors);
    }

    /**
     * @test
     */
    public function number_10_returns_2_5()
    {
        $calculatedPrimeFactors = $this->primeFactors->calculatePrimeFactors(10);

        $this->assertEquals([2, 5], $calculatedPrimeFactors);
    }
}
