<?php

namespace Starweb\Sdk\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CurrencyModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\CurrencyModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\CurrencyModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\CurrencyModel();
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'exchangeRate')) {
            $object->setExchangeRate($data->{'exchangeRate'});
        }
        if (property_exists($data, 'precision')) {
            $object->setPrecision($data->{'precision'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getExchangeRate()) {
            $data->{'exchangeRate'} = $object->getExchangeRate();
        }
        if (null !== $object->getPrecision()) {
            $data->{'precision'} = $object->getPrecision();
        }
        return $data;
    }
}