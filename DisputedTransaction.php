<?php

namespace BizlyLabs\Wex;

class DisputedTransaction
{

    /**
     * @var dateTime $TransactionDate
     * @access public
     */
    public $TransactionDate = null;

    /**
     * @var dateTime $PostingDate
     * @access public
     */
    public $PostingDate = null;

    /**
     * @var float $BillingAmount
     * @access public
     */
    public $BillingAmount = null;

    /**
     * @var string $ReferenceNumber
     * @access public
     */
    public $ReferenceNumber = null;

    /**
     * @var string $SequenceNumber
     * @access public
     */
    public $SequenceNumber = null;

    /**
     * @var string $MerchantClass
     * @access public
     */
    public $MerchantClass = null;

    /**
     * @var string $MerchantDescription
     * @access public
     */
    public $MerchantDescription = null;

    /**
     * @var string $MerchantCity
     * @access public
     */
    public $MerchantCity = null;

    /**
     * @var string $MerchantState
     * @access public
     */
    public $MerchantState = null;

    /**
     * @var string $MerchantZipCode
     * @access public
     */
    public $MerchantZipCode = null;

    /**
     * @var string $TransactionType
     * @access public
     */
    public $TransactionType = null;

    /**
     * @var string $TransactionCode
     * @access public
     */
    public $TransactionCode = null;

    /**
     * @var boolean $IsCredit
     * @access public
     */
    public $IsCredit = null;

    /**
     * @var boolean $IsDisputeClosed
     * @access public
     */
    public $IsDisputeClosed = null;

    /**
     * @var float $DisputeAmount
     * @access public
     */
    public $DisputeAmount = null;

    /**
     * @var string $DisputeRecipients
     * @access public
     */
    public $DisputeRecipients = null;

    /**
     * @var dateTime $DisputeDate
     * @access public
     */
    public $DisputeDate = null;

    /**
     * @var string $DisputeUserName
     * @access public
     */
    public $DisputeUserName = null;

    /**
     * @var dateTime $DisputeClosedDate
     * @access public
     */
    public $DisputeClosedDate = null;

    /**
     * @var string $DisputeClosedUserName
     * @access public
     */
    public $DisputeClosedUserName = null;

    /**
     * @var string $MerchantLogUniqueId
     * @access public
     */
    public $MerchantLogUniqueId = null;

    /**
     * @param dateTime $TransactionDate
     * @param dateTime $PostingDate
     * @param float $BillingAmount
     * @param string $ReferenceNumber
     * @param string $SequenceNumber
     * @param string $MerchantClass
     * @param string $MerchantDescription
     * @param string $MerchantCity
     * @param string $MerchantState
     * @param string $MerchantZipCode
     * @param string $TransactionType
     * @param string $TransactionCode
     * @param boolean $IsCredit
     * @param boolean $IsDisputeClosed
     * @param float $DisputeAmount
     * @param string $DisputeRecipients
     * @param dateTime $DisputeDate
     * @param string $DisputeUserName
     * @param string $DisputeClosedUserName
     * @param string $MerchantLogUniqueId
     * @access public
     */
    public function __construct($TransactionDate, $PostingDate, $BillingAmount, $ReferenceNumber, $SequenceNumber, $MerchantClass, $MerchantDescription, $MerchantCity, $MerchantState, $MerchantZipCode, $TransactionType, $TransactionCode, $IsCredit, $IsDisputeClosed, $DisputeAmount, $DisputeRecipients, $DisputeDate, $DisputeUserName, $DisputeClosedUserName, $MerchantLogUniqueId)
    {
      $this->TransactionDate = $TransactionDate;
      $this->PostingDate = $PostingDate;
      $this->BillingAmount = $BillingAmount;
      $this->ReferenceNumber = $ReferenceNumber;
      $this->SequenceNumber = $SequenceNumber;
      $this->MerchantClass = $MerchantClass;
      $this->MerchantDescription = $MerchantDescription;
      $this->MerchantCity = $MerchantCity;
      $this->MerchantState = $MerchantState;
      $this->MerchantZipCode = $MerchantZipCode;
      $this->TransactionType = $TransactionType;
      $this->TransactionCode = $TransactionCode;
      $this->IsCredit = $IsCredit;
      $this->IsDisputeClosed = $IsDisputeClosed;
      $this->DisputeAmount = $DisputeAmount;
      $this->DisputeRecipients = $DisputeRecipients;
      $this->DisputeDate = $DisputeDate;
      $this->DisputeUserName = $DisputeUserName;
      $this->DisputeClosedUserName = $DisputeClosedUserName;
      $this->MerchantLogUniqueId = $MerchantLogUniqueId;
    }

}
