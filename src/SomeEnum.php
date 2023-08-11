<?php

namespace App;

enum SomeEnum: string
{
    case ONE = 'ONE';

    public const ARRAY = [
        self::ONE
    ];
}
