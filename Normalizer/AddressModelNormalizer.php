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
class AddressModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\AddressModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\AddressModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\AddressModel();
        if (property_exists($data, 'address')) {
            $object->setAddress($data->{'address'});
        }
        if (property_exists($data, 'attention')) {
            $object->setAttention($data->{'attention'});
        }
        if (property_exists($data, 'careOf')) {
            $object->setCareOf($data->{'careOf'});
        }
        if (property_exists($data, 'city')) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'companyName')) {
            $object->setCompanyName($data->{'companyName'});
        }
        if (property_exists($data, 'countryCode')) {
            $object->setCountryCode($data->{'countryCode'});
        }
        if (property_exists($data, 'firstName')) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'lastName')) {
            $object->setLastName($data->{'lastName'});
        }
        if (property_exists($data, 'mobilePhoneNo')) {
            $object->setMobilePhoneNo($data->{'mobilePhoneNo'});
        }
        if (property_exists($data, 'phoneNo')) {
            $object->setPhoneNo($data->{'phoneNo'});
        }
        if (property_exists($data, 'postalCode')) {
            $object->setPostalCode($data->{'postalCode'});
        }
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'state')) {
            $object->setState($data->{'state'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAddress()) {
            $data->{'address'} = $object->getAddress();
        }
        if (null !== $object->getAttention()) {
            $data->{'attention'} = $object->getAttention();
        }
        if (null !== $object->getCareOf()) {
            $data->{'careOf'} = $object->getCareOf();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCompanyName()) {
            $data->{'companyName'} = $object->getCompanyName();
        }
        if (null !== $object->getCountryCode()) {
            $data->{'countryCode'} = $object->getCountryCode();
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'lastName'} = $object->getLastName();
        }
        if (null !== $object->getMobilePhoneNo()) {
            $data->{'mobilePhoneNo'} = $object->getMobilePhoneNo();
        }
        if (null !== $object->getPhoneNo()) {
            $data->{'phoneNo'} = $object->getPhoneNo();
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postalCode'} = $object->getPostalCode();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        return $data;
    }
}