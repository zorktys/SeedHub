<?php
/**
 * Tests for SeedHub
 */

use PHPUnit\Framework\TestCase;
use Seedhub\Seedhub;

class SeedhubTest extends TestCase {
    private Seedhub $instance;

    protected function setUp(): void {
        $this->instance = new Seedhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Seedhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
