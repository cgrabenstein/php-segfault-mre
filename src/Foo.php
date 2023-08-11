<?php

declare(strict_types=1);

namespace App;


final class Foo
{
    #[Bar(new Baz(SomeEnum::ARRAY))]
    public function __invoke(): void
    {
    }
}
