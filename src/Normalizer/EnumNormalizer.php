<?php
declare(strict_types=1);

namespace Frajt\Normalizer;

use MabeEnum\Enum;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class EnumNormalizer implements ContextAwareNormalizerInterface
{
    public function supportsNormalization($data, string $format = null, array $context = []): bool
    {
        return $data instanceof Enum;
    }

    public function normalize($object, string $format = null, array $context = [])
    {
        assert($object instanceof Enum);

        return $object->getValue();
    }
}