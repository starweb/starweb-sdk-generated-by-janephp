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
class TokenModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\TokenModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\TokenModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\TokenModel();
        if (property_exists($data, 'access_token')) {
            $object->setAccessToken($data->{'access_token'});
        }
        if (property_exists($data, 'expires_in')) {
            $object->setExpiresIn($data->{'expires_in'});
        }
        if (property_exists($data, 'scope')) {
            $object->setScope($data->{'scope'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAccessToken()) {
            $data->{'access_token'} = $object->getAccessToken();
        }
        if (null !== $object->getExpiresIn()) {
            $data->{'expires_in'} = $object->getExpiresIn();
        }
        if (null !== $object->getScope()) {
            $data->{'scope'} = $object->getScope();
        }
        return $data;
    }
}