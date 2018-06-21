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
class PaginationModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\PaginationModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\PaginationModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\PaginationModel();
        if (property_exists($data, 'count')) {
            $object->setCount($data->{'count'});
        }
        if (property_exists($data, 'current_page')) {
            $object->setCurrentPage($data->{'current_page'});
        }
        if (property_exists($data, 'per_page')) {
            $object->setPerPage($data->{'per_page'});
        }
        if (property_exists($data, 'total')) {
            $object->setTotal($data->{'total'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCount()) {
            $data->{'count'} = $object->getCount();
        }
        if (null !== $object->getCurrentPage()) {
            $data->{'current_page'} = $object->getCurrentPage();
        }
        if (null !== $object->getPerPage()) {
            $data->{'per_page'} = $object->getPerPage();
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        }
        return $data;
    }
}