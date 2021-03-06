<?php

declare(strict_types=1);

namespace TMihalicka\Duration\TimeUnit;

/**
 * Time unit representing one thousandth of a millisecond.
 *
 * @psalm-immutable
 */
final class Microseconds extends TimeUnit
{
    final public function __construct()
    {
        parent::__construct(self::MICRO_SCALE);
    }

    public static function make(): Microseconds
    {
        return new static();
    }
}
