<?php

namespace BizlyLabs/Wex;

class GetDynamicPaymentMethodResponse
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
     * @var MerchantPaymentTypeEnum $PaymentMethod
     * @access public
     */
    public $PaymentMethod = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param MerchantPaymentTypeEnum $PaymentMethod
     * @access public
     */
    public function __construct($ResponseCode, $Description, $PaymentMethod)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->PaymentMethod = $PaymentMethod;
    }

}
