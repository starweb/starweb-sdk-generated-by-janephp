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
class ProductModelUpdatableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\ProductModelUpdatable';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\ProductModelUpdatable;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\ProductModelUpdatable();
        if (property_exists($data, 'categories')) {
            $values = array();
            foreach ($data->{'categories'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Sdk\\Model\\ProductCategoryLinkModel', 'json', $context);
            }
            $object->setCategories($values);
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'defaultVatRate')) {
            $object->setDefaultVatRate($data->{'defaultVatRate'});
        }
        if (property_exists($data, 'hasSeveralVariants')) {
            $object->setHasSeveralVariants($data->{'hasSeveralVariants'});
        }
        if (property_exists($data, 'isBackInStockWatchable')) {
            $object->setIsBackInStockWatchable($data->{'isBackInStockWatchable'});
        }
        if (property_exists($data, 'languages')) {
            $values_1 = array();
            foreach ($data->{'languages'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Starweb\\Sdk\\Model\\ProductLanguageModel', 'json', $context);
            }
            $object->setLanguages($values_1);
        }
        if (property_exists($data, 'manufacturerId')) {
            $object->setManufacturerId($data->{'manufacturerId'});
        }
        if (property_exists($data, 'mediaFiles')) {
            $values_2 = array();
            foreach ($data->{'mediaFiles'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Sdk\\Model\\ProductMediaFileLinkModel', 'json', $context);
            }
            $object->setMediaFiles($values_2);
        }
        if (property_exists($data, 'metaData')) {
            $values_3 = array();
            foreach ($data->{'metaData'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Sdk\\Model\\ProductMetaDataModelUpdatable', 'json', $context);
            }
            $object->setMetaData($values_3);
        }
        if (property_exists($data, 'modifiedAt')) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        if (property_exists($data, 'moreInfoUrl')) {
            $object->setMoreInfoUrl($data->{'moreInfoUrl'});
        }
        if (property_exists($data, 'productId')) {
            $object->setProductId($data->{'productId'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'unitId')) {
            $object->setUnitId($data->{'unitId'});
        }
        if (property_exists($data, 'variants')) {
            $values_4 = array();
            foreach ($data->{'variants'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Starweb\\Sdk\\Model\\ProductVariantModel', 'json', $context);
            }
            $object->setVariants($values_4);
        }
        if (property_exists($data, 'vatRates')) {
            $values_5 = array();
            foreach ($data->{'vatRates'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Starweb\\Sdk\\Model\\ProductVatRateModel', 'json', $context);
            }
            $object->setVatRates($values_5);
        }
        if (property_exists($data, 'visibility')) {
            $object->setVisibility($data->{'visibility'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCategories()) {
            $values = array();
            foreach ($object->getCategories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'categories'} = $values;
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getDefaultVatRate()) {
            $data->{'defaultVatRate'} = $object->getDefaultVatRate();
        }
        if (null !== $object->getHasSeveralVariants()) {
            $data->{'hasSeveralVariants'} = $object->getHasSeveralVariants();
        }
        if (null !== $object->getIsBackInStockWatchable()) {
            $data->{'isBackInStockWatchable'} = $object->getIsBackInStockWatchable();
        }
        if (null !== $object->getLanguages()) {
            $values_1 = array();
            foreach ($object->getLanguages() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'languages'} = $values_1;
        }
        if (null !== $object->getManufacturerId()) {
            $data->{'manufacturerId'} = $object->getManufacturerId();
        }
        if (null !== $object->getMediaFiles()) {
            $values_2 = array();
            foreach ($object->getMediaFiles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'mediaFiles'} = $values_2;
        }
        if (null !== $object->getMetaData()) {
            $values_3 = array();
            foreach ($object->getMetaData() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'metaData'} = $values_3;
        }
        if (null !== $object->getModifiedAt()) {
            $data->{'modifiedAt'} = $object->getModifiedAt();
        }
        if (null !== $object->getMoreInfoUrl()) {
            $data->{'moreInfoUrl'} = $object->getMoreInfoUrl();
        }
        if (null !== $object->getProductId()) {
            $data->{'productId'} = $object->getProductId();
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        if (null !== $object->getUnitId()) {
            $data->{'unitId'} = $object->getUnitId();
        }
        if (null !== $object->getVariants()) {
            $values_4 = array();
            foreach ($object->getVariants() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'variants'} = $values_4;
        }
        if (null !== $object->getVatRates()) {
            $values_5 = array();
            foreach ($object->getVatRates() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'vatRates'} = $values_5;
        }
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        return $data;
    }
}