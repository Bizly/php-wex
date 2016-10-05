<?php

class DeleteAuthorizationRequest
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
     * @var string $AuthorizationNumber
     * @access public
     */
    public $AuthorizationNumber = null;

    /**
     * @var float $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantLogUniqueID
     * @param string $AccountNumber
     * @param string $AuthorizationNumber
     * @param float $Amount
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $MerchantLogUniqueID, $AccountNumber, $AuthorizationNumber, $Amount)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->MerchantLogUniqueID = $MerchantLogUniqueID;
      $this->AccountNumber = $AccountNumber;
      $this->AuthorizationNumber = $AuthorizationNumber;
      $this->Amount = $Amount;
    }

}
