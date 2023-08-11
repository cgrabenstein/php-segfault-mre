<?php

declare(strict_types=1);

namespace App;

final class SomeClass
{
    #[Foo(new Bar(\SomeEnum::ONE_AND_TWO))]
    public function __invoke(): void
    {
    }
}
