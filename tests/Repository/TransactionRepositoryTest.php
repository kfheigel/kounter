<?php
declare(strict_types=1);

namespace App\Tests\Repository;

use App\Repository\TransactionRepository;
use Doctrine\Persistence\ManagerRegistry;
use PHPUnit\Framework\TestCase;

class TransactionRepositoryTest extends TestCase
{
    public function testRepositoryInstantiation(): void
    {
        $registry = $this->createStub(ManagerRegistry::class);
        $repository = new TransactionRepository($registry);

        $this->assertInstanceOf(TransactionRepository::class, $repository);
    }
}
