<?php

namespace BizlyLabs\Wex;

class DisputeTransactionRequest
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
     * @var string $AccountNumber
     * @access public
     */
    public $AccountNumber = null;

    /**
     * @var string $TransactionReferenceNumber
     * @access public
     */
    public $TransactionReferenceNumber = null;

    /**
     * @var string $MerchantLogUniqueId
     * @access public
     */
    public $MerchantLogUniqueId = null;

    /**
     * @var float $DisputeAmount
     * @access public
     */
    public $DisputeAmount = null;

    /**
     * @var string $DisputeRecpients
     * @access public
     */
    public $DisputeRecpients = null;

    /**
     * @var DisputeTransactionReasonEnum $DisputeReason
     * @access public
     */
    public $DisputeReason = null;

    /**
     * @var string $DisputeReasonOtherDescription
     * @access public
     */
    public $DisputeReasonOtherDescription = null;

    /**
     * @var boolean $CloseDispute
     * @access public
     */
    public $CloseDispute = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $AccountNumber
     * @param string $TransactionReferenceNumber
     * @param string $MerchantLogUniqueId
     * @param float $DisputeAmount
     * @param string $DisputeRecpients
     * @param DisputeTransactionReasonEnum $DisputeReason
     * @param string $DisputeReasonOtherDescription
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $AccountNumber, $TransactionReferenceNumber, $MerchantLogUniqueId, $DisputeAmount, $DisputeRecpients, $DisputeReason, $DisputeReasonOtherDescription)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->AccountNumber = $AccountNumber;
      $this->TransactionReferenceNumber = $TransactionReferenceNumber;
      $this->MerchantLogUniqueId = $MerchantLogUniqueId;
      $this->DisputeAmount = $DisputeAmount;
      $this->DisputeRecpients = $DisputeRecpients;
      $this->DisputeReason = $DisputeReason;
      $this->DisputeReasonOtherDescription = $DisputeReasonOtherDescription;
    }

}
