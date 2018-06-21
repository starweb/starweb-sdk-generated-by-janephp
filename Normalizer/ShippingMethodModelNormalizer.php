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
class ShippingMethodModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\ShippingMethodModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\ShippingMethodModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\ShippingMethodModel();
        if (property_exists($data, 'active')) {
            $object->setActive($data->{'active'});
        }
        if (property_exists($data, 'freeShippingMinItemsSubtotal')) {
            $object->setFreeShippingMinItemsSubtotal($data->{'freeShippingMinItemsSubtotal'});
        }
        if (property_exists($data, 'freeShippingMinWeight')) {
            $object->setFreeShippingMinWeight($data->{'freeShippingMinWeight'});
        }
        if (property_exists($data, 'languages')) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Sdk\\Model\\ShippingMethodLanguageModelCollection', 'json', $context));
        }
        if (property_exists($data, 'shippingMethodId')) {
            $object->setShippingMethodId($data->{'shippingMethodId'});
        }
        if (property_exists($data, 'validCountriesSelected')) {
            $values = array();
            foreach ($data->{'validCountriesSelected'} as $value) {
                $values[] = $value;
            }
            $object->setValidCountriesSelected($values);
        }
        if (property_exists($data, 'validForCountries')) {
            $object->setValidForCountries($data->{'validForCountries'});
        }
        if (property_exists($data, 'validForCustomerType')) {
            $object->setValidForCustomerType($data->{'validForCustomerType'});
        }
        if (property_exists($data, 'validForMaxItemsSubtotal')) {
            $object->setValidForMaxItemsSubtotal($data->{'validForMaxItemsSubtotal'});
        }
        if (property_exists($data, 'validForMaxWeight')) {
            $object->setValidForMaxWeight($data->{'validForMaxWeight'});
        }
        if (property_exists($data, 'validForMinItemsSubtotal')) {
            $object->setValidForMinItemsSubtotal($data->{'validForMinItemsSubtotal'});
        }
        if (property_exists($data, 'validForMinWeight')) {
            $object->setValidForMinWeight($data->{'validForMinWeight'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getActive()) {
            $data->{'active'} = $object->getActive();
        }
        if (null !== $object->getFreeShippingMinItemsSubtotal()) {
            $data->{'freeShippingMinItemsSubtotal'} = $object->getFreeShippingMinItemsSubtotal();
        }
        if (null !== $object->getFreeShippingMinWeight()) {
            $data->{'freeShippingMinWeight'} = $object->getFreeShippingMinWeight();
        }
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        if (null !== $object->getShippingMethodId()) {
            $data->{'shippingMethodId'} = $object->getShippingMethodId();
        }
        if (null !== $object->getValidCountriesSelected()) {
            $values = array();
            foreach ($object->getValidCountriesSelected() as $value) {
                $values[] = $value;
            }
            $data->{'validCountriesSelected'} = $values;
        }
        if (null !== $object->getValidForCountries()) {
            $data->{'validForCountries'} = $object->getValidForCountries();
        }
        if (null !== $object->getValidForCustomerType()) {
            $data->{'validForCustomerType'} = $object->getValidForCustomerType();
        }
        if (null !== $object->getValidForMaxItemsSubtotal()) {
            $data->{'validForMaxItemsSubtotal'} = $object->getValidForMaxItemsSubtotal();
        }
        if (null !== $object->getValidForMaxWeight()) {
            $data->{'validForMaxWeight'} = $object->getValidForMaxWeight();
        }
        if (null !== $object->getValidForMinItemsSubtotal()) {
            $data->{'validForMinItemsSubtotal'} = $object->getValidForMinItemsSubtotal();
        }
        if (null !== $object->getValidForMinWeight()) {
            $data->{'validForMinWeight'} = $object->getValidForMinWeight();
        }
        return $data;
    }
}