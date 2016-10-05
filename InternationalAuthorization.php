<?php

include_once('Authorization.php');

class InternationalAuthorization extends Authorization
{

    /**
     * @var string $SourceCurrencyCode
     * @access public
     */
    public $SourceCurrencyCode = null;

    /**
     * @var float $SourceCurrencyAmount
     * @access public
     */
    public $SourceCurrencyAmount = null;

    /**
     * @var float $CurrencyConversionRate
     * @access public
     */
    public $CurrencyConversionRate = null;

    /**
     * @param dateTime $AuthorizationDateTime
     * @param float $Amount
     * @param string $MerchantName
     * @param string $MerchantClass
     * @param string $MerchantCity
     * @param string $MerchantState
     * @param string $MerchantZipCode
     * @param string $MerchantCounty
     * @param string $ResponseCode
     * @param string $ResponseCodeDescription
     * @param string $ApprovalCode
     * @param string $DeclineReason1
     * @param string $DeclineReason2
     * @param string $Status
     * @param string $MessageType
     * @param string $CountryCode
     * @param string $MessageTypeDescription
     * @param string $SourceCurrencyCode
     * @access public
     */
    public function __construct($AuthorizationDateTime, $Amount, $MerchantName, $MerchantClass, $MerchantCity, $MerchantState, $MerchantZipCode, $MerchantCounty, $ResponseCode, $ResponseCodeDescription, $ApprovalCode, $DeclineReason1, $DeclineReason2, $Status, $MessageType, $CountryCode, $MessageTypeDescription, $SourceCurrencyCode)
    {
      parent::__construct($AuthorizationDateTime, $Amount, $MerchantName, $MerchantClass, $MerchantCity, $MerchantState, $MerchantZipCode, $MerchantCounty, $ResponseCode, $ResponseCodeDescription, $ApprovalCode, $DeclineReason1, $DeclineReason2, $Status, $MessageType, $CountryCode, $MessageTypeDescription);
      $this->SourceCurrencyCode = $SourceCurrencyCode;
    }

}
