<?php

namespace BizlyLabs\Wex;

class GetPaymentInformationUrlResponse
{

    /**
     * @var MerchantLogResponseCodeEnum $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $PaymentInformationUrl
     * @access public
     */
    public $PaymentInformationUrl = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param string $PaymentInformationUrl
     * @access public
     */
    public function __construct($ResponseCode, $Description, $PaymentInformationUrl)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->PaymentInformationUrl = $PaymentInformationUrl;
    }

}
