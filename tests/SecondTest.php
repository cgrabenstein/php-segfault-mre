<?php

declare(strict_types=1);

use App\Bar\Kernel;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class SecondTest extends WebTestCase
{
    protected static function getKernelClass(): string
    {
        return Kernel::class;
    }

    public function testBar(): void
    {
        $client = self::createClient();
        $response = $client->request('GET', '/');

        self::assertNotNull($response);
    }
}
