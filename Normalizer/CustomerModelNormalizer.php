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
class CustomerModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\CustomerModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\CustomerModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\CustomerModel();
        if (property_exists($data, 'tags')) {
            $object->setTags($this->denormalizer->denormalize($data->{'tags'}, 'Starweb\\Sdk\\Model\\CustomerTagModelCollection', 'json', $context));
        }
        if (property_exists($data, 'addresses')) {
            $object->setAddresses($this->denormalizer->denormalize($data->{'addresses'}, 'Starweb\\Sdk\\Model\\CustomerAddressesModelCollection', 'json', $context));
        }
        if (property_exists($data, 'approved')) {
            $object->setApproved($data->{'approved'});
        }
        if (property_exists($data, 'approvedAt')) {
            $object->setApprovedAt($data->{'approvedAt'});
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'customInfo1')) {
            $object->setCustomInfo1($data->{'customInfo1'});
        }
        if (property_exists($data, 'customInfo2')) {
            $object->setCustomInfo2($data->{'customInfo2'});
        }
        if (property_exists($data, 'customerId')) {
            $object->setCustomerId($data->{'customerId'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'externalServices')) {
            $object->setExternalServices($this->denormalizer->denormalize($data->{'externalServices'}, 'Starweb\\Sdk\\Model\\CustomerExternalServicesModelCollection', 'json', $context));
        }
        if (property_exists($data, 'modifiedAt')) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        if (property_exists($data, 'nationalIdNo')) {
            $object->setNationalIdNo($data->{'nationalIdNo'});
        }
        if (property_exists($data, 'pricelistId')) {
            $object->setPricelistId($data->{'pricelistId'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'vatNo')) {
            $object->setVatNo($data->{'vatNo'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTags()) {
            $data->{'tags'} = $this->normalizer->normalize($object->getTags(), 'json', $context);
        }
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
        }
        if (null !== $object->getApproved()) {
            $data->{'approved'} = $object->getApproved();
        }
        if (null !== $object->getApprovedAt()) {
            $data->{'approvedAt'} = $object->getApprovedAt();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getCustomInfo1()) {
            $data->{'customInfo1'} = $object->getCustomInfo1();
        }
        if (null !== $object->getCustomInfo2()) {
            $data->{'customInfo2'} = $object->getCustomInfo2();
        }
        if (null !== $object->getCustomerId()) {
            $data->{'customerId'} = $object->getCustomerId();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getExternalServices()) {
            $data->{'externalServices'} = $this->normalizer->normalize($object->getExternalServices(), 'json', $context);
        }
        if (null !== $object->getModifiedAt()) {
            $data->{'modifiedAt'} = $object->getModifiedAt();
        }
        if (null !== $object->getNationalIdNo()) {
            $data->{'nationalIdNo'} = $object->getNationalIdNo();
        }
        if (null !== $object->getPricelistId()) {
            $data->{'pricelistId'} = $object->getPricelistId();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getVatNo()) {
            $data->{'vatNo'} = $object->getVatNo();
        }
        return $data;
    }
}