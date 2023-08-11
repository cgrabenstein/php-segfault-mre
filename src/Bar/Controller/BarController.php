<?php

declare(strict_types=1);

namespace App\Bar\Controller;

use App\Common\TestEnum;
use OpenApi\Attributes\PathParameter;
use OpenApi\Attributes\Schema;
use Symfony\Component\HttpFoundation\Response;

final class BarController
{
    #[PathParameter(schema: new Schema(enum: TestEnum::ONE_AND_TWO))]
    public function __invoke(): Response
    {
        return new Response();
    }
}
