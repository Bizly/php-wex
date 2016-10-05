<?php

class GetRecentAccountActivityRequest
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
     * @var string $AccountNumber
     * @access public
     */
    public $AccountNumber = null;

    /**
     * @var int $MaxReturned
     * @access public
     */
    public $MaxReturned = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantLogUniqueID
     * @param string $AccountNumber
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $MerchantLogUniqueID, $AccountNumber)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->MerchantLogUniqueID = $MerchantLogUniqueID;
      $this->AccountNumber = $AccountNumber;
    }

}
