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
class OrderAddressModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\OrderAddressModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\OrderAddressModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\OrderAddressModel();
        if (property_exists($data, 'customerDelivery')) {
            $object->setCustomerDelivery($this->denormalizer->denormalize($data->{'customerDelivery'}, 'Starweb\\Sdk\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'customerInvoice')) {
            $object->setCustomerInvoice($this->denormalizer->denormalize($data->{'customerInvoice'}, 'Starweb\\Sdk\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'originalDelivery')) {
            $object->setOriginalDelivery($this->denormalizer->denormalize($data->{'originalDelivery'}, 'Starweb\\Sdk\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'originalInvoice')) {
            $object->setOriginalInvoice($this->denormalizer->denormalize($data->{'originalInvoice'}, 'Starweb\\Sdk\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'paymentMethodDelivery')) {
            $object->setPaymentMethodDelivery($this->denormalizer->denormalize($data->{'paymentMethodDelivery'}, 'Starweb\\Sdk\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'paymentMethodInvoice')) {
            $object->setPaymentMethodInvoice($this->denormalizer->denormalize($data->{'paymentMethodInvoice'}, 'Starweb\\Sdk\\Model\\AddressModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCustomerDelivery()) {
            $data->{'customerDelivery'} = $this->normalizer->normalize($object->getCustomerDelivery(), 'json', $context);
        }
        if (null !== $object->getCustomerInvoice()) {
            $data->{'customerInvoice'} = $this->normalizer->normalize($object->getCustomerInvoice(), 'json', $context);
        }
        if (null !== $object->getOriginalDelivery()) {
            $data->{'originalDelivery'} = $this->normalizer->normalize($object->getOriginalDelivery(), 'json', $context);
        }
        if (null !== $object->getOriginalInvoice()) {
            $data->{'originalInvoice'} = $this->normalizer->normalize($object->getOriginalInvoice(), 'json', $context);
        }
        if (null !== $object->getPaymentMethodDelivery()) {
            $data->{'paymentMethodDelivery'} = $this->normalizer->normalize($object->getPaymentMethodDelivery(), 'json', $context);
        }
        if (null !== $object->getPaymentMethodInvoice()) {
            $data->{'paymentMethodInvoice'} = $this->normalizer->normalize($object->getPaymentMethodInvoice(), 'json', $context);
        }
        return $data;
    }
}