<?php

namespace BizlyLabsWex;

class MerchantRetrieveRequest
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
     * @var string $MerchantUniqueId
     * @access public
     */
    public $MerchantUniqueId = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantCode
     * @param string $MerchantUniqueId
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $MerchantCode, $MerchantUniqueId)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->MerchantCode = $MerchantCode;
      $this->MerchantUniqueId = $MerchantUniqueId;
    }

}
