<?php

namespace BizlyLabs\Wex;

class GetPaymentInformationUrlRequest
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
     * @var string $MerchantLogUniqueID
     * @access public
     */
    public $MerchantLogUniqueID = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantLogUniqueID
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $MerchantLogUniqueID)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->MerchantLogUniqueID = $MerchantLogUniqueID;
    }

}
