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
class ProductVariantAttributeValueModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\ProductVariantAttributeValueModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\ProductVariantAttributeValueModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\ProductVariantAttributeValueModel();
        if (property_exists($data, 'attribute')) {
            $object->setAttribute($this->denormalizer->denormalize($data->{'attribute'}, 'Starweb\\Sdk\\Model\\ProductVariantAttributeModel', 'json', $context));
        }
        if (property_exists($data, 'attributeValueId')) {
            $object->setAttributeValueId($data->{'attributeValueId'});
        }
        if (property_exists($data, 'languages')) {
            $values = array();
            foreach ($data->{'languages'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Sdk\\Model\\ProductVariantAttributeValueLanguageModel', 'json', $context);
            }
            $object->setLanguages($values);
        }
        if (property_exists($data, 'skuSuffix')) {
            $object->setSkuSuffix($data->{'skuSuffix'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAttribute()) {
            $data->{'attribute'} = $this->normalizer->normalize($object->getAttribute(), 'json', $context);
        }
        if (null !== $object->getAttributeValueId()) {
            $data->{'attributeValueId'} = $object->getAttributeValueId();
        }
        if (null !== $object->getLanguages()) {
            $values = array();
            foreach ($object->getLanguages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'languages'} = $values;
        }
        if (null !== $object->getSkuSuffix()) {
            $data->{'skuSuffix'} = $object->getSkuSuffix();
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        return $data;
    }
}