<?php
declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\Repository;

use Doctrine\Persistence\ManagerRegistry;

class ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
    }
}
