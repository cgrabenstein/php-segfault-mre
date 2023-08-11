<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

$enum = new ReflectionClass(App\SomeEnum::class);
$enum->getConstants();

$class = new ReflectionClass(App\SomeClass::class);
foreach ($class->getMethods() as $m) {
    foreach ($m->getAttributes() as $a) {
        (string) $a;
    }
}
