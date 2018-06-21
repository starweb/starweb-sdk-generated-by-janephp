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
class ProductModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\ProductModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\ProductModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\ProductModel();
        if (property_exists($data, 'categories')) {
            $object->setCategories($this->denormalizer->denormalize($data->{'categories'}, 'Starweb\\Sdk\\Model\\ProductCategoryLinkModelCollection', 'json', $context));
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
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Sdk\\Model\\ProductLanguageModelCollection', 'json', $context));
        }
        if (property_exists($data, 'manufacturerId')) {
            $object->setManufacturerId($data->{'manufacturerId'});
        }
        if (property_exists($data, 'mediaFiles')) {
            $object->setMediaFiles($this->denormalizer->denormalize($data->{'mediaFiles'}, 'Starweb\\Sdk\\Model\\ProductMediaFileLinkModelCollection', 'json', $context));
        }
        if (property_exists($data, 'metaData')) {
            $object->setMetaData($this->denormalizer->denormalize($data->{'metaData'}, 'Starweb\\Sdk\\Model\\ProductMetaDataModelCollection', 'json', $context));
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
        if (property_exists($data, 'unit')) {
            $object->setUnit($this->denormalizer->denormalize($data->{'unit'}, 'Starweb\\Sdk\\Model\\ProductUnitModelItem', 'json', $context));
        }
        if (property_exists($data, 'unitId')) {
            $object->setUnitId($data->{'unitId'});
        }
        if (property_exists($data, 'variants')) {
            $object->setVariants($this->denormalizer->denormalize($data->{'variants'}, 'Starweb\\Sdk\\Model\\ProductVariantModelCollection', 'json', $context));
        }
        if (property_exists($data, 'vatRates')) {
            $object->setVatRates($this->denormalizer->denormalize($data->{'vatRates'}, 'Starweb\\Sdk\\Model\\ProductVatRateModelCollection', 'json', $context));
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
            $data->{'categories'} = $this->normalizer->normalize($object->getCategories(), 'json', $context);
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
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        if (null !== $object->getManufacturerId()) {
            $data->{'manufacturerId'} = $object->getManufacturerId();
        }
        if (null !== $object->getMediaFiles()) {
            $data->{'mediaFiles'} = $this->normalizer->normalize($object->getMediaFiles(), 'json', $context);
        }
        if (null !== $object->getMetaData()) {
            $data->{'metaData'} = $this->normalizer->normalize($object->getMetaData(), 'json', $context);
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
        if (null !== $object->getUnit()) {
            $data->{'unit'} = $this->normalizer->normalize($object->getUnit(), 'json', $context);
        }
        if (null !== $object->getUnitId()) {
            $data->{'unitId'} = $object->getUnitId();
        }
        if (null !== $object->getVariants()) {
            $data->{'variants'} = $this->normalizer->normalize($object->getVariants(), 'json', $context);
        }
        if (null !== $object->getVatRates()) {
            $data->{'vatRates'} = $this->normalizer->normalize($object->getVatRates(), 'json', $context);
        }
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        return $data;
    }
}