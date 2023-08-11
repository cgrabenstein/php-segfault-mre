<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Bar\Kernel as BarKernel;
use App\Foo\Kernel as FooKernel;

$foo = new FooKernel('test', true);
$foo->boot();
$foo->shutdown();

$bar = new BarKernel('test', true);
$bar->boot();
$bar->shutdown();

echo (new DateTimeImmutable())->format('U');