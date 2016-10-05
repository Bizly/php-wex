<?php

namespace BizlyLabs/Wex;

class GetDynamicPaymentMethodRequest
{

    /**
     * @var string $BankNumber
     * @access public
     */
    public $BankNumber = null;

    /**
     * @var string $CompanyNumber
     * @access public
     */
    public $CompanyNumber = null;

    /**
     * @var string $MerchantCode
     * @access public
     */
    public $MerchantCode = null;

    /**
     * @var float $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var dateTime $CreateDate
     * @access public
     */
    public $CreateDate = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantCode
     * @param float $Amount
     * @param dateTime $CreateDate
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $MerchantCode, $Amount, $CreateDate)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->MerchantCode = $MerchantCode;
      $this->Amount = $Amount;
      $this->CreateDate = $CreateDate;
    }

}
