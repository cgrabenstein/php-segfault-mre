<?php

declare(strict_types=1);

spl_autoload_register(static function ($class) {
    if ($class === App\SomeClass::class) {
        include 'src/SomeClass.php';
    }
});

enum SomeEnum: string
{
    case ONE = 'ONE';
    case TWO = 'TWO';

    public const ONE_AND_TWO = [
        self::ONE,
        self::TWO
    ];
}

$enum = new ReflectionClass(SomeEnum::class);
$enum->getConstants();

$class = new ReflectionClass(App\SomeClass::class);
foreach ($class->getMethods() as $m) {
    foreach ($m->getAttributes() as $a) {
        (string) $a;
    }
}
