<?php
declare(strict_types=1);

namespace Symfony\Component\Routing\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Route
{
    public function __construct(
        public string $path,
        public string $name = '',
        public array $methods = []
    ) {
    }
}
