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
class OrderModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Sdk\\Model\\OrderModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Sdk\Model\OrderModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Sdk\Model\OrderModel();
        if (property_exists($data, 'addresses')) {
            $object->setAddresses($this->denormalizer->denormalize($data->{'addresses'}, 'Starweb\\Sdk\\Model\\OrderAddressCollection', 'json', $context));
        }
        if (property_exists($data, 'amountPaid')) {
            $object->setAmountPaid($data->{'amountPaid'});
        }
        if (property_exists($data, 'amountPaidInBaseCurrency')) {
            $object->setAmountPaidInBaseCurrency($data->{'amountPaidInBaseCurrency'});
        }
        if (property_exists($data, 'amountToPay')) {
            $object->setAmountToPay($data->{'amountToPay'});
        }
        if (property_exists($data, 'amountToPayInBaseCurrency')) {
            $object->setAmountToPayInBaseCurrency($data->{'amountToPayInBaseCurrency'});
        }
        if (property_exists($data, 'baseCurrencyCode')) {
            $object->setBaseCurrencyCode($data->{'baseCurrencyCode'});
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'currencyExchangeRate')) {
            $object->setCurrencyExchangeRate($data->{'currencyExchangeRate'});
        }
        if (property_exists($data, 'currencyPrecision')) {
            $object->setCurrencyPrecision($data->{'currencyPrecision'});
        }
        if (property_exists($data, 'customInfo1')) {
            $object->setCustomInfo1($data->{'customInfo1'});
        }
        if (property_exists($data, 'customInfo2')) {
            $object->setCustomInfo2($data->{'customInfo2'});
        }
        if (property_exists($data, 'customInfo3')) {
            $object->setCustomInfo3($data->{'customInfo3'});
        }
        if (property_exists($data, 'customInfo4')) {
            $object->setCustomInfo4($data->{'customInfo4'});
        }
        if (property_exists($data, 'customer')) {
            $object->setCustomer($this->denormalizer->denormalize($data->{'customer'}, 'Starweb\\Sdk\\Model\\CustomerModelItem', 'json', $context));
        }
        if (property_exists($data, 'customerId')) {
            $object->setCustomerId($data->{'customerId'});
        }
        if (property_exists($data, 'discountCode')) {
            $object->setDiscountCode($data->{'discountCode'});
        }
        if (property_exists($data, 'externalServices')) {
            $object->setExternalServices($this->denormalizer->denormalize($data->{'externalServices'}, 'Starweb\\Sdk\\Model\\OrderExternalServiceModelCollection', 'json', $context));
        }
        if (property_exists($data, 'hasComment')) {
            $object->setHasComment($data->{'hasComment'});
        }
        if (property_exists($data, 'internalComment')) {
            $object->setInternalComment($data->{'internalComment'});
        }
        if (property_exists($data, 'isComplete')) {
            $object->setIsComplete($data->{'isComplete'});
        }
        if (property_exists($data, 'isRead')) {
            $object->setIsRead($data->{'isRead'});
        }
        if (property_exists($data, 'items')) {
            $object->setItems($this->denormalizer->denormalize($data->{'items'}, 'Starweb\\Sdk\\Model\\OrderItemModelCollection', 'json', $context));
        }
        if (property_exists($data, 'langCode')) {
            $object->setLangCode($data->{'langCode'});
        }
        if (property_exists($data, 'modifiedAt')) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        if (property_exists($data, 'onOrderStatusChangeProcessPayment')) {
            $object->setOnOrderStatusChangeProcessPayment($data->{'onOrderStatusChangeProcessPayment'});
        }
        if (property_exists($data, 'onOrderStatusChangeSendEmail')) {
            $object->setOnOrderStatusChangeSendEmail($data->{'onOrderStatusChangeSendEmail'});
        }
        if (property_exists($data, 'orderId')) {
            $object->setOrderId($data->{'orderId'});
        }
        if (property_exists($data, 'originalCustomerCustomInfo1')) {
            $object->setOriginalCustomerCustomInfo1($data->{'originalCustomerCustomInfo1'});
        }
        if (property_exists($data, 'originalCustomerCustomInfo2')) {
            $object->setOriginalCustomerCustomInfo2($data->{'originalCustomerCustomInfo2'});
        }
        if (property_exists($data, 'originalCustomerEmail')) {
            $object->setOriginalCustomerEmail($data->{'originalCustomerEmail'});
        }
        if (property_exists($data, 'originalCustomerNationalIdNo')) {
            $object->setOriginalCustomerNationalIdNo($data->{'originalCustomerNationalIdNo'});
        }
        if (property_exists($data, 'originalCustomerVatNo')) {
            $object->setOriginalCustomerVatNo($data->{'originalCustomerVatNo'});
        }
        if (property_exists($data, 'paymentFee')) {
            $object->setPaymentFee($data->{'paymentFee'});
        }
        if (property_exists($data, 'paymentMethodId')) {
            $object->setPaymentMethodId($data->{'paymentMethodId'});
        }
        if (property_exists($data, 'paymentMethodIdCode')) {
            $object->setPaymentMethodIdCode($data->{'paymentMethodIdCode'});
        }
        if (property_exists($data, 'paymentMethodName')) {
            $object->setPaymentMethodName($data->{'paymentMethodName'});
        }
        if (property_exists($data, 'paymentReference')) {
            $object->setPaymentReference($data->{'paymentReference'});
        }
        if (property_exists($data, 'paymentStatus')) {
            $object->setPaymentStatus($data->{'paymentStatus'});
        }
        if (property_exists($data, 'paymentVatRate')) {
            $object->setPaymentVatRate($data->{'paymentVatRate'});
        }
        if (property_exists($data, 'shippingCost')) {
            $object->setShippingCost($data->{'shippingCost'});
        }
        if (property_exists($data, 'shippingMethodId')) {
            $object->setShippingMethodId($data->{'shippingMethodId'});
        }
        if (property_exists($data, 'shippingMethodName')) {
            $object->setShippingMethodName($data->{'shippingMethodName'});
        }
        if (property_exists($data, 'shippingTrackerType')) {
            $object->setShippingTrackerType($data->{'shippingTrackerType'});
        }
        if (property_exists($data, 'shippingTrackingNo')) {
            $object->setShippingTrackingNo($data->{'shippingTrackingNo'});
        }
        if (property_exists($data, 'shippingVatRate')) {
            $object->setShippingVatRate($data->{'shippingVatRate'});
        }
        if (property_exists($data, 'shopCountryCode')) {
            $object->setShopCountryCode($data->{'shopCountryCode'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'status'}, 'Starweb\\Sdk\\Model\\OrderStatusModelItem', 'json', $context));
        }
        if (property_exists($data, 'statusId')) {
            $object->setStatusId($data->{'statusId'});
        }
        if (property_exists($data, 'totalAmount')) {
            $object->setTotalAmount($data->{'totalAmount'});
        }
        if (property_exists($data, 'totalAmountInBaseCurrency')) {
            $object->setTotalAmountInBaseCurrency($data->{'totalAmountInBaseCurrency'});
        }
        if (property_exists($data, 'totalVat')) {
            $object->setTotalVat($data->{'totalVat'});
        }
        if (property_exists($data, 'totalVatInBaseCurrency')) {
            $object->setTotalVatInBaseCurrency($data->{'totalVatInBaseCurrency'});
        }
        if (property_exists($data, 'totalWeight')) {
            $object->setTotalWeight($data->{'totalWeight'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
        }
        if (null !== $object->getAmountPaid()) {
            $data->{'amountPaid'} = $object->getAmountPaid();
        }
        if (null !== $object->getAmountPaidInBaseCurrency()) {
            $data->{'amountPaidInBaseCurrency'} = $object->getAmountPaidInBaseCurrency();
        }
        if (null !== $object->getAmountToPay()) {
            $data->{'amountToPay'} = $object->getAmountToPay();
        }
        if (null !== $object->getAmountToPayInBaseCurrency()) {
            $data->{'amountToPayInBaseCurrency'} = $object->getAmountToPayInBaseCurrency();
        }
        if (null !== $object->getBaseCurrencyCode()) {
            $data->{'baseCurrencyCode'} = $object->getBaseCurrencyCode();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getCurrencyExchangeRate()) {
            $data->{'currencyExchangeRate'} = $object->getCurrencyExchangeRate();
        }
        if (null !== $object->getCurrencyPrecision()) {
            $data->{'currencyPrecision'} = $object->getCurrencyPrecision();
        }
        if (null !== $object->getCustomInfo1()) {
            $data->{'customInfo1'} = $object->getCustomInfo1();
        }
        if (null !== $object->getCustomInfo2()) {
            $data->{'customInfo2'} = $object->getCustomInfo2();
        }
        if (null !== $object->getCustomInfo3()) {
            $data->{'customInfo3'} = $object->getCustomInfo3();
        }
        if (null !== $object->getCustomInfo4()) {
            $data->{'customInfo4'} = $object->getCustomInfo4();
        }
        if (null !== $object->getCustomer()) {
            $data->{'customer'} = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
        }
        if (null !== $object->getCustomerId()) {
            $data->{'customerId'} = $object->getCustomerId();
        }
        if (null !== $object->getDiscountCode()) {
            $data->{'discountCode'} = $object->getDiscountCode();
        }
        if (null !== $object->getExternalServices()) {
            $data->{'externalServices'} = $this->normalizer->normalize($object->getExternalServices(), 'json', $context);
        }
        if (null !== $object->getHasComment()) {
            $data->{'hasComment'} = $object->getHasComment();
        }
        if (null !== $object->getInternalComment()) {
            $data->{'internalComment'} = $object->getInternalComment();
        }
        if (null !== $object->getIsComplete()) {
            $data->{'isComplete'} = $object->getIsComplete();
        }
        if (null !== $object->getIsRead()) {
            $data->{'isRead'} = $object->getIsRead();
        }
        if (null !== $object->getItems()) {
            $data->{'items'} = $this->normalizer->normalize($object->getItems(), 'json', $context);
        }
        if (null !== $object->getLangCode()) {
            $data->{'langCode'} = $object->getLangCode();
        }
        if (null !== $object->getModifiedAt()) {
            $data->{'modifiedAt'} = $object->getModifiedAt();
        }
        if (null !== $object->getOnOrderStatusChangeProcessPayment()) {
            $data->{'onOrderStatusChangeProcessPayment'} = $object->getOnOrderStatusChangeProcessPayment();
        }
        if (null !== $object->getOnOrderStatusChangeSendEmail()) {
            $data->{'onOrderStatusChangeSendEmail'} = $object->getOnOrderStatusChangeSendEmail();
        }
        if (null !== $object->getOrderId()) {
            $data->{'orderId'} = $object->getOrderId();
        }
        if (null !== $object->getOriginalCustomerCustomInfo1()) {
            $data->{'originalCustomerCustomInfo1'} = $object->getOriginalCustomerCustomInfo1();
        }
        if (null !== $object->getOriginalCustomerCustomInfo2()) {
            $data->{'originalCustomerCustomInfo2'} = $object->getOriginalCustomerCustomInfo2();
        }
        if (null !== $object->getOriginalCustomerEmail()) {
            $data->{'originalCustomerEmail'} = $object->getOriginalCustomerEmail();
        }
        if (null !== $object->getOriginalCustomerNationalIdNo()) {
            $data->{'originalCustomerNationalIdNo'} = $object->getOriginalCustomerNationalIdNo();
        }
        if (null !== $object->getOriginalCustomerVatNo()) {
            $data->{'originalCustomerVatNo'} = $object->getOriginalCustomerVatNo();
        }
        if (null !== $object->getPaymentFee()) {
            $data->{'paymentFee'} = $object->getPaymentFee();
        }
        if (null !== $object->getPaymentMethodId()) {
            $data->{'paymentMethodId'} = $object->getPaymentMethodId();
        }
        if (null !== $object->getPaymentMethodIdCode()) {
            $data->{'paymentMethodIdCode'} = $object->getPaymentMethodIdCode();
        }
        if (null !== $object->getPaymentMethodName()) {
            $data->{'paymentMethodName'} = $object->getPaymentMethodName();
        }
        if (null !== $object->getPaymentReference()) {
            $data->{'paymentReference'} = $object->getPaymentReference();
        }
        if (null !== $object->getPaymentStatus()) {
            $data->{'paymentStatus'} = $object->getPaymentStatus();
        }
        if (null !== $object->getPaymentVatRate()) {
            $data->{'paymentVatRate'} = $object->getPaymentVatRate();
        }
        if (null !== $object->getShippingCost()) {
            $data->{'shippingCost'} = $object->getShippingCost();
        }
        if (null !== $object->getShippingMethodId()) {
            $data->{'shippingMethodId'} = $object->getShippingMethodId();
        }
        if (null !== $object->getShippingMethodName()) {
            $data->{'shippingMethodName'} = $object->getShippingMethodName();
        }
        if (null !== $object->getShippingTrackerType()) {
            $data->{'shippingTrackerType'} = $object->getShippingTrackerType();
        }
        if (null !== $object->getShippingTrackingNo()) {
            $data->{'shippingTrackingNo'} = $object->getShippingTrackingNo();
        }
        if (null !== $object->getShippingVatRate()) {
            $data->{'shippingVatRate'} = $object->getShippingVatRate();
        }
        if (null !== $object->getShopCountryCode()) {
            $data->{'shopCountryCode'} = $object->getShopCountryCode();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getStatusId()) {
            $data->{'statusId'} = $object->getStatusId();
        }
        if (null !== $object->getTotalAmount()) {
            $data->{'totalAmount'} = $object->getTotalAmount();
        }
        if (null !== $object->getTotalAmountInBaseCurrency()) {
            $data->{'totalAmountInBaseCurrency'} = $object->getTotalAmountInBaseCurrency();
        }
        if (null !== $object->getTotalVat()) {
            $data->{'totalVat'} = $object->getTotalVat();
        }
        if (null !== $object->getTotalVatInBaseCurrency()) {
            $data->{'totalVatInBaseCurrency'} = $object->getTotalVatInBaseCurrency();
        }
        if (null !== $object->getTotalWeight()) {
            $data->{'totalWeight'} = $object->getTotalWeight();
        }
        return $data;
    }
}