<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    if ($class === App\SomeEnum::class) {
        include 'src/SomeEnum.php';
    }

    if ($class === App\SomeClass::class) {
        include 'src/SomeClass.php';
    }
});

$enum = new ReflectionClass(App\SomeEnum::class);
$enum->getConstants();

$class = new ReflectionClass(App\SomeClass::class);
foreach ($class->getMethods() as $m) {
    foreach ($m->getAttributes() as $a) {
        (string) $a;
    }
}
