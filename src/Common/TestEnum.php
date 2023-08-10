<?php

namespace App\Common;

enum TestEnum: string
{
    case ONE = 'ONE';
    case TWO = 'TWO';

    public const ONE_AND_TWO = [
        self::ONE,
        self::TWO
    ];
}
