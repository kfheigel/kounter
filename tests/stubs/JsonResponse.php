<?php
declare(strict_types=1);

namespace Symfony\Component\HttpFoundation;

class JsonResponse
{
    private $data;
    private int $status;

    public function __construct($data = null, int $status = 200)
    {
        $this->data = $data;
        $this->status = $status;
    }

    public function getContent(): string
    {
        return json_encode($this->data);
    }

    public function getStatusCode(): int
    {
        return $this->status;
    }
}
