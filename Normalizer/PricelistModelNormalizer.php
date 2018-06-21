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
class PricelistModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\PricelistModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\PricelistModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\PricelistModel();
        if (property_exists($data, 'countryCodes')) {
            $values = array();
            foreach ($data->{'countryCodes'} as $value) {
                $values[] = $value;
            }
            $object->setCountryCodes($values);
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'isCountryPricelist')) {
            $object->setIsCountryPricelist($data->{'isCountryPricelist'});
        }
        if (property_exists($data, 'isCustomerPricelist')) {
            $object->setIsCustomerPricelist($data->{'isCustomerPricelist'});
        }
        if (property_exists($data, 'isMaster')) {
            $object->setIsMaster($data->{'isMaster'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'parentPricelistId')) {
            $object->setParentPricelistId($data->{'parentPricelistId'});
        }
        if (property_exists($data, 'pricelistId')) {
            $object->setPricelistId($data->{'pricelistId'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCountryCodes()) {
            $values = array();
            foreach ($object->getCountryCodes() as $value) {
                $values[] = $value;
            }
            $data->{'countryCodes'} = $values;
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getIsCountryPricelist()) {
            $data->{'isCountryPricelist'} = $object->getIsCountryPricelist();
        }
        if (null !== $object->getIsCustomerPricelist()) {
            $data->{'isCustomerPricelist'} = $object->getIsCustomerPricelist();
        }
        if (null !== $object->getIsMaster()) {
            $data->{'isMaster'} = $object->getIsMaster();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getParentPricelistId()) {
            $data->{'parentPricelistId'} = $object->getParentPricelistId();
        }
        if (null !== $object->getPricelistId()) {
            $data->{'pricelistId'} = $object->getPricelistId();
        }
        return $data;
    }
}