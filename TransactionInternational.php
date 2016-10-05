<?php

namespace BizlyLabsWex;

class TransactionInternational
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
     * @var string $MerchantClassCode
     * @access public
     */
    public $MerchantClassCode = null;

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
     * @var string $MerchantCountry
     * @access public
     */
    public $MerchantCountry = null;

    /**
     * @var string $SourceCurrency
     * @access public
     */
    public $SourceCurrency = null;

    /**
     * @var float $SourceAmount
     * @access public
     */
    public $SourceAmount = null;

    /**
     * @var string $ApprovalCode
     * @access public
     */
    public $ApprovalCode = null;

    /**
     * @var string $BillingCurrency
     * @access public
     */
    public $BillingCurrency = null;

    /**
     * @var float $OriginalAmount
     * @access public
     */
    public $OriginalAmount = null;

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
     * @param dateTime $TransactionDate
     * @param dateTime $PostingDate
     * @param float $BillingAmount
     * @param string $ReferenceNumber
     * @param string $MerchantClassCode
     * @param string $MerchantDescription
     * @param string $MerchantCity
     * @param string $MerchantState
     * @param string $MerchantZipCode
     * @param string $MerchantCountry
     * @param string $SourceCurrency
     * @param float $SourceAmount
     * @param string $ApprovalCode
     * @param string $BillingCurrency
     * @param string $TransactionType
     * @param string $TransactionCode
     * @param boolean $IsCredit
     * @access public
     */
    public function __construct($TransactionDate, $PostingDate, $BillingAmount, $ReferenceNumber, $MerchantClassCode, $MerchantDescription, $MerchantCity, $MerchantState, $MerchantZipCode, $MerchantCountry, $SourceCurrency, $SourceAmount, $ApprovalCode, $BillingCurrency, $TransactionType, $TransactionCode, $IsCredit)
    {
      $this->TransactionDate = $TransactionDate;
      $this->PostingDate = $PostingDate;
      $this->BillingAmount = $BillingAmount;
      $this->ReferenceNumber = $ReferenceNumber;
      $this->MerchantClassCode = $MerchantClassCode;
      $this->MerchantDescription = $MerchantDescription;
      $this->MerchantCity = $MerchantCity;
      $this->MerchantState = $MerchantState;
      $this->MerchantZipCode = $MerchantZipCode;
      $this->MerchantCountry = $MerchantCountry;
      $this->SourceCurrency = $SourceCurrency;
      $this->SourceAmount = $SourceAmount;
      $this->ApprovalCode = $ApprovalCode;
      $this->BillingCurrency = $BillingCurrency;
      $this->TransactionType = $TransactionType;
      $this->TransactionCode = $TransactionCode;
      $this->IsCredit = $IsCredit;
    }

}
