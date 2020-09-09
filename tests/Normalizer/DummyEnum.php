<?php
declare(strict_types=1);

namespace Frajt\Tests\Normalizer;

use MabeEnum\Enum;

/**
 * @method static NAME()
 */
final class DummyEnum extends Enum
{
    public const NAME = 'test';
}