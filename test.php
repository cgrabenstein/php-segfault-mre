<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Foo;
use App\SomeEnum;


$someEnumReflectionClass = new ReflectionClass(SomeEnum::class);
$someEnumReflectionClass->getConstants();

$fooReflectionClass = new ReflectionClass(Foo::class);
foreach ($fooReflectionClass->getMethods() as $m) {
    foreach ($m->getAttributes() as $a) {
        (string) $a;
    }
}

echo (new DateTimeImmutable())->format('U');
