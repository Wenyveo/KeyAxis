<?php
/**
 * Tests for KeyAxis
 */

use PHPUnit\Framework\TestCase;
use Keyaxis\Keyaxis;

class KeyaxisTest extends TestCase {
    private Keyaxis $instance;

    protected function setUp(): void {
        $this->instance = new Keyaxis(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Keyaxis::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
