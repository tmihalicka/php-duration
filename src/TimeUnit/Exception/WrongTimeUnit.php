<?php

declare(strict_types=1);

namespace TMihalicka\Duration\TimeUnit\Exception;

use RuntimeException;

final class WrongTimeUnit extends RuntimeException
{
    private const MESSAGE = "%s in not valid TimeUnit";

    public function __construct(object $unit)
    {
        parent::__construct(sprintf(self::MESSAGE, get_class($unit)));
    }
}
