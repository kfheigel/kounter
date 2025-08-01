<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class TransactionController
{
    #[Route('/transactions', name: 'transaction_create', methods: ['POST'])]
    public function create(): JsonResponse
    {
        return new JsonResponse(['status' => 'created']);
    }

    #[Route('/transactions/{id}', name: 'transaction_update', methods: ['PUT'])]
    public function update(int $id): JsonResponse
    {
        return new JsonResponse(['status' => 'updated', 'id' => $id]);
    }

    #[Route('/transactions/{id}', name: 'transaction_delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        return new JsonResponse(['status' => 'deleted', 'id' => $id]);
    }
}
