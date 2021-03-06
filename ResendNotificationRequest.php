<?php

namespace BizlyLabs\Wex;

class ResendNotificationRequest
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
     * @var string $MerchantLogUniqueId
     * @access public
     */
    public $MerchantLogUniqueId = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantLogUniqueId
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $MerchantLogUniqueId)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->MerchantLogUniqueId = $MerchantLogUniqueId;
    }

}
