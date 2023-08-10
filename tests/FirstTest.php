<?php

declare(strict_types=1);

use App\Common\TestEnum;
use App\Foo\Kernel;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

final class FirstTest extends WebTestCase
{
    protected static function getKernelClass(): string
    {
        return Kernel::class;
    }

    public function testFoo(): void
    {
        $enum = static::getContainer()->get(TestEnum::class, ContainerInterface::NULL_ON_INVALID_REFERENCE);

        self::assertNull($enum);
    }
}
