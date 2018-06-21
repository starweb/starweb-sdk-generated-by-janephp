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
class ProductLanguageModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\ProductLanguageModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\ProductLanguageModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\ProductLanguageModel();
        if (property_exists($data, 'langCode')) {
            $object->setLangCode($data->{'langCode'});
        }
        if (property_exists($data, 'longDescription')) {
            $object->setLongDescription($data->{'longDescription'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'pageMetaDescription')) {
            $object->setPageMetaDescription($data->{'pageMetaDescription'});
        }
        if (property_exists($data, 'pageTitle')) {
            $object->setPageTitle($data->{'pageTitle'});
        }
        if (property_exists($data, 'permalink')) {
            $object->setPermalink($data->{'permalink'});
        }
        if (property_exists($data, 'shortDescription')) {
            $object->setShortDescription($data->{'shortDescription'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLangCode()) {
            $data->{'langCode'} = $object->getLangCode();
        }
        if (null !== $object->getLongDescription()) {
            $data->{'longDescription'} = $object->getLongDescription();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPageMetaDescription()) {
            $data->{'pageMetaDescription'} = $object->getPageMetaDescription();
        }
        if (null !== $object->getPageTitle()) {
            $data->{'pageTitle'} = $object->getPageTitle();
        }
        if (null !== $object->getPermalink()) {
            $data->{'permalink'} = $object->getPermalink();
        }
        if (null !== $object->getShortDescription()) {
            $data->{'shortDescription'} = $object->getShortDescription();
        }
        return $data;
    }
}