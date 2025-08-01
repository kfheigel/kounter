<?php
declare(strict_types=1);

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\TransactionController;

class TransactionControllerTest extends TestCase
{
    public function testCreate(): void
    {
        $controller = new TransactionController();
        $response = $controller->create();
        $this->assertSame(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"status":"created"}', $response->getContent());
    }

    public function testUpdate(): void
    {
        $controller = new TransactionController();
        $response = $controller->update(5);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"status":"updated","id":5}', $response->getContent());
    }

    public function testDelete(): void
    {
        $controller = new TransactionController();
        $response = $controller->delete(2);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"status":"deleted","id":2}', $response->getContent());
    }
}
