<?php
declare(strict_types=1);

namespace Frajt\Tests\Normalizer;

use Frajt\Normalizer\EnumNormalizer;
use PHPUnit\Framework\TestCase;

final class EnumNormalizerTest extends TestCase
{
    public function testShouldNormalizeEnumToSimpleValue(): void
    {
        $normalizer = new EnumNormalizer();

        $this->assertSame(DummyEnum::NAME, $normalizer->normalize(DummyEnum::NAME()));
    }

    public function testShouldVerifySupportForNormalizer(): void
    {
        $normalizer = new EnumNormalizer();

        $this->assertFalse($normalizer->supportsNormalization('test'));
        $this->assertTrue($normalizer->supportsNormalization(DummyEnum::NAME()));
    }
}