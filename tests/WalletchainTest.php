<?php
/**
 * Tests for WalletChain
 */

use PHPUnit\Framework\TestCase;
use Walletchain\Walletchain;

class WalletchainTest extends TestCase {
    private Walletchain $instance;

    protected function setUp(): void {
        $this->instance = new Walletchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Walletchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
